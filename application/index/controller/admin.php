<?php
namespace index\controller;
use think\Controller;
class Admin extends Controller{

    public function index(){
        if(!$_SESSION['uname']){
            return $this->success('ok','',U('login'),1);
        }
    }

    public function login(){
        return $this->fetch();
    }

    public function logining(){
        return $this->success('ok','',U('adminmanage'),1);
    }

    public function adminmanage(){
        return $this->fetch();
    }



}