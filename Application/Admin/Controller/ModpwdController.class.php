<?php
namespace Admin\Controller;
use Think\Controller;
class ModpwdController extends Controller {
	public function modpwd() {
		// if(IS_POST)
		// 	echo 123;
		session_start();

		if (!isset($_SESSION['user_name'])||$_SESSION['user_identity']!='管理员'){
			$this->error('请先登录',redirect('/library/index.php'));
		}else {
			if(IS_POST) {
				$user=M('user');
				$oldpwd=I('old_pwd');
				$newpwd=I('new_pwd');
				$confirmpwd=I('confirm_pwd');
				
				$where['user_password']=md5($oldpwd);
				$where['user_name']=$_SESSION['user_name'];	
				//需要根据登陆用户的名字，否则会出现不同用户相同密码同时被更改的情况;		
				$result=$user->where(array($where))->find();
				if($result) {
					if($newpwd===$confirmpwd) {
						$data['user_password']=md5($confirmpwd);
						$user->where($where)->save($data);//根条件更新记录
						$this->success('密码修改成功');
					}else {
						$this->error('新密码与确认密码不符');
					}
				}else {
					$this->error('初始密码输入错误');
				}
			}else {
				$this->display();
			}
		}
		
	}
}