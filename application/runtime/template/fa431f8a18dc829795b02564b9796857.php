<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        .main {width:500px;height: auto;margin: 80px auto;padding: 10px 20px;border:1px solid #D8D3D3;background-color:#F1F1F1}
    </style>
</head>
<body>


<div class="container-fluid">
    <div class="span12">
        <div class="row-fluid">
            <div class="span4 col-md-4 col-sm-3 hidden-xs"></div>
            <div class="span4 col-md-4 col-sm-6 main">

                    <h1 class="text-center">安装程序</h1>

                <div id="installpr0">
                    <p class="text-center">123<?php echo U('Index/Admin/logining'); ?></p>

                    <ol>
                        <li>
                            <dl>
                                <dt>欢迎使用QQsid离线秒赞程序</dt>
                                <dd>欢迎使用QQsid离线秒赞程序</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>欢迎使用QQsid离线秒赞程序</dt>
                                <dd>欢迎使用QQsid离线秒赞程序</dd>
                            </dl>
                        </li>
                        <li> 本源码版权 qqsid.com</li>
                    </ol>
                    <botton id="next1" type="submit" class="btn btn-primary btn-block" name="submit">确认，下一步</botton>
                </div>

                <div id='installpr1'  style="display:none;padding: 10px;text-align: center;">
                    <form id="Form1" action="<?php echo U('Index/Install/createdbinfo'); ?>" class="form-sign" method="post">
                        <label for="DB_DATABASE">数据库连接类型:</label>
                        <select name="DB_DATABASE" class="form-control">
                            <option value="1">mysqli</option>
                            <option value="2">pdo</option>
                            <option value="3">mysql</option>
                        </select>
                        <label for="DB_HOST">数据库地址:</label>
                        <input type="text" class="form-control" name="DB_HOST" value="localhost"/>
                        <label for="DB_PORT">数据库端口:</label>
                        <input type="text" class="form-control" name="DB_PORT" value="3306"/>
                        <label for="DB_NAME">数据库库名:</label>
                        <input type="text" class="form-control" name="DB_NAME" placeholder="输入数据库库名"/>
                        <label for="DB_USER">数据库用户名:</label>
                        <input type="text" class="form-control" name="DB_USER" placeholder="输入数据库用户名"/>
                        <label for="DB_PWD">数据库密码:</label>
                        <input type="password" class="form-control" name="DB_PWD" placeholder="输入数据库密码"/>
                        <br />
                        <input type="hidden" name='step' value="2"/>
                        <botton id="next2" type="submit" class="btn btn-primary btn-block" name="submit">确认，下一步</botton>
                        <!--<input type="submit" class="btn btn-primary btn-block" name="submit" value="确认，下一步" />-->
                    </form>
                </div>

                <div  id='installpr2' style="display:none;font-size: large">
                    <p class="bg-success">Maecenas sed diam eget risus varius blandit sit amet non magna..</p>
                    <p class="bg-info">.Maecenas sed diam eget risus varius blandit sit amet non magna..</p>
                    <p class="bg-warning">.Maecenas sed diam eget risus varius blandit sit amet non magna..</p>
                    <p class="bg-danger">.Maecenas sed diam eget risus varius blandit sit amet non magna..</p>
                    <input type="submit" class="btn btn-primary btn-block" name="submit" value="确认，下一步" />
                </div>

                <div id='installpr3'style="display:none;">
                    <ol>
                        <li>网站已经安装完成！</li>
                        <li>网站已经安装完成！</li>
                        <li>网站已经安装完成！</li>
                        <li>网站已经安装完成！</li>
                    </ol>
                    <input type="submit" class="btn btn-primary btn-block" name="submit" value="完成，进入首页" />
                </div>


                <p class="text-center">@nmfox.com</p>

            </div>
            <div class="span4 col-md-4 col-sm-3 hidden-xs"></div>
        </div>
    </div>

</div>


<script type="text/javascript">
    $(document).ready(function () {
        $('#next1').click(function () {
            $('#installpr0').hide();
            $('#installpr1').css("display", 'block');
        });

        $('#next2').click(function(){
            var DB_HOST=$('input[name=DB_HOST]');
            var DB_NAME=$('input[name=DB_NAME]');
            var DB_USER=$('input[name=DB_USER]');
            var DB_PWD=$('input[name=DB_PWD]');
            if(DB_HOST.val()==''||DB_USER.val()==''||DB_PWD.val()==''){
                alert ('配置参数不能为空 no null');
                DB_HOST.focus();
                return false;
            }

            var x=$('form').serializeArray();
            $.post('http://www.aad.com/public/index.php/install/createdbinfo',x,function(data,status){
                if (!status) {
                    alert('连接出错');
                    return false;
                }
                $('#installpr1').hide();
                $('#installpr2').css("display", 'block');
            });
        });

    });
</script>

</body>
</html>