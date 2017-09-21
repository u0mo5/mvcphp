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
class IndexAction extends Action{
	function index(){
		$tpl = new Action();
		//定义变量
		$webname = '测试标题';
		$author = '倪银龙';
		$title = '实现了MVC分离';
		$content = '数据库内容还没有写！';
		//注入变量
		$tpl->assign('webname', $webname);
		$tpl->assign('author', $author);
		$tpl->assign('title', $title);
		$tpl->assign('content', $content);
		$tpl->display();
	}
}
?>