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
        body{background: #F1F1F1}
        .main {
            margin: 30px auto;
        }
    </style>
</head>

<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-sm-3 hidden-xs"></div>
        <div class="col-md-4 col-sm-6 main">
            <div class="panel panel-primary">
                <div class="panel-heading" style="background: #15A638;">
                    <h3 class="panel-title" align="center">系统配置</h3>
                </div>
                <div style="padding: 10px;text-align: center;">

                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
                        <ul>
                            <li><?php echo is_array($user)?$user['uid']:$user->uid; ?> || <?php echo is_array($user)?$user['user']:$user->user; ?> || <?php echo is_array($user)?$user['rmb']:$user->rmb; ?>元 || <?php echo $daili; ?> || <?php echo $vip; ?> ||<?php echo $peie; ?> ||<?php echo $login; echo $login; ?></li>
                        </ul>
                    <?php endforeach; endif; else: echo "" ;endif; ?>


                </div>
                <div class="panel panel-primary" style="padding:5px;text-align:center;">
                    <a href="?list=<?php echo $_GET['list']; ?>&p=1" class="btn btn-primary">首页</a>&nbsp;

                    <a href="#" class="btn btn-warning disabled"><?php echo $left; ?></a>&nbsp;
                    <a href="#" class="btn btn-warning disabled"><?php echo $page; ?></a>&nbsp;
                    <a href="#" class="btn btn-warning disabled"><?php echo $next; ?></a>&nbsp;

                    <a href="?list=<?php echo $_GET['list']; ?>&p=<?php echo $pages; ?>" class="btn btn-primary">末页</a>
                </div>
            </div>

            <div class="panel panel-primary">
                <a href="<?php echo U('Index/admin/adminmanage'); ?>" class="btn btn-block btn-primary">返回后台首页</a>
            </div>

        </div>
        <div class="col-md-4 col-sm-3 hidden-xs"></div>
    </div>
</div>
</body>
</html>