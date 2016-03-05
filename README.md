thinkphp5.0 beta
===============

www  WEB部署目录（或者子目录）
├─composer.json         composer定义文件
├─README.md             README文件
├─LICENSE.txt           授权说明文件
├─application           应用目录
│  ├─common             公共模块目录（可以更改）
│  ├─runtime            应用的运行时目录（可写，可定制）
│  ├─module             模块目录
│  │  ├─config.php      模块配置文件
│  │  ├─common.php      模块函数文件
│  │  ├─controller      控制器目录
│  │  ├─model           模型目录
│  │  ├─view            视图目录
│  │  ├─ ...            更多类库目录
│  ├─common.php         公共函数文件
│  ├─route.php          路由配置文件
│  ├─database.php       数据库配置文件
│  └─config.php         公共配置文件
├─public                WEB目录（对外访问目录）
│  ├─index.php          入口文件
│  ├─.htaccess          用于apache的重写
│  └─router.php         快速测试文件
├─thinkphp              框架系统目录
│  ├─library            框架类库目录
│  │  ├─behavior        行为类库目录
│  │  ├─com             Com类库包目录
│  │  ├─think           Think类库包目录
│  │  ├─org             Org类库包目录
│  │  ├─ ...            更多类库目录
│  ├─traits             系统Traits目录
│  ├─vendor             第三方类库目录
│  ├─mode               应用模式目录
│  ├─tpl                系统模板目录
│  ├─base.php           基础文件
│  ├─convention.php     框架惯例配置文件
│  └─start.php          框架入口文件
~~~

> router.php用于php自带webserver支持，可用于快速测试
> 启动命令：php -S localhost:8888 -t . router.php
> 上面的目录结构和名称是可以改变的，这取决于你的入口文件和配置参数。



