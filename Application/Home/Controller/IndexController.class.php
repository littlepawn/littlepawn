<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type: text/html; charset=utf8");
class IndexController extends Controller {
    public function index(){
    	$house=M('House');
    	$data=$house->order('date')->limit(10)->select();
    	$num=count($data);
    	$title=$data[0]['title'];
    	$rent=$data[0]['rent'];
    	$address=$data[0]['address'];
    	$livingroom=$data[0]['livingroom'];
    	$bedroom=$data[0]['bedroom'];
    	$this->assign("title",$title);
    	$this->assign("rent",$rent);
    	$this->assign("address",$address);
    	$this->assign("bedroom",$bedroom);
    	$this->assign("livingroom",$livingroom);
    	$this->assign("num",$num);
		$this->display();
    }   
    
    public function login(){
    	$this->display();
    }
    
    public function main(){
    	if(isset($_SESSION['user'])||!$_SESSION['user']){
			$this->assign('name',$_SESSION['user']["name"]);
			$house=M('House');
			$data=$house->order('date')->limit(10)->select();
			$num=count($data);
			$title=$data[0]['title'];
			$rent=$data[0]['rent'];
			$address=$data[0]['address'];
			$livingroom=$data[0]['livingroom'];
			$bedroom=$data[0]['bedroom'];
			$this->assign("title",$title);
			$this->assign("rent",$rent);
			$this->assign("address",$address);
			$this->assign("bedroom",$bedroom);
			$this->assign("livingroom",$livingroom);
			$this->assign("num",$num);
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
    				"id"=>$data[0]['id'],
    				"name"=>$data[0]['name'],
    				"email"=>$data[0]['email'],
    				"phone"=>$data[0]['phone'],
    				"address"=>array(
 		   				"province"=>$data[0]['province'],
    					"city"=>$data[0]["city"],
    					"area"=>$data[0]['area'],			
    					),
    			));
    			echo $this->redirect("main");
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
    			$this->assign('province',$_SESSION['user']['address']["province"]);
    			$this->assign('city',$_SESSION['user']['address']['city']);
    			$this->assign('area',$_SESSION['user']['address']['area']);
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
    
    public function publish1(){
    	if(isset($_SESSION['user'])||!$_SESSION['user']){
    		$this->assign('name',$_SESSION['user']["name"]);
    		$this->display();
    	}
    }
    
    public function publish2_1(){
    	if(isset($_SESSION['user'])||!$_SESSION['user']){
    		$this->assign('name',$_SESSION['user']["name"]);
    		$this->display();
    	}
    }
    
    public function publish2_2(){
    	if(isset($_SESSION['user'])||!$_SESSION['user']){
    		$this->assign('name',$_SESSION['user']["name"]);
    		$this->display();
    	}
    }
    
    public function checkpublish2_1(){
    	if(!empty($_POST['address'])&&!empty($_POST['rent'])&&!empty($_POST['title'])&&!empty($_POST['renttype'])&&!empty($_POST['floor'])&&!empty($_POST['countfloor'])&&!empty($_POST['rent'])&&!empty($_POST['bedroom'])&&!empty($_POST['area'])){
    		$house=M("House");
    		
    		$data["id"]="";
    		$data['renttype']=$_POST['renttype'];
    		$data['address']=$_POST['address'];
    		$data['bedroom']=$_POST['bedroom'];
    		$data['livingroom']=$_POST['livingroom'];
    		$data['toilet']=$_POST['toilet'];
    		$data['area']=$_POST['area'];
    		$data['floor']=$_POST['floor'];
    		$data['countfloor']=$_POST['countfloor'];
    		$data['rent']=$_POST['rent'];
    		$data['title']=$_POST['title'];
    		$data['context']=$_POST['context'];
    		$data['name']=$_POST['name'];
    		$data['phone']=$_POST['phone'];
    		$data['houseowner']=$_SESSION['user']['name'];
    		$data['date']=date("Y-m-d H:i:s");
    		
    		if($house->add($data)){
    			echo $this->success("登录成功","publish3");
    		}else{
    			echo $this->error("登录失败","publish2_1");
    		}
    	}else{
    		echo $this->error("登录失败","publish2_1");
    	}
    	
    	
    	
    	$this->redirect("publish3");
    }
    
	public function publish3(){
    	if(isset($_SESSION['user'])||!$_SESSION['user']){
    		$this->assign('name',$_SESSION['user']["name"]);
    		$this->display();
    	}
    }
    
    public function update_userinfo(){
    	$user=M('User');
    	$user->sex=$_POST['sex'];
    	$user->province=$_POST['province'];
    	$user->city=$_POST['city'];
    	$user->area=$_POST['area'];
    	if(isset($_SESSION['user'])||!$_SESSION['user']){
	    	if(empty($_POST['name'])){
	    		$name=$_SESSION['user']['name'];
	    		if($user->where("name='$name'")->save()){
	    			$_SESSION['user']['sex']=$_POST['sex'];
	    			$_SESSION['user']['address']['province']=$_POST['province'];
	    			$_SESSION['user']['address']['city']=$_POST['city'];
	    			$_SESSION['user']['address']['area']=$_POST['area'];
	    			$this->redirect("userinfo");
	    		}else{
	    			echo $this->error("更新失败","userinfo");
	    		}
	    	}else{
	    		$user->name=$_POST['name'];
	    		$id=$_SESSION['user']['id'];
	    		if($user->where("id='$id'")->save()){
	    			$_SESSION['user']['name']=$_POST['name'];
	    			$_SESSION['user']['sex']=$_POST['sex'];
	    			$_SESSION['user']['address']['province']=$_POST['province'];
	    			$_SESSION['user']['address']['city']=$_POST['city'];
	    			$_SESSION['user']['address']['area']=$_POST['area'];
	    			$this->redirect("userinfo");
	    		}else{
	    			echo $this->error("更新失败","userinfo");
	    		}
	    	}
    	}
    }
    
    public function editpassword(){
    	if(isset($_SESSION['user'])||!$_SESSION['user']){
    		$this->assign('name',$_SESSION['user']["name"]);
    		$this->display();
    	}
    }
    
    public function editemail(){
    	if(isset($_SESSION['user'])||!$_SESSION['user']){
    		$this->assign('name',$_SESSION['user']["name"]);
    		$this->display();
    	}
    }
    
    public function editphone(){
    	if(isset($_SESSION['user'])||!$_SESSION['user']){
    		$this->assign('name',$_SESSION['user']["name"]);
    		$this->display();
    	}
    }
}

