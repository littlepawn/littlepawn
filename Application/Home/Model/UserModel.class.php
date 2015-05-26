<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model {
	protected $_validate=array(
			array('username','require','用户名不能为空!'),
			array('username','','用户名已经存在',0,'unique',1),
			array('username','/^[a-zA-Z][a-zA-Z0-9_]{1,19}$/','用户名不合法！'),
			 
			array('email','require','邮箱不能为空!'),
			array('email','email','邮箱格式不正确!'),
			array('email','','该邮箱已经注册过！',0,'unique',1),
			
			array('password','checkPwd','密码格式不正确',0,'callback'), // 自定义函数验证密码格式
			array('repassword','password','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致
	);
	
	function checkPwd(){
		
	}
}