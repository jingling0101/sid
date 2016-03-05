<?php
/**
 * Created by nmfox.com
 * User: nmfox
 * Date: 2016/1/4
 * Time: 18:52
 */
namespace index\behavior;

class Createdbtable{
    public function constrant(){}

    public function checkdb($host='localhost',$user='',$password='',$databases='',$prot=3306,$cock=''){
        $con=mysqli_connect($host,$user,$password,$databases,$prot,$cock);
        if (!$con) {
            return mysqli_connect_error();
        }else{
            return 1;
        }
    }
}