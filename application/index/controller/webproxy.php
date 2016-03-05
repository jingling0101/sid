<?php
/**
 * Created by nmfox.com
 * User: nmfox
 * Date: 2016/1/6
 * Time: 17:53
 */
namespace index\controller;
use think\Controller;

class Webproxy extends Controller{
    public $table='proxyconfigs';

    public function index(){
        echo '';
    }

    public function setproxy(){
        if(IS_POST){
         if(savetablecnf(I(),$this->table)) $this->redirect('Index/Admin/adminmanage');
        }
        $this->assign('config',selecttablecnf($this->table));
        return $this->fetch();
    }

    public function proxylist(){
        $page=$_POST['page']?$_POST['page']:1;
        $num=3;
        $start=$num*($page-1);
        $left=$page-1?$page-1:null;
        $next=$page+1;
        $limit="$start,$num";
        $count=M('users')->where("daili>0")->count("uid");
        $pages=ceil($count/3);
        $user=M('users')->field('*')->where('daili>0')->limit($limit)->order('uid DESC')->select();
        print_r($user);
        $this->assign('page',$page);
        $this->assign('left',$left);
        $this->assign('next',$next);
        $this->assign('pages',$pages);
        $this->assign('count',$count);
        $this->assign('list',$user);
        return $this->fetch();
    }



    /**
     * 专区
     */
    public function checklist(){
        if($_GET['list']=='peie'){
            $kind=1;
        }elseif($_GET['list']=='free'){
            $kind=2;
        }else{
            $kind=0;
        }
        return $kind;
    }

    public function nmkmlist(){
        $id=is_int($_POST['kid'])?$_POST['kid']:0;
        echo 'aa';
        M('kms')->select();
        $p=is_numeric($_GET['p'])?$_GET['p']:'1';
        $start=10*($p-1);
        $next=$p+1;
        $limit="$start,10";

        $where="kind=".$this->checklist();
        $count=M("kms")->where($where)->count('kid');
        $pages=ceil($count/10);
        $rows=M("kms")->field('*')->where($where)->limit($limit)->order('kid desc')->select();
            $this->assign('page',$p);
            $this->assign('pages',$pages);
            $this->assign('count',$count);
            $this->assign('list',$rows);
            $this->display('admin/kmlist');
    }
    public function nmkmadd(){
        $num=is_int($_POST['num'])?$_POST['num']+0:1;
        $ms=is_int($_POST['ms'])?$_POST['ms']+0:1;

        $kind=$this->checklist();
        $msg="生成以下";
        for($i=0;$i<$num;$i++){
            $data=[];
            $data['kind']=$kind;
            $data['km']='';
            $data['ms']=$ms;
            $dat['isuse']=0;
            $data['addtime']=date("Y-m-d H:i:s");
            M('kms')->data($data)->add();
        }


    }
    public function nmkmdel(){}

    public function nmkmsearch($searword=''){
        $where="km like '%$searword%' and kind=".$this->checklist();
        $row=M('kms')->field("*")->where($where)->limit(10)->order('kid desc')->select();
        return $row;

    }

}