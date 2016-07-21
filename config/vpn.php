<?php

$g_vpnbaseurl = env('VPN_HOST');

return [
    
    'notiryUrl' => $g_vpnbaseurl . "/admin/order_pay_post",

    'redirectUrl'   => $g_vpnbaseurl . "/admin/order_pay_return",
];
