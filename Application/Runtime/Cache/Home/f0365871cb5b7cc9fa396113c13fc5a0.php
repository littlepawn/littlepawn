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
    	.form-horizontal{
    		margin-top: 25px;
    	}
		#typeradio{
			margin-top: 5px;
		}
		#label1{
			margin-left: -20px;
			margin-right: -20px;
		}
		#label2{
			margin-left: -20px;
			margin-right: -20px;
		}
		#label3{
			margin-left: -20px;
			margin-right: -20px;
		}
		#label4{
			margin-left: -20px;
			margin-right: -20px;
		}
		#label5{
			margin-right: -20px;
		}
		#label6{
			margin-left: -20px;
		}
		#label7{
			margin-right: -20px;
		}
		#label8{
			margin-left: -20px;
			margin-right: -20px;
		}
		#label9{
			margin-left: -50px;
			margin-right: -20px;
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
					    	<a href="javascript:;">发布信息</a>
					    </li>
				</ul>
				<div class="btn-group btn-group-lg col-md-12">
					<button type="button" class="col-md-4 btn btn-info" disabled="disabled">
						1.选择信息
					</button>
					<button type="button" class="col-md-4 btn btn-primary" disabled="disabled">
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
			<div class="col-md-2"></div>
			<div class="col-md-6">
			<form role="form" method="post" action="/index.php/Home/Index/checkpublish2_1">
				<div class="form-horizontal">
					<div class="form-group">
						<label class="control-label col-md-2">出租方式</label>
						<div class="col-md-6" id="typeradio">
					    	<input class="radio radio-inline" type="radio" value="整套" name="renttype">整套出租
					    	<input class="radio radio-inline" type="radio" value="单间" name="renttype">单间出租
					    	<input class="radio radio-inline" type="radio" value="床位" name="renttype">床位出租
					   	</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-2">小区名称</label>
						<div class="col-md-6">
					    	<input class="form-control" type="text" name="address">
					   	</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-2">房屋类型</label>
						<div class="col-md-2">
							<input class="form-control" name="bedroom"/>
						</div>
						<label class="control-label col-md-1" id="label1" >室</label>
						<div class="col-md-2">
							<input class="form-control" name="livingroom"/>
						</div>
						<label class="control-label col-md-1" id="label2">厅</label>
						<div class="col-md-2">
							<input class="form-control" name="toilet"/>
						</div>
						<label class="control-label col-md-1" id="label3">卫</label>
						<div class="col-md-2">
							<input class="form-control" name="area"/>
						</div>
						<label class="control-label col-md-1" id="label4">㎡</label>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-2">楼层</label>
						<label class="control-label col-md-1" id="label5">第</label>
						<div class="col-md-2">
							<input class="form-control" name="floor"/>
						</div>
						<label class="control-label col-md-1" id="label6">层</label>
						
						<label class="control-label col-md-1" id="label7">共</label>
						<div class="col-md-2">
							<input class="form-control" name="countfloor"/>
						</div>
						<label class="control-label col-md-1" id="label8">层</label>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-2">租金</label>
						<div class="col-md-2">
							<input class="form-control" type="text" name="rent" />
						</div>
						<label class="control-label col-md-2" id="label9">元/月</label>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-2">标题</label>
						<div class="col-md-6">
					    	<input class="form-control" type="text" name="title">
					   	</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-2">内容描述</label>
						<div class="col-md-8">
							<textarea class="form-control" rows="4" name="context"></textarea>
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-2">房屋图片</label>
						<div class="col-md-6">
					    	<button class="btn btn-default">图片上传</button>
					   	</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-2">联系人</label>
						<div class="col-md-6">
					    	<input class="form-control" type="text" name="name">
					   	</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-2">联系电话</label>
						<div class="col-md-6">
					    	<input class="form-control" type="text" name="phone">
					   	</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-2"></div>
						<div class="col-md-6">
					    	<input type="submit" class="btn btn-danger btn-block btn-lg" id="publish" value="确认并发布">
					   	</div>
					</div>
				</div>
				
			</form>
			</div>
			<div class="col-md-5"></div>
		</div>
		
	</div>  	
  </body>
</html>