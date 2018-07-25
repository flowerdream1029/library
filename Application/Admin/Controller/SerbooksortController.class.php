<?php
namespace Admin\Controller;
use Think\Controller;
class SerbooksortController extends Controller {
    public function serbooksort(){
        session_start();

        if (!isset($_SESSION['user_name'])||$_SESSION['user_identity']!='管理员') {
            $this->error('请先登录',redirect('/library/index.php'));
        }else {
            if(IS_POST) {
                $bookcate=M('bookcate');
                $keywords=I('keywords');
                
                $cate=I('cate');
                if($cate=="类名"){
                    $result=$bookcate->where("cate_name like '%$keywords%'")->select();
                    $this->assign('result',$result);
                    $this->display();
                }else if($cate=="类ID"){
                    $result=$bookcate->where("cate_id like '%$keywords%'")->select();
                    $this->assign('result',$result);
                    $this->display();
                }else if($cate=="类所属区域"){
                    $result=$bookcate->where("cate_position like '%$keywords%'")->select();
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