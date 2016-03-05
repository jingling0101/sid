<?php
/**
 * Created by nmfox.com
 * User: nmfox
 * Date: 2016/1/7
 * Time: 11:41
 */
namespace index\controller;
use Think\Controller;
class Webudata extends Controller{
    public function index(){
        echo 'a';
    }
    public function qqlist(){
        $qqs=M('qqs')->select();
        print_r($qqs);
        return $this->fetch('userlist');
    }
    public function userlist(){
        return $this->fetch();
    }

    public function vuserlist(){
        return $this->fetch('userlist');
    }

    /**
     * 专区
     */

    public function deleteqqs(){}
    public function deletevip(){}
    public function deletenvip(){}
    public function deletenvipqq(){}

    public function kmvip(){}
    public function kmfree(){}
    public function kmqqnum(){}

}