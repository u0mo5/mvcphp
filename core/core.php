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
	//如果项目不存在则建立一个新的项目
	if (!file_exists(APP_PATH)){ 
	   	 mkdir (APP_PATH);
	   	 require CORE_PATH.'/lib/lib.class.php';
	   	 $file = new lib();
	   	 $file->recurse_copy(CORE_PATH.'/template/',APP_PATH);
	}
	include CORE_PATH.'/lib/Action.class.php';//模板控制器类
	include CORE_PATH.'/lib/Router.class.php';//路由类
	$tool = new Router();
	$router = $tool->getRouter();//通过路由获取类和函数名称
	require APP_PATH.'controller/'.$router[0].'Action.class.php';//加载类文件
	define('ACTION_CLASS',$router[0]);
	define('ACTION_FUNCTION',$router[1]);
	call_user_func(array($router[0].'Action',$router[1]),"Index","index");//调用类下面的函数
?>