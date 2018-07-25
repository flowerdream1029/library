<?php
namespace Home\Controller;
use Think\Controller;
class UserSuggestionController extends Controller {
	public function userSuggestion() {
		session_start();
		$stusuggestion=D('stusuggestion');

		if(!isset($_SESSION['uid'])||$_SESSION['user_identity']!='普通用户') {
			$this->error('请先登录',U("Index/index"));
		} 
        
        $list=$stusuggestion->select();
        $this->assign('list',$list);
		$this->display();
	}
}