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
                    <ul class='list-group'>
                        <li class='list-group-item active'>秒赞、秒评、转发监控,频率1分钟</li>
                        <?php $__FOR_START_24690__=1;$__FOR_END_24690__=C('zannet')+1;for($i=$__FOR_START_24690__;$i < $__FOR_END_24690__;$i+=1){ ?>
                            <li class='list-group-item'>{$i}、http://<?php echo $_SERVER['HTTP_HOST']; ?>/cron/new.cron.php?cron=<?php echo C('cronrand'); ?>&n={$i}</li>
                        <?php } ?>
                        <li class='list-group-item active'>单独秒赞监控,频率1分钟</li>
                        <?php $__FOR_START_16576__=1;$__FOR_END_16576__=C('zannet')+1;for($i=$__FOR_START_16576__;$i < $__FOR_END_16576__;$i+=1){ ?>
                            <li class='list-group-item'>{$i}、http://<?php echo $_SERVER['HTTP_HOST']; ?>/cron/zan.cron.php?cron=<?php echo C('cronrand'); ?>&n={$i}</li>
                        <?php } ?>
                        <li class='list-group-item active'>空间签到监控,频率1小时</li>
                        <li class='list-group-item'>http://<?php echo $_SERVER['HTTP_HOST']; ?>/cron/qd.cron.php?cron=<?php echo C('cronrand'); ?>&n=1</li>
                        <li class='list-group-item active'>离线挂扣监控,频率1分钟</li>
                        <li class='list-group-item'>http://<?php echo $_SERVER['HTTP_HOST']; ?>/cron/3gqq.cron.php?cron=<?php echo C('cronrand'); ?>&n=1</li>
                        <li class='list-group-item active'>发说说监控,频率1分钟</li>
                        <li class='list-group-item'>http://<?php echo $_SERVER['HTTP_HOST']; ?>/cron/shuo.cron.php?cron=<?php echo C('cronrand'); ?>&n=1</li>
                        <li class='list-group-item active'>删说说监控,频率1分钟</li>
                        <li class='list-group-item'>http://<?php echo $_SERVER['HTTP_HOST']; ?>/cron/del.cron.php?cron=<?php echo C('cronrand'); ?>&n=1</li>
                        <li class='list-group-item active'>互刷留言监控,频率15分钟</li>
                        <li class='list-group-item'>http://<?php echo $_SERVER['HTTP_HOST']; ?>/cron/ly.cron.php?cron=<?php echo C('cronrand'); ?>&n=1</li>
                        <li class='list-group-item active'>互赞主页监控,频率15分钟</li>
                        <li class='list-group-item'>http://<?php echo $_SERVER['HTTP_HOST']; ?>/cron/zyzan.cron.php?cron=<?php echo C('cronrand'); ?>&n=1</li>
                        <li class='list-group-item active'>互刷礼物监控,频率15分钟</li>
                        <li class='list-group-item'>http://<?php echo $_SERVER['HTTP_HOST']; ?>/cron/lw.cron.php?cron=<?php echo C('cronrand'); ?>&n=1</li>
                        <li class='list-group-item active'>花藤、图书服务监控,频率15分钟</li>
                        <li class='list-group-item'>http://<?php echo $_SERVER['HTTP_HOST']; ?>/cron/ht.cron.php?cron=<?php echo C('cronrand'); ?>&n=1</li>
                        <li class='list-group-item active'>会员、绿钻、钱包签到监控,频率15分钟</li>
                        <li class='list-group-item'>http://<?php echo $_SERVER['HTTP_HOST']; ?>/cron/vipqd.cron.php?cron=<?php echo C('cronrand'); ?>&n=1</li>
                    </ul>
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