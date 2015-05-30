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
    	#mainbody{
    		margin: 50px auto;
    	}
    	.form-horizontal{
    		margin-top: 100px;
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
					 <li><a tabindex="-1" href="javascript:history.go(-1);">返回上一页</a></li>
   					 <li><a tabindex="-1" href="/index.php/Home/Index/userinfo">查看个人信息</a></li>
   					 <li><a tabindex="-1" href="/index.php/Home/Index/houserentinfo">查看发布信息</a></li>
    				 <li><a tabindex="-1" href="/index.php/Home/Index/loginout">退出</a></li>
    			</ul>
	      	</div>
	    </div>
	  </div>
	</nav>
	
	<div class="container" id="mainbody">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-9">
				<ul class="nav nav-tabs">
					    <li class="active">
					    	<a href="javascript:;" >修改邮箱</a>
					    </li>
				</ul>
				<div class="col-md-3"></div>
					    <div class="col-md-7">
					    	<form action="/index.php/Home/Index/checkemail" method="post">
						    	<div class="form-horizontal">
						    		<div class="form-group">
						    			<label class="control-label col-md-3">当前密码</label>
						    			<div class="col-md-6">
						    				<input class="form-control" type="password" />
						    			</div>
						    		</div>
						    		
						    		<div class="form-group">
						    			<label class="control-label col-md-3">新邮箱</label>
						    			<div class="col-md-6">
						    				<input class="form-control" type="email" />
						    			</div>
						    		</div>
						    		
						    		<div class="form-group">
						    			<div class="col-md-3"></div>
						    			<div class="col-md-3">
						    				<input type="submit" class="btn btn-primary btn-block" value="提交">
						    			</div>
						    		</div>
						    	</div>
					    	</form>
					    </div>
			</div>
		</div>
	</div>
  </body>
</html>