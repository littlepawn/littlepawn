<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	if(isset($_SESSION['admin'])&&!empty($_SESSION['admin'])){
    		$user=M("User");
			$data=$user->order("date desc")->select();
			$this->assign("data",$data);    		
        	$this->display();
    	}
    	$this->display();
    }
    
    public function login(){
    	$this->display();
    }
    
    public function checklogin(){
    	if(!empty($_POST['name'])&&!empty($_POST['password'])){
    		$admin=M("Admin");
    		$name=$_POST['name'];
    		$password=md5($_POST['password']);
    		if($admin->where("name='$name'"." AND"." password='$password'")->find()>0){
    			$data=$admin->where("name='$name'")->field()->select();
    			session("admin",array(
    			"id"=>$data[0]['id'],
    			"name"=>$data[0]['name'],
    			));
    			echo $this->redirect("index");
    		}else{
    			echo $this->error("登录失败","login");
    		}
    	}else{
    		echo $this->error("登录失败","login");
    	}
    }
}