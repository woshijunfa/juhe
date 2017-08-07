<?php
/**
 * Created by PhpStorm.
 * User: chenjunfa
 * Date: 3/15/16
 * Time: 16:34
 */

namespace App\Services;
use App\Models\UserSmsLog;
use App\Services\EmailSerivce;
use Log;
use Config;
use Exception;

class CommonService
{
    static $g_baseurl = "http://www.superxing.cc";
    static $g_cookie = 'Hm_lvt_0d9630c30ceb9d86c445d5efedea60f8=1467876908; Hm_lpvt_0d9630c30ceb9d86c445d5efedea60f8=1467886090; XSRF-TOKEN=eyJpdiI6IjkxdUUzU2E3N1wvR2tHV1dzbE5MRVlRPT0iLCJ2YWx1ZSI6IjQ5RWl2MnljU3NZZUc1SVNYbFZFS3NaOFFySE9wUU5naCtcLzhDcllBT1YrZGkxaDlQM2diOG9TZWJVN3NQbUtJUWh3RFRIRUtcL2VOVWd6Rk9yQnFsWWc9PSIsIm1hYyI6IjIxMjg0NTc0ZTEwYjU5ZWYzMDBlNTczOGY1MDYzNTk1M2VjZGY1NDJlOWNiZjJiNmRkNWM2ZWUzODZiMGU0MjEifQ%3D%3D; laravel_session=eyJpdiI6IllVZGxrY2F2aWJvXC8xRWJsZ1I5WHB3PT0iLCJ2YWx1ZSI6IjlGTTBXNmhtUnV5VjYxaTJvYTlHb3VUYlNZQWhKWlBDVkR6T0lOVE9rVE9HaHFOZG5QWGViR1VNaHFPbm9NeDhlaXN1MXdISmJVZVcwMU9MSllLQnVBPT0iLCJtYWMiOiI0OTA3YjhhNmU4NjRjY2ZlOThiNmY4NTFhNTQ1ZTRkMjJlZDZlMjY4ZTJkZDE1NzhiMTNjYTc5NTg0MGRhNWExIn0%3D; Hm_lvt_5d12e2b4eed3b554ae941c0ac43c330a=1467876493; Hm_lpvt_5d12e2b4eed3b554ae941c0ac43c330a=1467902450; Hm_lvt_935d53e462220c223a1e7cbb7f16f1b9=1467876493; Hm_lpvt_935d53e462220c223a1e7cbb7f16f1b9=1467902450';

    static $g_header = [
                'Accept'=>'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
                'Connection'=>'keep-alive',
                'Accept-Language'=>'en-US,en;q=0.8,zh-CN;q=0.6,zh;q=0.4',
                'Cache-Control'=>'no-cache',
            ];

    public static function LogException($e)
    {
        Log::info($e);
        return app("App\Services\ExceptionMailer")->addException($e);

    }

    public static function createDir($path)
    { 
		if (!file_exists($path))
		{ 
			self::createDir(dirname($path)); 
			mkdir($path, 0777); 
		} 
	} 

    public static function autoLoadPage()
    {
    	if (strtoupper(request()->getMethod()) != 'GET') return false;

    	$uri = request()->getRequestUri();
        if ($pos = strpos($uri,'?')) 
            $uri = substr($uri,0,$pos);

        if($pos = strrpos($uri,'.'))
        {
        	$fix = substr($uri,$pos+1);
        	if (!in_array($fix,['jpg','png','css','js','ttf','woff','gif'])) return false;
        }
        else return self::autoLoadHtml();

        $curlurl = self::$g_baseurl . $uri;

        $basename = basename(public_path() . $uri);

        //创建目录
        $dir = dirname(public_path() . $uri);
        self::createDir($dir);
        $cmd = "cd " . $dir . " && wget " . $curlurl . ' && chmod 777 ' . $basename;
        exec($cmd);

        //如果文件存在并且大小大于0则返回正确
        $fileUrl = $dir . '/' . $basename;
        if (file_exists($fileUrl) && filesize($fileUrl) > 0)
        {
            Log::info("Success load file:" . $fileUrl);
            return true;
        } 

        //返回失败
        return false;
    }

    public static function autoLoadHtml()
    {
    	$uri = request()->getRequestUri();
    	$simUri = $uri;
        if ($pos = strpos($uri,'?')) $simUri = substr($uri,0,$pos);

    	$curlurl = self::$g_baseurl . $uri;

        $curlService = new CurlService($curlurl,self::$g_header,self::$g_cookie);
        $result = $curlService->get();
        if (!$result) return false;

        $htmlContent = $curlService->getHtml();
        if (empty($htmlContent)) return false;

        //存储到制定路径的指定模板
        $bladePath = base_path() .'/resources/views/autocopy'. $simUri . '.blade.php';
		self::createDir(dirname($bladePath));
		exec("rm -f " . $bladePath);
		file_put_contents($bladePath,$htmlContent,0777);

        //生成指定文件路由
        $routePath = app_path() . '/Http/routes.php';
        $content = file_get_contents($routePath);
        $addContent = "Route::get('".$simUri."', 'CopyController@autoNavi');
";
		if (!strpos($content,$addContent))
		{
			file_put_contents($routePath,$addContent,FILE_APPEND);
		}

		return true;
    }


    public static function genOrderNo()
    {
        return date("YmdHis") . rand(100, 999);
    }

    public static function getHost()
    {
        $request = request();    
        if (empty($request)) return false;

        //获取协议
        $rootUrl = $request->root();

        return $rootUrl;
    }
}


