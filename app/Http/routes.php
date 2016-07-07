<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

#主页介绍相关
Route::get('/', 'CopyController@index');
Route::get('', 'CopyController@index');

//登录注册相关
// Route::get('/users/sign_in', 'CopyController@common');
// Route::get('/users/sign_up', 'CopyController@common');

Route::get('/register',function(){return view('autocopy.register.email');});
Route::get('/register/email',function(){return view('autocopy.register.email');});

Route::get('/forget',function(){return view('autocopy.forget.email');});
Route::get('/forget/email',function(){return view('autocopy.forget.email');});

Route::post('/register/registProcess',"UserController@regiestPost");
Route::post('/login/login',"UserController@loginPost");
// Route::post('/setLoginPass',"UserController@setLoginPass");
// Route::post('/resetPassEmail',"UserController@resetPassEmail");
Route::get('/logout',"UserController@logout");


Route::get('/test','TestController@test');
//auto-generate-route
Route::group(['middleware'=>'auth'], function () {

});


Route::get('/', 'CopyController@autoNavi');
Route::get('/docs/api/id/39', 'CopyController@autoNavi');
Route::get('/docs/api/id/8', 'CopyController@autoNavi');
Route::get('/docs/api/id/46', 'CopyController@autoNavi');
Route::get('/login/mini', 'CopyController@autoNavi');
Route::get('/docs/api/id/36', 'CopyController@autoNavi');
Route::get('/juhesdk/sdk', 'CopyController@autoNavi');
Route::get('/juhesdk', 'CopyController@autoNavi');
Route::get('/juhesdk/openid', 'CopyController@autoNavi');
Route::get('/juhesdk/adocs/v/2', 'CopyController@autoNavi');
Route::get('/juhesdk/adocs', 'CopyController@autoNavi');
Route::get('/juhesdk/idocs/v/2', 'CopyController@autoNavi');
Route::get('/juhesdk/wdocs', 'CopyController@autoNavi');
Route::get('/juhesdk/wdocs/v/1', 'CopyController@autoNavi');
Route::get('/docs/index/cid/t1', 'CopyController@autoNavi');
Route::get('/docs/usersfavs', 'CopyController@autoNavi');
Route::get('/docs/api/id/92', 'CopyController@autoNavi');
Route::get('/login', 'CopyController@autoNavi');
// Route::get('/forget', 'CopyController@autoNavi');
// Route::get('/forget/email', 'CopyController@autoNavi');
// Route::get('/register', 'CopyController@autoNavi');
// Route::get('/register/email', 'CopyController@autoNavi');
Route::get('/docs', 'CopyController@autoNavi');
Route::get('/docs/index/sortby/1/page/2', 'CopyController@autoNavi');
Route::get('/docs/index/sortby/1/page/3', 'CopyController@autoNavi');
Route::get('/docs/index/sortby/1/page/4', 'CopyController@autoNavi');
Route::get('/docs/api/id/145', 'CopyController@autoNavi');
Route::get('/news/listview', 'CopyController@autoNavi');
Route::get('/qa', 'CopyController@autoNavi');
Route::get('/qa/show/id/1429', 'CopyController@autoNavi');
Route::get('/qa/t/v/API', 'CopyController@autoNavi');
Route::get('/docs/api/id/54', 'CopyController@autoNavi');
Route::get('/docs/api/id/73', 'CopyController@autoNavi');
Route::get('/docs/api/id/235', 'CopyController@autoNavi');
Route::get('/docs/api/id/127', 'CopyController@autoNavi');
Route::get('/docs/api/id/233', 'CopyController@autoNavi');
Route::get('/docs/api/id/232', 'CopyController@autoNavi');
Route::get('/docs/api/id/231', 'CopyController@autoNavi');
Route::get('/docs/api/id/229', 'CopyController@autoNavi');
Route::get('/docs/api/id/66', 'CopyController@autoNavi');
Route::get('/docs/api/id/103', 'CopyController@autoNavi');
Route::get('/docs/api/id/208', 'CopyController@autoNavi');
Route::get('/docs/api/id/199', 'CopyController@autoNavi');
Route::get('/docs/api/id/181', 'CopyController@autoNavi');
Route::get('/docs/api/id/181/aid/864', 'CopyController@autoNavi');
Route::get('/docs/api/id/181/aid/865', 'CopyController@autoNavi');
Route::get('/docs/api/id/181/aid/866', 'CopyController@autoNavi');
Route::get('/docs/api/id/181/aid/867', 'CopyController@autoNavi');
Route::get('/docs/api/id/181/aid/868', 'CopyController@autoNavi');
Route::get('/docs/api/id/181/aid/869', 'CopyController@autoNavi');
Route::get('/docs/api/id/181/aid/870', 'CopyController@autoNavi');
Route::get('/docs/api/id/181/aid/871', 'CopyController@autoNavi');
Route::get('/docs/api/id/181/aid/873', 'CopyController@autoNavi');
Route::get('/docs/api/id/181/aid/875', 'CopyController@autoNavi');
Route::get('/docs/api/id/181/aid/878', 'CopyController@autoNavi');
Route::get('/docs/api/id/181/aid/880', 'CopyController@autoNavi');
Route::get('/docs/api/id/181/aid/881', 'CopyController@autoNavi');
Route::get('/docs/api/id/233/aid/921', 'CopyController@autoNavi');
Route::get('/qa/questions', 'CopyController@autoNavi');
Route::get('/qa/tags', 'CopyController@autoNavi');
Route::get('/privacy', 'CopyController@autoNavi');
Route::get('/contact', 'CopyController@autoNavi');
Route::get('/docs/giftcard', 'CopyController@autoNavi');
Route::get('/docs/giftcardinfo/id/17', 'CopyController@autoNavi');
Route::get('/docs/api/id/231/aid/860', 'CopyController@autoNavi');
Route::get('/docs/api/id/231/aid/874', 'CopyController@autoNavi');
Route::get('/docs/api/id/231/aid/879', 'CopyController@autoNavi');
Route::get('/docs/index/sortby/1/page/5', 'CopyController@autoNavi');
Route::get('/docs/index/sortby/1/page/6', 'CopyController@autoNavi');
Route::get('/docs/index/sortby/1/page/7', 'CopyController@autoNavi');
Route::get('/docs/index/sortby/1/page/8', 'CopyController@autoNavi');
Route::get('/docs/index/sortby/2', 'CopyController@autoNavi');
Route::get('/docs/index/sortby/3', 'CopyController@autoNavi');
Route::get('/docs/index/sortby/4', 'CopyController@autoNavi');
Route::get('/docs/index/sortby/1', 'CopyController@autoNavi');
Route::get('/docs/index/cid/13', 'CopyController@autoNavi');
Route::get('/docs/index/cid/t4', 'CopyController@autoNavi');
Route::get('/docs/index/cid/t7', 'CopyController@autoNavi');
Route::get('/docs/index/cid/t2', 'CopyController@autoNavi');
Route::get('/qa/myask', 'CopyController@autoNavi');
Route::get('/docs/index/sortby/2/page/2', 'CopyController@autoNavi');
Route::get('/docs/index/sortby/2/page/3', 'CopyController@autoNavi');
Route::get('/docs/index/sortby/2/page/4', 'CopyController@autoNavi');
Route::get('/docs/index/sortby/2/page/5', 'CopyController@autoNavi');
Route::get('/docs/index/sortby/2/page/6', 'CopyController@autoNavi');
Route::get('/docs/index/sortby/2/page/7', 'CopyController@autoNavi');
Route::get('/docs/index/sortby/2/page/8', 'CopyController@autoNavi');
Route::get('/docs/index/sortby/2/page/1', 'CopyController@autoNavi');
Route::get('/docs/api/id/28', 'CopyController@autoNavi');
Route::get('/docs/index/sortby/1/page/1', 'CopyController@autoNavi');
Route::get('/docs/s/q/%E8%AF%9D%E8%B4%B9', 'CopyController@autoNavi');
Route::get('/docs/s/q/%E5%9F%BA%E7%AB%99', 'CopyController@autoNavi');
Route::get('/legal', 'CopyController@autoNavi');
Route::get('/login/logout', 'CopyController@autoNavi');
Route::get('/docs/api/id/221', 'CopyController@autoNavi');
Route::get('/docs/api/id/80', 'CopyController@autoNavi');
Route::get('/docs/api/id/197', 'CopyController@autoNavi');
Route::get('/docs/api/id/29', 'CopyController@autoNavi');
Route::get('/docs/api/id/192', 'CopyController@autoNavi');
Route::get('/docs/api/id/217', 'CopyController@autoNavi');
Route::get('/docs/api/id/90', 'CopyController@autoNavi');
Route::get('/docs/api/id/216', 'CopyController@autoNavi');
