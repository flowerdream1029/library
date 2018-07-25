<?php
namespace Admin\Controller;
use Think\Controller;
class AdduserController extends Controller {
    public function adduser(){
        session_start();

        if (!isset($_SESSION['uid'])||$_SESSION['user_identity']!='管理员'){
            $this->error('请先登录',redirect('/library/index.php'));
        }else {
            if(IS_POST){
                $user=M('user');
                $newuser['user_name']=I('user_name');
                $id['user_id']=I('user_id');
                $resultId=$user->where(array($id))->find;
                if($resultId){
                    $this->error("该用户ID已经存在");
                }
                $resultName=$user->where(array($newuser))->find();
                if($resultName){
                    $this->error("该用户名已经存在");
                }
                else {
                    $password=I('user_password');
                    $newuser['user_password']=md5($password);
                    $newuser['user_id']=I('user_id');
                    $newuser['user_identity']='普通用户';
                    // $user->save($newuser);
                    $user->add($newuser);
                    $this->success("用户添加成功");
                }       
            }else {
                $this->display();
            }
        }    	
    }
}