<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// $Id$

return [
    'url_route_on' => true,
    'log'          => [
        'type'             => 'socket',
        'host'             => '111.202.76.133',
        //日志强制记录到配置的client_id
        'force_client_id'  => '',
        //限制允许读取日志的client_id
        'allow_client_ids' => [],
       // 'SHOW_PAGE_TRACE'=>true, //打开调试
        'SHOW_PAGE_TRACE'       =>true, //trace开关
    ],
];
