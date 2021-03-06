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
                    <form action="<?php echo U('Index/Website/setwebsystem'); ?>" class="form-sign" method="post">
                        <label for="name">网站名称:</label>
                        <input type="text" class="form-control" name="name" value="<?php echo is_array($config)?$config['web_name']:$config->web_name; ?>">
                        <label for="name">网站域名:</label>
                        <input type="text" class="form-control" name="domain" value="<?php echo is_array($config)?$config['web_domain']:$config->web_domain; ?>">
                        <label for="name">站长QQ:</label>
                        <input type="text" class="form-control" name="qq" value="<?php echo is_array($config)?$config['web_qq']:$config->web_qq; ?>">
                        <label for="name">监控文件识别码(建议更改，数字和字母都行):</label>
                        <input type="text" class="form-control" name="cronrand" value="<?php echo is_array($config)?$config['cronrand']:$config->cronrand; ?>">
                        <div class="form-control" style="margin:5px 0 5px 0;height: 70px;">
                            <label for="name">新注册会员是否需要邮箱激活验证:</label>
                            <input type="radio" name="status" value="1"
                            <?php if($config['regactive'] == 1): ?>checked="checked"<?php endif; ?>
                            />关闭 <input type="radio" name="status" value="0"
                            <?php if($config['regactive'] == 0): ?>checked="checked"<?php endif; ?>
                            />开启
                        </div>
                        <label for="name">注册默认配额:</label>
                        <input type="text" class="form-control" name="num" value="<?php echo is_array($config)?$config['regpeie']:$config->regpeie; ?>">
                        <label for="name">后台新密码:</label>
                        <input type="text" class="form-control" name="passwrod" placeholder="留空则不修改">
                        <br><input type="submit" class="btn btn-primary btn-block" value="修改">
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