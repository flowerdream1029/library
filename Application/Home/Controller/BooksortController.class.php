<?php
namespace Home\Controller;
use Think\Controller;
class BooksortController extends Controller {
	public function booksort() {
		session_start();
		$jieyuejilu=D('jieyuejilu');

		if (!isset($_SESSION['uid'])||$_SESSION['user_identity']!='普通用户'){
			$this->error('请先登录',U("Index/index"));
		}else {
			$name['name']=$_SESSION['user_name'];
			$result=$jieyuejilu->where($name)->select();
			$this->assign('result',$result);
			$this->display();
		}        			
	}
}