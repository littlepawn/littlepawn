<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>房产信息管理</title>
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
    	#mainbody{
    		margin: 30px auto;
    	}
    	.nav-tabs{
    		width: 95%;
    		margin-left: 15px;
    	}
    	.form{
    		margin-top: 100px;
    		margin-left: 30px;
    		text-align: center;
    	}
    </style>
  </head>
 
 <body>
  	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	  <div class="container">
	    <div class="row">
	    	<div class="col-md-10">
	      		<a class="navbar-brand" href="/index.php/Home/Index/main">
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
					    	<a href="javascript:;" >发布信息</a>
					    </li>
				</ul>
				<div class="btn-group btn-group-lg col-md-12">
					<button type="button" class="col-md-4 btn btn-info" disabled="disabled">
						1.选择信息
					</button>
					<button type="button" class="col-md-4 btn btn-default" disabled="disabled">
						2.发布信息
					</button>
					<button type="button" class="col-md-4 btn btn-default" disabled="disabled">
						3.发布完成
					</button>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
		
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-3">
				<div class="form">
					<label class="btn btn-lg btn-block btn-success" id="rent">出租房</label>
					<hr />
					<label class="btn btn-lg btn-block btn-warning" id="wanted">求租房</label>
				</div>
			</div>
			<div class="col-md-3"></div>
			<div class="col-md-3"></div>
			<div class="col-md-1"></div>
		</div>
		
	</div>
  </body>
  <script type="text/javascript">
  	$(function(){
  		$("#rent").click(function(){
			window.location.href="/index.php/Home/Index/publish2_1";
		});
  		$("#wanted").click(function(){
			window.location.href="/index.php/Home/Index/publish2_2";
		});
  	});
  </script>
</html>