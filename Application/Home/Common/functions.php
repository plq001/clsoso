<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

/**
 * API
 */

/**
 * 获取网页LIST JSON
 * retutn   title url   nr    pic
 * $url 为参数之前的字符串  斜杠结尾
 * $sitetype  手撕包菜
*/
function get_list_json_lei_cilibaba($url,$key,$sitetype)
{
    //$get_url="http://www.cilibaba.org/search/%E4%BD%A0%E7%9A%84%E5%90%8D%E5%AD%97/";
    $get_url=$url.$key;
    $html= get_html($get_url);
    $pattern = '#<a title="(.*)" .*class="title" href="/h/(.*?)">.*</a>#';    // 这是匹配的正则表达式
    preg_match_all($pattern, $html, $matches);    //  开始匹配，该函数会把匹配结果放入 $matches数组中
  //  dump($html);
    $ret_str="";
    $ret_arr=[];
    $i=0;
    $i_count=count($matches[0]);
    for($i=0;$i<$i_count;$i++)
    {
        $title_str=$matches[1][$i];
        $url_str = $matches[2][$i];
        $ret_arr[]=array("title"=>$title_str,"url"=>$url_str,"nr"=>"","pic"=>"");
       // $ret_str = $ret_str . " title:" . $title_str . " url" . $url_str. "<br/>";
    }
   // dump($ret_arr);
    return $ret_arr;
}

function get_html($url)
{
    $ch = curl_init();
    $timeout = 10; // set to zero for no timeout
    curl_setopt ($ch, CURLOPT_URL,$url);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.131 Safari/537.36');
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $html = curl_exec($ch);
    return $html;

}