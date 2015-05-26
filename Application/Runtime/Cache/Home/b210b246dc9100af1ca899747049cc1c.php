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
    	body { 
    		padding-top: 50px; 
    	}
    	#name{
    		margin-left: 120px;
    	}
    	.nav{
    		margin: 50px auto;
    	}
    	#change{
    		margin-left: 100px;
    		margin-top: 20px;
    	}
    	#password{
    		text-align: center;
    		font-family: "微软雅黑";
    		color: red;
    	}
    	#email{
    		text-align: center;
    	}
    	#phone{
    		text-align: center;
    	}
    </style>
  </head>
  <body>
  	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	  <div class="container">
	    <div class="row">
	    	<div class="col-md-10">
	      		<a class="navbar-brand" href="#">
	        		<p>房产信息管理</p>
	      		</a>
	      	</div>
	      	<div class="col-md-2">
	      		<button type="button" class="btn btn-info navbar-btn navbar-right dropdown-toggle"  data-toggle="dropdown">
					<?php echo ($name); ?><span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" id="name">
				     <li><a tabindex="-1" href="/index.php/Home/Index/main">返回主页</a></li>
   					 <li><a tabindex="-1" href="/index.php/Home/Index/userinfo">查看个人信息</a></li>
   					 <li><a tabindex="-1" href="#">查看发布信息</a></li>
    				 <li><a tabindex="-1" href="/index.php/Home/Index/loginout">退出</a></li>
    			</ul>
	      	</div>
	    </div>
	  </div>
	</nav>
  	
  	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				    <ul class="nav nav-tabs">
					    <li class="active">
					    	<a href="">修改个人资料</a>
					    </li>
					</ul>
					<div class="col-md-4" id="head-sculpture">
						<img class="img-thumbnail" src="/Public/i/1.jpg" alt="..." >
						<button class="btn btn-primary btn-lg" type="button" id="change">更改头像</button>
					</div>
					<div class="col-md-8">
						<form class="form-horizontal" role="form">
							<div class="form-group">
								<label class="control-label col-md-2">用户名</label>
								<div class="col-md-6">
									<input class="form-control" type="text">
								</div>
								<!--<div class="col-md-4"></div>-->
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-2">登录密码</label>
								<label class="control-label col-md-2" id="password">已设置</label>
								<div class="col-md-2 col-md-offset-1">
									<a class="btn btn btn-default" href="">修改</a>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-2">邮箱</label>
								<label class="control-label col-md-3" id="email"><?php echo ($email); ?></label>
								<div class="col-md-2 col-md-offset-1">
									<a class="btn btn btn-default" href="">修改</a>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-2">手机</label>
								<label class="control-label col-md-2" id="phone"><?php echo ($phone); ?></label>
								<div class="col-md-2 col-md-offset-1">
									<a class="btn btn btn-default" href="">修改</a>
								</div>
							</div>
							
							<div class="form-group">
								 <label class="control-label col-md-2">性别</label>
					   			 <div class="col-md-6">
					    			  <input class="radio radio-inline" type="radio" value="option1" name="sex">男
					    			  <input class="radio radio-inline" type="radio" value="option1" name="sex">女
					   			 </div>
							</div>
							
							<div class="form-group">
								<label for="inputBirth" class="col-md-2 control-label">所在城市</label>
								<div class="col-md-4">
									<select class="form-control">
										<option>江苏省</option>
										<option>浙江省</option>
										<option>广东省</option>
									</select>
								</div>
								<div class="col-md-2">
									<select class="form-control">
										<option>徐州</option>
										<option>南京</option>
										<option>苏州</option>
										<option>无锡</option>
										<option>南通</option>
										<option>扬州</option>
										<option>泰州</option>
										<option>镇江</option>
										<option>常州</option>
										<option>盐城</option>
										<option>淮安</option>
										<option>宿迁</option>
										<option>连云港</option>
									</select>
								</div>
								<div class="col-md-2">
									<select class="form-control">
										<option>铜山</option>
										<option>泉山</option>
										<option>贾汪</option>
									</select>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-1"></div>
								<div class="col-md-5 col-md-offset-1">
									<input class="btn btn-info btn-lg btn-block" type="button" value="保存"/>
								</div>
								<!--<div class="col-md-7"></div>-->
							</div>
							
						</form>
					</div>
			</div>
			<div class="col-md-1"></div>
		</div>  		
  	</div>
  	
  </body>
  <script type="text/javascript">
	    $(".add-on").height("25px");
  </script>
</html>