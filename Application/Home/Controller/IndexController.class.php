<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    
    public function index(){
        session_start();
        
    	// if (isset($_SESSION['user_name'])) {
     //        if($_SESSION['user_identity']=="普通用户"){
     //            //普通用户已登陆
     //            $this->redirect('Index/index');
     //        } else {
     //            //管理员用户登陆
     //            $this->redirect('/library/index.php/Admin/Index/index.html');
     //        }         
     //    }


        if(!IS_POST) {
            $this->display();
        } else {
            //验证用户信息是否通过
            $data['user_name']=I('user_name');
            $password=I('user_password');
            $data['user_password']=md5($password);
            $data['user_identity']=I('user_identity');

            $user=M('user')->where($data)->find(); 
            if(!$user) {
                $this->error('用户或密码输入错误');
            }  

            //将登录的用户信息保存到session中，以备需要 
            session('uid',$user['user_id']);
            session('user_name',$user['user_name']);
            session('user_identity',$user['user_identity']);

            //跳转到普通用户或者管理员页面
            if($data['user_identity']=="普通用户") {
                redirect('/library/index.php/Home/Index/main.html');
            } else if($data['user_identity']=="管理员") {
                redirect('/library/index.php/Admin/Index/index.html');
            }   
        }       
    }  
}
