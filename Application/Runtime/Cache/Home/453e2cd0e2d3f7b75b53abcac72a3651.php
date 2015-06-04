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
    	.nav-tabs{
    		margin: 70px auto;
    	}
		.nav-pills{
			margin-top: -72px;
			text-align: center;
		}
		.nav-tabs{
    		width: 95%;
    		margin-left: 15px;
    		text-align: center;
    	}
    	/*.checkbox{
    		margin-top: 40px;
    		margin-left:-30px;
    		margin-right:-30px;
    	}*/
    	#publish{
    		width: 129px;
    	}
    	#edit{
    		margin-top: -40px;
    		margin-bottom: 20px;
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
					    <li class="active" id="publish">
					    	<a href="javascript:;">发布信息</a>
					    </li>
				</ul>
				<div class="col-md-2">
					<ul class="nav nav-pills nav-stacked" role="tablist">
					     <li><a href="/index.php/Home/Index/houserentinfo">房屋出租信息</a></li>
					    <li class="active"><a href="javascript:;">房屋求租信息</a></li>
					</ul>
				</div>
				<div class="col-md-8"></div>
				<div class="col-md-2" id="edit">
					<button class="btn btn-info">编辑</button>
				</div>
			</div>
  		</div>
  		
  		<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="row">
	  			<div class="col-md-3"></div>
	  			<div class="col-md-8" id="info">
	  				<div class="col-md-10">
						<table class="table table-bordered">
							<tr>
								<th><?php echo ($vo["title"]); ?></th>
								<th><?php echo ($vo["rent"]); ?>元/月</th>
								<th><?php echo ($vo["type"]); ?></th>
								<th>手机：<?php echo ($vo["phone"]); ?></th>
							</tr>
						</table>
					</div>
	  			</div>
	  		</div><?php endforeach; endif; else: echo "" ;endif; ?>
  		
  		<div class="row">
  			<div class="col-md-8"></div>
  			<div class="col-md-4">
  				<nav>
				  <ul class="pagination">
				    <li><a href="/index.php/Home/Index/wantedinfo/pagenow/1">&laquo;</a></li>
			    	<?php $__FOR_START_8848__=1;$__FOR_END_8848__=$pagecount+1;for($i=$__FOR_START_8848__;$i < $__FOR_END_8848__;$i+=1){ ?><li><a href="/index.php/Home/Index/wantedinfo/pagenow/<?php echo ($i); ?>"><?php echo ($i); ?></a></li><?php } ?>
			   		<li><a href="/index.php/Home/Index/wantedinfo/pagenow/<?php echo ($pagecount); ?>">&raquo;</a></li>
				  </ul>
				</nav>
  			</div>
  		</div>
  </div>
</body>
<script type="text/javascript">
	$(function(){
		$("#edit button").click(function(){
			window.location.href="/index.php/Home/Index/editwantedinfo";
		})
	});
</script>
</html>