<?php
namespace index\controller;
use think\Controller;
class Member extends Controller{
    public function login(){
        $user=I('user','','htmlspecialchars');
        $this->user=$user;
        $pwd=I('pwd','','htmlspecialchars');
        $pwd=md5(md5($pwd).md5('621019457'));
        $newid=md5(time()).md5($pwd);
        if($user&&$pwd){
            $_SESSION[$user]=$newid;
            setcookie('daili',$newid,time()+3600*24*2,'/');
            $this->redirect(U('index'));
        }

    }

    public function logout(){
        unset($_SESSION[$this->user]);
        setcookie('daili','',-1,'/');
        $this->redirect(U('Index/index'));
    }

    public function index(){}
    public function kmlist(){}

}