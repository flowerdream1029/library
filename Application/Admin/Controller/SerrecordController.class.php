<?php
namespace Admin\Controller;
use Think\Controller;
class SerrecordController extends Controller {
    public function serrecord(){
        session_start();
        
        if (!isset($_SESSION['user_name'])||$_SESSION['user_identity']!='管理员'){
            $this->error('请先登录',redirect('/library/index.php'));
        }else {
            if(IS_POST){
                $jieyuejilu=D('jieyuejilu');
                $arr['id']=I('id');
                $arr['name']=I('user_name');
                $arr['bookname']=I('name');
                $arr['yujiedays']=I('yujiedays');
                $arr['jieyuedate']=I('jieyuedate');
                $arr['huanshudate']=null;
                $arr['state']=I('state');
                $arrName=$jieyuejilu->where(array($arr['name']))->find;
                $arrBookname=$jieyuejilu->where(array($arr['bookname']))->find;
                if($arrName && $arrBookname){
                    $this->error('该记录已经存在');
                }else {
                    $jieyuejilu->add($arr);
                    $this->success("图书借阅成功");
                }
            }else {
                $this->display();
            }
        }  	
    }
}