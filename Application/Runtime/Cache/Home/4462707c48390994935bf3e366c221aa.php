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
    	#location-info{
    		margin: 15px auto;
    		padding: 20px;
    		border: 1px solid #28A4FF;
    	}
    	#label{
    		margin: 10px auto;
    	}
    	#pubbtn{
    		margin-top: 40px;
    		margin-left: 70px;
    	}
		.house-info{
			margin: 20px auto;
		}
		#name{
    		margin-left: 120px;
    	}
    	.house-list{
    		margin-top: 20px;
    	}
    </style>
  </head>
  <body>
  	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	  <div class="container">
	    <div class="row">
	    	<div class="col-md-10">
	      		<a class="navbar-brand" href="">
	        		<p>房产信息管理</p>
	      		</a>
	      	</div>
	      	<div class="col-md-2">
	      		<button type="button" class="btn btn-info navbar-btn navbar-right dropdown-toggle"  data-toggle="dropdown">
				<?php echo ($name); ?>	<span class="caret"></span></button>
				<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" id="name">
   					 <li><a tabindex="-1" href="/index.php/Home/Index/userinfo">查看个人信息</a></li>
   					 <li><a tabindex="-1" href="/index.php/Home/Index/houserentinfo">查看发布信息</a></li>
    				 <li><a tabindex="-1" href="/index.php/Home/Index/loginout">退出</a></li>
    			</ul>
	      	</div>
	    </div>
	  </div>
	</nav>
	
	<div class="container">
		<div class="row">
			<div class="col-md-9"></div>
			<div class="col-md-1" id="pubbtn">
				<button class="btn btn-info">发布房屋信息</button>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10"  id="location-info">
				<ul class="nav nav-tabs" role="tablist" id="mytab">
				  <li role="presentation" class="active"><a href="#xuzhou" role="tab" data-toggle="tab">徐州</a></li>
				  <li role="presentation" class="dropdown">
				    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
				    	其他地区 <span class="caret"></span>
				    </a>
				    <ul class="dropdown-menu" role="menu">
				      <li><a href="#beijing" role="tab" data-toggle="tab">北京</a></li>
				      <li><a href="#nanjing" role="tab" data-toggle="tab">南京</a></li>
				      <li><a href="#shanghai" role="tab" data-toggle="tab">上海</a></li>
				    </ul>
				  </li>
				</ul>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="xuzhou" >
						<label id="label" >区域
							<a class="btn active" href="">全徐州</a>
							<a class="btn" href="">铜山</a>	
							<a class="btn" href="">泉山</a>	
							<a class="btn" href="">贾汪</a>	
						</label>
						<br />
						<label>租金
							<a class="btn active" href="">不限</a>
							<a class="btn" href="">500以下</a>	
							<a class="btn" href="">500-1000</a>	
							<a class="btn" href="">1000以上</a>	
						</label>
						<br />
						<label>厅室
							<a class="btn active" href="">不限</a>
							<a class="btn" href="">一室</a>	
							<a class="btn" href="">两室</a>	
							<a class="btn" href="">三室</a>
							<a class="btn" href="">三室以上</a>
						</label>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="beijing">
						<label id="label">区域
							<a class="btn active" href="">全北京</a>
							<a class="btn" href="">朝阳</a>	
							<a class="btn" href="">东城</a>	
							<a class="btn" href="">海淀</a>	
						</label>
						<br />
						<label>租金
							<a class="btn active" href="">不限</a>
							<a class="btn" href="">500以下</a>	
							<a class="btn" href="">500-1000</a>	
							<a class="btn" href="">1000以上</a>	
						</label>
						<br />
						<label>厅室
							<a class="btn active" href="">不限</a>
							<a class="btn" href="">一室</a>	
							<a class="btn" href="">两室</a>	
							<a class="btn" href="">三室</a>
							<a class="btn" href="">三室以上</a>
						</label>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="nanjing">
						<label id="label">区域
							<a class="btn active" href="">全南京</a>
							<a class="btn" href="">玄武</a>	
							<a class="btn" href="">鼓楼</a>	
							<a class="btn" href="">秦淮</a>	
						</label>
						<br />
						<label>租金
							<a class="btn active" href="">不限</a>
							<a class="btn" href="">500以下</a>	
							<a class="btn" href="">500-1000</a>	
							<a class="btn" href="">1000以上</a>	
						</label>
						<br />
						<label>厅室
							<a class="btn active" href="">不限</a>
							<a class="btn" href="">一室</a>	
							<a class="btn" href="">两室</a>	
							<a class="btn" href="">三室</a>
							<a class="btn" href="">三室以上</a>
						</label>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="shanghai">
						<label id="label">区域
							<a class="btn active" href="">全上海</a>
							<a class="btn" href="">浦东</a>	
							<a class="btn" href="">黄浦</a>	
							<a class="btn" href="">徐汇</a>	
						</label>
						<br />
						<label>租金
							<a class="btn active" href="">不限</a>
							<a class="btn" href="">500以下</a>	
							<a class="btn" href="">500-1000</a>	
							<a class="btn" href="">1000以上</a>	
						</label>
						<br />
						<label>厅室
							<a class="btn active" href="">不限</a>
							<a class="btn" href="">一室</a>	
							<a class="btn" href="">两室</a>	
							<a class="btn" href="">三室</a>
							<a class="btn" href="">三室以上</a>
						</label>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		<hr />
		<div class="col-md-1"></div>
		<div class="col-md-10 house-info">
			<ul class="nav nav-pills" role="tablist">
			  <li role="presentation" class="active"><a href="#">出租房信息</a></li>
			  <li role="presentation"><a href="#">求租房信息</a></li>
			</ul>
			<div class="row house-list">
				<div class="col-md-2 picture">
					<img class="img-thumbnail" src="/Public/i/1.jpg" alt="..." >
				</div>
				<div class="col-md-8">
					<table class="table table-hover">
						<tr><th>Header</th></tr>
						<tr><td>Data</td></tr>
						<tr><td>Data</td></tr>
					</table>
				</div>
				<div class="col-md-2">
					<table class="table table-hover">
						<tr><th>500元/月</th></tr>
						<tr><td>三室一厅</td></tr>
					</table>
				</div>
			</div>
			
			<div class="row house-list">
				<div class="col-md-2 picture">
					<img class="img-thumbnail" src="/Public/i/1.jpg" alt="..." >
				</div>
				<div class="col-md-8">
					<table class="table table-hover">
						<tr><th>Header</th></tr>
						<tr><td>Data</td></tr>
						<tr><td>Data</td></tr>
					</table>
				</div>
				<div class="col-md-2">
					<table class="table table-hover">
						<tr><th>500元/月</th></tr>
						<tr><td>三室一厅</td></tr>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
		
		<div class="col-md-1"></div>
		<div class="col-md-8 col-md-offset-1">
			<nav>
			  <ul class="pagination">
			    <li><a href="#">&laquo;</a></li>
			    <li><a href="#">1</a></li>
			    <li><a href="#">2</a></li>
			    <li><a href="#">3</a></li>
			    <li><a href="#">4</a></li>
			    <li><a href="#">5</a></li>
			    <li><a href="#">&raquo;</a></li>
			  </ul>
			</nav>
		</div>
		<div class="col-md-2"></div>
	</div>
  </body>
  <script type="text/javascript">
  	$("#pubbtn button").click(function(){
		window.location.href="/index.php/Home/Index/publish1";
	});
  </script>
</html>