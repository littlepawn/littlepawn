<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type: text/html; charset=utf8");
class IndexController extends Controller {
    public function index(){
		$this->display();
    }   
    
    public function login(){
    	$this->display();
    }
    
    public function main(){
    	if(isset($_SESSION['user'])||!$_SESSION['user']){
			$this->assign('name',$_SESSION['user']["name"]);
    		$this->display();
    	}else{
    		$this->redirect("index");
    	}
    }
    
    public function checklogin(){
    	if(!empty($_POST['email'])&&!empty($_POST['password'])){
    		$User=M("User");
    		$email=$_POST['email'];
    		$password=md5($_POST['password']);
    		if($User->where("email='$email'"." AND"." password='$password'")->find()>0){
    			$data=$User->where("email='$email'")->field()->select();
    			session("user",array(
    				"name"=>$data[0]['name'],
    				"email"=>$data[0]['email'],
    			));
    			echo $this->success("登录成功","main");
    		}else{
    			echo $this->error("登录失败","login");
    		}
    	}else{
    		echo $this->error("登录失败","login");
    	}
    }
    
    public function register(){
    	$this->display();
    }
    
    public function insert(){
    	header('Content-Type:text/html; charset=utf-8');
    	$User=M("User");
    	$data["id"]=$_POST["id"];
    	if(!empty($_POST["username"])&&!empty($_POST['email'])&&!empty($_POST['password'])){
	    	$data["name"]=$_POST["username"];
	    	$data["email"]=$_POST["email"];
	    	$data["password"]=md5($_POST["password"]);
    	}
    	$data["date"]=date("Y-m-d H:i:s");
    	if($User->add($data)){
    		$this->redirect ('login');
    	}else{
    		//exit ( $User->getError () );
    		$this->redirect("register");
    	}
    }
    
    public function loginout(){
    	if(isset($_SESSION['user'])||!$_SESSION['user']){
    		session_unset($_SESSION['user']);
    		$this->redirect("index");
    	}
    }
    
    public function userinfo(){
    	if(isset($_SESSION['user'])||!$_SESSION['user']){
    		$this->assign('name',$_SESSION['user']["name"]);
    		$this->assign('email',$_SESSION['user']["email"]);
    		if(!$_SESSION['user']["phone"]){
    			$this->assign('phone',"未填写");
    		}else{
    			$this->assign('phone',$_SESSION['user']["phone"]);
    		}
    		if(!$_SESSION['user']["address"]){
    			$this->assign('province',"");
    			$this->assign('city',"");
    			$this->assign('area',"");
    		}else{
    			$this->assign('province',$_SESSION['user']['address']);
    			$this->assign('city',$_SESSION['user']['address']);
    			$this->assign('area',$_SESSION['user']['address']);
    		}
    		$this->display();
    	}
    }
    
    public function edituserinfo(){
    	if(isset($_SESSION['user'])||!$_SESSION['user']){
    		$this->assign('name',$_SESSION['user']["name"]);
    		$this->assign('email',$_SESSION['user']["email"]);
    		if(!$_SESSION['user']["phone"]){
    			$this->assign('phone',"未填写");
    		}else{
    			$this->assign('phone',$_SESSION['user']["phone"]);
    		}
    		if(!$_SESSION['user']["address"]){
    			$this->assign('province',"");
    			$this->assign('city',"");
    			$this->assign('area',"");
    		}else{
    			$this->assign('province',$_SESSION['user']['address']);
    			$this->assign('city',$_SESSION['user']['address']);
    			$this->assign('area',$_SESSION['user']['address']);
    		}
    		$this->display();
    	}
    }
    
    public function houserentinfo(){
    	if(isset($_SESSION['user'])||!$_SESSION['user']){
    		$this->assign('name',$_SESSION['user']["name"]);
    		$this->display();
    	}
    }
    
    public function edithouserentinfo(){
    	if(isset($_SESSION['user'])||!$_SESSION['user']){
    		$this->assign('name',$_SESSION['user']["name"]);
    		$this->display();
    	}
    }
}

