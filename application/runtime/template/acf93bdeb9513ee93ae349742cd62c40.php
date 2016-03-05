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
                    <form action="<?php echo U('Index/Website/setnet'); ?>" class="form-sign" method="post">
                        <label for="name">每个服务器允许添加的QQ数:</label>
                        <input type="text" class="form-control" name="netnum" value="<?php echo is_array($config)?$config['netnum']:$config->netnum; ?>"/>
                        <label for="name">秒赞、秒评、转发总服务器数:</label>
                        <input type="text" class="form-control" name="zannet" value="<?php echo is_array($config)?$config['zannet']:$config->zannet; ?>"/>
                        <label for="name">其中前多少个是秒赞免费服务器:</label>
                        <input type="text" class="form-control" name="freezan" value="<?php echo is_array($config)?$config['freezan']:$config->freezan; ?>"/>
                        <label for="name">挂Q总服务器数:</label>
                        <input type="text" class="form-control" name="tgqqnet" value="<?php echo is_array($config)?$config['tgqqnet']:$config->tgqqnet; ?>"/>
                        <label for="name">挂Q总服务器数:</label>
                        <input type="text" class="form-control" name="tgqqnet" value="<?php echo is_array($config)?$config['tgqqnet']:$config->tgqqnet; ?>"/>
                        <label for="name">其中前多少个是免费服务器:</label>
                        <input type="text" class="form-control" name="free3gqq" value="<?php echo is_array($config)?$config['free3gqq']:$config->free3gqq; ?>"/>
                        <label for="name">发说说总服务器数:</label>
                        <input type="text" class="form-control" name="shuonet" value="<?php echo is_array($config)?$config['shuonet']:$config->shuonet; ?>"/>
                        <label for="name">删说说总服务器数:</label>
                        <input type="text" class="form-control" name="delnet" value="<?php echo is_array($config)?$config['delnet']:$config->delnet; ?>"/>
                        <label for="name">签到总服务器数:</label>
                        <input type="text" class="form-control" name="qdnet" value="<?php echo is_array($config)?$config['qdnet']:$config->qdnet; ?>"/>
                        <br><input type="submit" class="btn btn-primary btn-block" value="修改"/>
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