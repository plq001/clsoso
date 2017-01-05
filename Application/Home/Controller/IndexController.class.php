<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display('index');
    }
    public function Slist(){
        $search_text=I("get.key");
        $this->assign("Search",$search_text);
        echo "<meta charset=\"utf-8\">";
        print_r( get_list_json_lei_cilibaba("http://www.cilibaba.org/search/",$search_text));
       // $this->display("list");
    }
}