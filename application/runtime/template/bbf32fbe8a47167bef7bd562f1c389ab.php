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
            background: black;
            border: 1px solid red;
            color: #7B7B7B
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-sm-3 hidden-sm"></div>
        <div class="col-md-4 col-sm-6">
            <div class="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <h4>
                    提示!
                </h4> <strong>警告!</strong> 请注意你的个人隐私安全.
            </div>
        </div>
        <div class=" col-md-4 col-sm-3 hidden-sm"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-sm-3 hidden-xs"></div>
        <div class="col-md-4 col-sm-6 main">
            <h1 class="text-center">my</h1>
            <p class="text-center">123<?php echo U('Index/Admin/logining'); ?></p>
            <form class="form-horizontal" action="<?php echo U('Index/Admin/logining'); ?>" method="post">
                <div class="form-group ">
                    <label for="inputEmail3" class="col-sm-2 control-label">帐号</label>
                    <div class="col-sm-9"><input type="text" class="form-control" id="inputEmail3" name="user" placeholder="帐号"></div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
                    <div class="col-sm-9"><input type="password" class="form-control" id="inputPassword3" name="password" placeholder="密码"></div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">验证</label>
                    <div class="col-sm-9"><input type="text" class="form-control" id="vevary3" name="yan" placeholder="验证码"></div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                        <button type="submit" class="btn btn-default" value="submit">登陆 Sign in</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4 col-sm-3 hidden-xs"></div>
    </div> <!--endrow-->
</div>
</body>
</html>