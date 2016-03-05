<?php

class Api_Welcome{
     public $name='api';
     public function say($code,$massage='',$data=[]){
        if(!is_int($code)){
            $arr['code']= -1000;
            $arr['message']= 'code must be int';
            return json_encode($arr);
        }
        $arr['code']=is_int($code)?$code:-1000;
        $arr['message']=$massage;
        $arr['data']=is_array($data)?$data:null;
        return json_encode($arr);
    }
}

class aaa extends Api_Welcome{
    static private $_instance;
    private function __construct()
    {

    }
    static public function getInstance(){
        if(!(self::$_instance instanceof self)){
            self::$_instance=new self();
        }
        return self::$_instance;
    }
}

$data=['id'=>1,'name'=>'java'];
$a=aaa::getInstance();
print_r($a->name);
echo $a->say(1,'this is Ok',$data),'<br />';
//print_r(json_decode($b,true));
