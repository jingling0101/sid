<?php
/**
 * Created by nmfox.com
 * User: nmfox
 * Date: 2016/1/6
 * Time: 18:26
 */
namespace index\controller;
use think\Controller;

class Website extends Controller{
    static protected $webconfig=array();
    public $table='webconfigs';

    public function __construct(){
        $this->webconfig=selecttablecnf($this->table);
        $this->assign('config',$this->webconfig);
    }

    public function index(){
        return $this->setwebsystem();
    }

    public function webset(){
        return $this->fetch();
    }

    public function announcement(){
        return $this->fetch();
    }

    public function setmail(){
        if (IS_POST) {
            if(savetablecnf(I(),$this->table)) $this->redirect(U('Index/Admin/adminmanage'));
        }
        return $this->fetch();
    }

    public function setnet(){
        if(IS_POST){
            if(savetablecnf(I(),$this->table)) $this->redirect(U('Index/Admin/adminmanage'));
        }
        return $this->fetch();
    }

    public function setcron(){
        return $this->fetch();
    }

    public function setwebsystem()
    {
        if (!IS_POST) exit('please use other function');
        if (!$_POST['passwrod']) {
            unset($_POST['passwrod']);
        } else {
            $data['adminpwd'] = md5(md5($_POST['passwrod']) . md5('621019457'));
        }
        $data['web_name'] = I('name', '');
        $data['web_domain'] = I('domain', '');
        $data['web_qq'] = I('qq', '');
        $data['cronrand'] = I('cronrand', '');
        $data['regactive'] = I('status', 0);
        $data['regpeie'] = I('num', 1);
        if (savetablecnf($data, $this->table)) $this->redirect('Index/Admin/adminmanage');
    }


}