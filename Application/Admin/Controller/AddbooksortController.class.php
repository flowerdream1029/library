<?php
namespace Admin\Controller;
use Think\Controller;
class AddbooksortController extends Controller {
    public function addbooksort(){
    	session_start();

    	if (!isset($_SESSION['uid'])||$_SESSION['user_identity']!='管理员') {
    		$this->error('请先登录',redirect('/library/index.php'));
    	}else {
    		if(IS_POST){
	    		$bookcate=M('bookcate');
	            $cateName['cate_name']=I('cate_name');
	            $cateID['cate_id']=I('cate_id');
	            $resultname=$bookcate->where(array($cateName))->find;
                $resultID=$bookcate->where(array($cateID))->find;
	            if($resultname){
	                $this->error("该书类已经存在");
	            }
	    		else {
	    			$newcate['cate_id']=I('cate_id');
	                $newcate['cate_name']=I('cate_name');
	                $newcate['cate_position']=I('cate_position');
	                $newcate['addtime']=date("Y-m-d H:i:s",time());
	    			// $user->save($newuser);
	    			$bookcate->add($newcate);
	    			$this->success("新的书类添加成功");
	    		}  		
	    	}
	        else {
	    		$this->display();
	        }
    	}	    
    }
}