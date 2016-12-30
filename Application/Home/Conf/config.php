<?php
return array(
	//'配置项'=>'配置值'
    'URL_MODEL' =>1,
    'URL_ROUTER_ON'   => true, //开启路由
    'URL_ROUTE_RULES' => array( //定义路由规则
        'index.php?key=/:name'=> 'Home/Index/Slist.html'
    )
);