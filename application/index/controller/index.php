<?php
namespace index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        $this->assign('name','thinkphp');
        return $this->show('hello,{$name}');

/*        print_r(C('database')['prefix']);
        print_r(get_ip_city('115.159.78.251'));
        return 'index';*/
    }
}
