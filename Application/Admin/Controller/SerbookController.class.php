<?php
namespace Admin\Controller;
use Think\Controller;
class SerbookController extends Controller {
    public function serbook(){
        session_start();

        if (!isset($_SESSION['user_name'])||$_SESSION['user_identity']!='管理员') {
           $this->error('请先登录',redirect('/library/index.php'));
        }else {
           if(IS_POST){
                $post_token = I('post.TOKEN');
               $book=M('book');
                $keywords=I('keywords');
                $bookser=I('book');

                if($bookser=="书名"){
                    $result=$book->where("name like '%$keywords%'")->select();
                    $this->assign('result',$result);
                    $this->display();
                }else if($bookser=="作者"){
                    $result=$book->where("author like '%$keywords%'")->select();
                    $this->assign('result',$result);
                    $this->display();
                }else if($bookser=="类名"){
                    $result=$book->where("sort like '%$keywords%'")->select();
                    $this->assign('result',$result);
                    $this->display();
                }else if($bookser=="书所属区域"){
                    $result=$book->where("position like '%$keywords%'")->select();
                    $this->assign('result',$result);
                    $this->display();
                }               
            }
            else {
                $this->display();
            }  
        }   	
    }
}