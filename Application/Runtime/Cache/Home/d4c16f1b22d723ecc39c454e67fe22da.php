<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>房屋信息管理系统</title>
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
    		margin-top: 50px;
    	}
    	#info{
    		margin: 15px auto;
    		padding: 20px;
    		border: 1px solid #66ccff;
    	}
    	#phone{
    		width: 60%;
    		border: 1px solid #66ccff;
    		margin-left: 20px;
    	}
    	#picture{
    		padding-left: 0;
    	}
    	#phonenum{
    		color: red;
    		font-family: "微软雅黑";
    		font-size: 20px;
    	}
    	.house-info{
			margin: 20px auto;
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
	
	<div class="container">
		<div class="row" id="mainbody">
		
			<div class="col-md-1"></div>
			<div class="col-md-8" id="info">
				<h1><?php echo ($data['0']['title']); ?></h1>
				<hr />
				<div class="col-md-4">
					<img class="img-thumbnail" src="/Public/i/1.jpg" alt="..." >
				</div>
				<div class="col-md-8">
					<form class="form-horizontal" role="form">
						<div class="form-group">
						   <label class="col-md-2 control-label">价格</label>
						   <label class="col-md-3 control-label" id="rent" style="text-align: left;"><?php echo ($data['0']['rent']); ?>元/月</label>
						</div>
						
						<div class="form-group">
						   <label class="col-md-2 control-label">概况</label>
						   <label class="col-md-4 control-label" id="allocation" style="text-align: left;"><?php echo ($data['0']['bedroom']); ?>室<?php echo ($data['0']['livingroom']); ?>厅<?php echo ($data['0']['toilet']); ?>卫</label>
						   <label class="col-md-2 control-label"><?php echo ($data['0']['area']); ?>㎡</label>
						</div>
						
						<div class="form-group" id="">
						   <label class="col-md-2 control-label">楼层</label>
						   <label class="col-md-2 control-label" style="text-align: left;">第<?php echo ($data['0']['floor']); ?>层</label>
						   <label class="col-md-2 control-label">共<?php echo ($data['0']['countfloor']); ?>层</label>
						</div>
						
						<div class="form-group">
						   <label class="col-md-2 control-label">地址</label>
						   <div class="col-md-3">
								<select class="form-control" disabled="disabled">
									<option selected="selected">江苏</option>
								</select>
						   </div>
						   <div class="col-md-3">
								<select class="form-control" disabled="disabled">
									<option selected="selected">徐州</option>
								</select>
						   </div>
						   <div class="col-md-3">
								<select class="form-control" disabled="disabled">
									<option selected="selected">泉山</option>
								</select>
						   </div>
						</div>
						
						<div class="form-group">
						   <label class="col-md-2 control-label">联系</label>
						   <label class="col-md-3 control-label" id="username" style="text-align: left;"><?php echo ($data['0']['name']); ?></label>
						</div>
						
						<div class="form-group" id="phone">
						   <img class="col-md-3" src="/Public/i/phone.jpg" alt="" id="picture"/>
						   <label class="col-md-4 control-label" id="phonenum"><?php echo ($data['0']['phone']); ?></label>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	
	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-8">
				<hr />
			</div>
		</div>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-8 house-info">
				<ul class="nav nav-tabs" role="tablist" id="mytab">
				  <li role="presentation" class="active"><a href="">房源描述</a></li>
				</ul>
				<p>房屋描述</p>
			</div>
		</div>
	</div>
  </body>
</html>