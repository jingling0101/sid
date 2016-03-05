<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no,minimal-ui">
    <meta name="MobileOptimized" content="320">
    <meta http-equiv="cleartype" content="on">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>管理后台-最快最稳定的秒评系统</title>
    <meta name="Keywords" content="秒赞网,24h秒赞,离线秒赞"/>
    <meta name="Description" content="最快最稳定的秒赞系统。24小时不间断离线秒赞QQ空间说说！"/>
    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <style type="text/css">
        .main {
            margin: 30px auto;
            border: 1px solid #D8D3D3;
            background-color: #F1F1F1
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-sm-3 hidden-xs"></div>
        <div class="col-md-4 col-sm-6 main">
            <h1 class="text-center">myweb</h1>
            <div class="panel panel-primary">
                <div class="panel-heading" style="background: #EC3939;">
                    <h3 class="panel-title" align="center">后台基本配置</h3>
                </div>
                <ul class="list-group" style="list-style:none;">
                    <li class="list-group-item"><a href="<?php echo U('Index/Website/webset'); ?>" class="btn btn-block btn-primary">系统配置</a></li>
                    <li class="list-group-item"><a href="<?php echo U('Index/Website/announcement'); ?>" class="btn btn-block btn-primary">公告设置</a></li>
                    <li class="list-group-item"><a href="<?php echo U('Index/Website/setmail'); ?>" class="btn btn-block btn-primary">邮箱配置</a></li>
                    <li class="list-group-item"><a href="<?php echo U('Index/Website/setnet'); ?>" class="btn btn-block btn-primary">服务器设置</a></li>
                    <li class="list-group-item"><a href="<?php echo U('Index/Website/setcron'); ?>" class="btn btn-block btn-primary">监控说明</a></li>
                </ul>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading" style="background: #EC3939;">
                    <h3 class="panel-title" align="center">代理管理</h3>
                </div>
                <ul class="list-group" style="list-style:none;">
                    <li class="list-group-item"><a href="<?php echo U('Index/Webproxy/setproxy'); ?>" class="btn btn-block btn-primary">代理拿卡价格设置</a></li>
                    <li class="list-group-item"><a href="<?php echo U('Index/Webproxy/proxylist'); ?>" class="btn btn-block btn-primary">代理用户列表</a></li>
                </ul>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading" style="background: #EC3939;">
                    <h3 class="panel-title" align="center">数据管理</h3>
                </div>
                <ul class="list-group" style="list-style:none;">
                    <li class="list-group-item"><a href="<?php echo U('Index/Webudata/qqlist'); ?>" class="btn btn-block btn-primary">QQ列表</a>
                    </li>
                    <li class="list-group-item"><a href="<?php echo U('Index/Webudata/userlist'); ?>" class="btn btn-block btn-primary">用户列表</a>
                    </li>
                    <li class="list-group-item"><a href="<?php echo U('Index/Webudata/userlist'); ?>?list=vip"
                                                   class="btn btn-block btn-primary">VIP列表</a>
                    </li>
                    <li class="list-group-item"><a href="<?php echo U('Index/Webudata/deletevip'); ?>"
                                                   class="btn btn-block btn-warning"
                                                   onClick="if(!confirm('确认清理？')){return false;}">清理到期VIP</a>
                    </li>
                    <li class="list-group-item"><a href="<?php echo U('Index/Webudata/deleteqqs'); ?>"
                                                   class="btn btn-block btn-warning"
                                                   onClick="if(!confirm('确认清理？')){return false;}">清理SID过期QQ</a>
                    </li>
                    <li class="list-group-item"><a href="<?php echo U('Index/Webudata/deletenvip'); ?>"
                                                   class="btn btn-block btn-warning"
                                                   onClick="if(!confirm('确认清理？')){return false;}">清理所有非VIP用户</a>
                    </li>
                    <li class="list-group-item"><a href="<?php echo U('Index/Webudata/deletenvipqq'); ?>"
                                                   class="btn btn-block btn-warning"
                                                   onClick="if(!confirm('确认清理？')){return false;}">清理所有非VIP的QQ</a>
                    </li>
                </ul>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading" style="background: #EC3939;">
                    <h3 class="panel-title" align="center">激活码管理</h3>
                </div>
                <ul class="list-group" style="list-style:none;">
                    <li class="list-group-item"><a href="<?php echo U('Index/Webudata/kmfree'); ?>" class="btn btn-block btn-primary">试用卡卡密</a>
                    </li>
                    <li class="list-group-item"><a href="<?php echo U('Index/Webudata/kmvip'); ?>" class="btn btn-block btn-primary">VIP卡卡密</a>
                    </li>
                    <li class="list-group-item"><a href="<?php echo U('Index/Webudata/kmqqnum'); ?>" class="btn btn-block btn-primary">配额卡卡密</a>
                    </li>
                </ul>
            </div>

        </div>
        <div class="col-md-4 col-sm-3 hidden-sx"></div>
    </div>
</div>
</body>
</html>