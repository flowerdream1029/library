<?php
namespace Admin\Controller;
use Think\Controller;
class AddbookController extends Controller {
    public function addbook(){
        session_start();

         if (!isset($_SESSION['uid'])||$_SESSION['user_identity']!='管理员'){
            $this->error('请先登录',redirect('/library/index.php'));
        }else {
            if(IS_POST){
                $book=M('book');
                $newbook['id']=I('id');
                $newbook['name']=I('name');
                $newbook['author']=I('author');
                $newbook['sort']=I('sort');
                $newbook['chubanshe']=I('chubanshe');
                $newbook['code']=I('code');
                $newbook['position']=I('position');
                // $user->save($newuser);
                $book->add($newbook);
                $this->success("新的书类添加成功");         
            }
            else {
                $this->display();
            }
        }        
    }
}