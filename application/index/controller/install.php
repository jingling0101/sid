<?php
namespace index\controller;


use think\Db;

class Install
{
    public function index()
    {
        $view=new \think\view();
        return $view->fetch('installer');
    }
    public function createdbinfo(){
        //$connettion='mysql://root:root@localhost:3306?aqqsidmz#utf8';
        //$a=parse_url($connettion);
       // print_r($a);
        //$setdb=I('DB_DATABASE')==1?'mysql':'mysqli';
        $host=I('DB_HOST');
        $databases=I('DB_NAME');
        $user=I('DB_USER');
        $password=I('DB_PWD');
        $prot=I('DB_PORT')?I('DB_PORT'):3306;

        print_r($this->dbconfig());exit;

        //$db=new \think\cache\driver\Db($connettion);
//        $User = \think\Loader::model('User','other_','mysql://root:1234@localhost/demo#utf8');

        $con=mysqli_connect($host,$user,$password,$databases,$prot,$cock='');
        if (!$con) {
            $array[]=mysqli_connect_error();
            return 0;
            //return mysqli_connect_error();
        }else{
            return 1;
        }



        //$connettion=sprintf('%s://%s:%s@%s:%d/%s',,,,,,);
        print_r(I());

    }

    public function dbconfig(){
        $text="
<?php
return [
    // 数据库类型
    'type' => 'mysql',
    // 数据库连接DSN配置
    'dsn' => '',
    // 服务器地址
    'hostname' => '127.0.0.1',
    // 数据库名
    'database' => 'aqqsidmz',
    // 数据库用户名
    'username' => 'root',
    // 数据库密码
    'password' => 'root',
    // 数据库连接端口
    'hostport' => '3306',
    // 数据库连接参数
    'params' => [],
    // 数据库编码默认采用utf8
    'charset' => 'utf8',
    // 数据库表前缀
    'prefix' => 'qqsid_',
    // 数据库调试模式
    'debug' => APP_DEBUG,
    // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'deploy' => 0,
    // 数据库读写是否分离 主从式有效
    'rw_separate' => false,
    // 读写分离后 主服务器数量
    'master_num' => 1,
    // 指定从服务器序号
    'slave_no' => '',
];";
        return $text;

        //print_r($data);
        file_put_contents(APP_PATH.'database.php',$data);
        //return array_merge(include(APP_PATH.'database.php'),$data);

    }
}
