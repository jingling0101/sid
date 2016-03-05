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
                    <form action="" class="form-sign" method="post">
                        <label for="name">手机版个人中心公告:</label>
                        <?php echo str_replace(array("\'",'\"'),array("'",'"'),$config['web_wap_user_gg']); ?>
                        <label for="name">电脑版个人中心公告:</label>
                        <?php echo str_replace(array("\'",'\"'),array("'",'"'),$config['web_www_user_gg']); ?>
                        <label for="name">手机版购买页公告:</label>
                        <?php echo str_replace(array("\'",'\"'),array("'",'"'),$config['web_wap_shop_rmb']); ?>
                        <label for="name">电脑版购买页公告:</label>
                        <?php echo str_replace(array("\'",'\"'),array("'",'"'),$config['web_www_shop_rmb']); ?>
                    </form>
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