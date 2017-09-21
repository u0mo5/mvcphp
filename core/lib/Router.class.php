<?php
// +----------------------------------------------------------------------
// |
// +----------------------------------------------------------------------
// | Copyright (c) 2015 bookfuns.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: u0mo5
// +----------------------------------------------------------------------
class Router {

	//路由类获取用户调用的类和函数
	public function getRouter() { 
//		if (isset($_SERVER['PATH_INFO']))
//			$query_string = substr(str_replace(array('.html','.htm', '.php', '//'), '',$_SERVER['PATH_INFO']),1);
//		else
//			$query_string = str_replace($_SERVER['SCRIPT_NAME'], '',$_SERVER['PHP_SELF']);

        $query_string=$_SERVER['REQUEST_URI'];

		$temp = explode('/', $query_string);
		if ( empty($temp[0]) ) 
		 	$temp[0] = 'Index'; //默认类为Index
		if ( empty($temp[1]) ) 
			$temp[1] = 'index'; //默认操作函数为index
        if ( empty($temp[2]) )
            $temp[2] = 'index'; //默认操作函数为index
		$router = array();
		$router[0] = $temp[1];
		$router[1] = $temp[2];
		print_r($_SERVER['REQUEST_URI']);
		print_r($router);
		return $router;
	}
} 
?> 