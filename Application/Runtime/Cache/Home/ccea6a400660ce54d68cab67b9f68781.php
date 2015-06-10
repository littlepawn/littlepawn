<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>房产信息管理系统</title>
    <link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.min.css" />
    <script src="http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/Public/js/bootstrap.min.js"></script>
	<style type="text/css">
		.col-md-4{
			margin-top: 25px;
		}
		#header{
			margin: 20px 0;
		}
		.alocation{
			margin-left: 220px;
		}
	</style>
  </head>
  <body>
  	<div class="container">
  		<div class="row" id="header">
  			<div class="col-md-12 text-center">
  				<a style="text-decoration:none" href="/index.php/Home/Index/index"><h1>房产信息管理</h1></a>
  			</div>
  		</div>
  		<hr />
  		<div class="row">
  			<div class="col-md-5 col-md-offset-1">
  				<div class="thumbnail">
     				 <img src="/Public/i/1.jpg" alt="..." >
    			</div>
  			</div>
  			<div class="col-md-4 col-md-offset-1">
  				<form role="form" method="post" onsubmit="return check()" action="/index.php/Home/Index/checklogin" >
  					<h2>登录</h2>
  					<div class="form-group has-feedback" id="demail">
 					   <label for="InputEmail">邮箱</label>
   					   <input type="text" class="form-control"  id="InputEmail" placeholder="Enter email" name="email">
   					   <span class="help-block" style="display: none;" id="pwarning">邮箱格式错误</span>
   					   <span class="help-block" style="display: none;" id="pwarning1">邮箱不能为空</span>
  					</div>
  					<div class="form-group">
   					   <label for="Password">密码</label>
			  		   <input type="password" class="form-control" id="InputPassword" placeholder="Enter Password" name="password">
			  		   <span class="help-block" style="display: none;" id="password1">密码不能为空</span>
			  		</div>
					<div class="checkbox">
 						<label>
   							<input type="checkbox"> 记住密码
   						</label>
   						<a href="/index.php/Home/Index/findpwd1" class="alocation">忘记密码</a>
  					</div>			  			
  						
  					<hr />
			  		<div class="form-group">
			  			<input class="btn btn-primary btn-lg btn-block" type="submit" id="loginbtn" value="登录" />
			  			<input class="btn btn-info btn-lg btn-block" id="reg" type="button" value="注册"/>
			  		</div>
  				</form>
  			</div>
  			<div class="row">
				<div class="col-md-12 text-center" id="footer">
					<p>copyright © 明杰小哥</p>
				</div>  				
  			</div>
  		</div>
  	</div>	
  </body>
  <script type="text/javascript">
  		var input1=document.getElementById("InputEmail");
		var input2=document.getElementById("InputPassword");
		var re= /^[-_A-Za-z0-9]+@([_A-Za-z0-9]+\.)+[A-Za-z0-9]{2,3}$/; 
		$(document).ready(function(){
			function check(){
				if(input1.value==""){
					$("#demail").addClass("has-warning");
					document.getElementById("pwarning1").style.display="block";
					return false;
				}else if(!re.test(input1.value)){
					$("#demail").addClass("has-warning");
					document.getElementById("pwarning").style.display="block";
					return false;
				}else if(input2.value==""){
					$("#demail").addClass("has-warning");
					document.getElementById("password1").style.display="block";
					return false;
				}else{
					$("#demail").removeClass("has-warning");
					document.getElementById("pwarning").style.display="none";
					document.getElementById("pwarning1").style.display="none";
					document.getElementById("password1").style.display="none";
					return true;
				}
			};
			$("#reg").click(function(){
				window.location.href="/index.php/Home/Index/register";
			});
			input1.onfocus=function(){
				$("#demail").removeClass("has-warning");
				document.getElementById("pwarning").style.display="none";
				document.getElementById("pwarning1").style.display="none";
			}
			
			input1.onblur=function(){
				if(input1.value!=""){
					if(!re.test(input1.value)){
						$("#demail").addClass("has-warning");
						document.getElementById("pwarning").style.display="block";
					}else if(re.test(input1.value)){
						$("#demail").removeClass("has-warning");
						document.getElementById("pwarning").style.display="none";
					}else{
						$("#demail").removeClass("has-warning");
						document.getElementById("pwarning").style.display="none";
						document.getElementById("pwarning1").style.display="none";
					}
				}
			}
			
			input2.onfocus=function(){
				if(input1.value==""){
					document.getElementById("pwarning").style.display="none";
					$("#demail").addClass("has-warning");
					document.getElementById("pwarning1").style.display="block";
				}else{
					if(!re.test(input1.value)){
						$("#demail").addClass("has-warning");
						document.getElementById("pwarning").style.display="block";
					}else{
						$("#demail").removeClass("has-warning");
						document.getElementById("pwarning").style.display="none";
						document.getElementById("pwarning1").style.display="none";
					}
				}
			}
			
			input2.onblur=function(){
				if(input2.value==""){
					$("#demail").removeClass("has-warning");
					document.getElementById("pwarning").style.display="none";
					document.getElementById("pwarning1").style.display="none";
					document.getElementById("password1").style.display="none";
				}
			}

		});
  </script>
</html>