<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------


//define('APP_AUTO_BUILD',true);
define('APP_DEBUG', true);
define('BIND_MODULE','index');

define('APP_PATH',dirname(__DIR__).'/application/');
require dirname(__DIR__).'/thinkphp/start.php';


// // 应用入口文件

// // 定义项目路径
// define('APP_PATH', __DIR__ . '/../application/');
// // 开启调试模式
// define('APP_DEBUG', true);

// // 加载框架引导文件
// require __DIR__ . '/../thinkphp/start.php';
