<?php
namespace Admin\Controller;
use Think\Controller;
class CheckrecordController extends Controller {
    public function checkrecord(){
        session_start();

        if (!isset($_SESSION['user_name'])||$_SESSION['user_identity']!='管理员') {
        	$this->error('请先登录',redirect('/library/index.php'));
        }else {
        	 if(IS_POST){
                $jieyuejilu=M(jieyuejilu);
                $checkrecord=I('book');
                $keywords=I('keywords');

                if($checkrecord=="学号"){
                    $result=$jieyuejilu->where("id like '%$keywords'")->select();
                    $this->assign('result',$result);
                    $this->display();
                }else if($checkrecord=="姓名"){
                    $result=$jieyuejilu->where("name like '%$keywords'")->select();
                    $this->assign('result',$result);
                    $this->display();
                }
            }else {
                $this->display();
            }
        }   	
    }

    public function returnBook(){
    	$jieyuejilu=M('jieyuejilu');//实例化	
    	$data['state']='已还';
    	$data['huanshudate']=date("Y-m-d H:i:s",time());
        $jielu['id']=I('id');
        $jielu['bookname']=I('bookname');
    	if($jieyuejilu->where(array($jielu))->save($data)){
            $this->success("还书成功",U('Admin/Checkrecord/checkrecord/keywords/$keywords'));
        // $this->display();
        }else {
            $this->error("还书失败");
        }
    }
}