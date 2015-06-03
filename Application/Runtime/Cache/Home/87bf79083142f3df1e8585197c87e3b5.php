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
    	.checkbox{
    		margin-top: 40px;
    		margin-left:-30px;
    		margin-right:-30px;
    	}
    	.btn-sm{
    		margin-left: 12px;
    	}
    	#publish{
    		width: 129px;
    	}
    	#edit{
    		margin-top: -40px;
    		margin-bottom: 20px;
    	}
    	#rent,#department{
    		margin-top: -30px;
    		margin-bottom: -30px;
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
	
	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<ul class="nav nav-tabs">
					    <li class="active" id="publish">
					    	<a href="">发布信息</a>
					    </li>
				</ul>
				<div class="col-md-2">
					<ul class="nav nav-pills nav-stacked" role="tablist">
					    <li class="active"><a href="">房屋出租信息</a></li>
					    <li><a href="">房屋求租信息</a></li>
					</ul>
				</div>
				<div class="col-md-7"></div>
				<div class="col-md-1" id="edit">
					<button class="btn btn-danger" id="del">删除</button>
				</div>
				<div class="col-md-1" id="edit">
					<button class="btn btn-danger" id="save">保存</button>
				</div>
			</div>
  		</div>
  		
  		<div class="row" id="mainbody">
  			
  			<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-3"></div>
	  			<div class="col-md-8" id="info">
	  				<div class="col-md-1 checkbox">
	  					<label>
				          <input type="checkbox" name="houseid" value="<?php echo ($id); ?>">
				        </label>
	  				</div>
	  				<div class="col-md-2 picture">
						<img class="img-thumbnail" src="/Public/i/1.jpg" alt="..." >
						<button class="btn btn-sm btn-success">更换图片</button>
					</div>
					<div class="col-md-6">
						<table class="table table-hover">
							<tr><th><input class="input-block-level" type="text" placeholder="<?php echo ($vo['title']); ?>" name="title"></th></tr>
							<tr><td><input class="input-block-level" type="text" placeholder="位置：<?php echo ($vo['address']); ?>" name="address"></td></tr>
							<tr><td>Data</td></tr>
						</table>
					</div>
					<div class="col-md-2">
						<table class="table table-hover">
							<tr><th><input class="input-block-level" type="text" placeholder="<?php echo ($vo['rent']); ?>" name="rent">元/月</th></tr>
							<tr><td><input style="width: 50px" class="input-block-level" type="text" placeholder="<?php echo ($vo['bedroom']); ?>" name="bedroom">室<input style="width: 50px" class="input-block-level" type="text" placeholder="<?php echo ($vo['livingroom']); ?>" name="livingroom">厅</td></tr>
						</table>
					</div>
	  			</div><?php endforeach; endif; else: echo "" ;endif; ?>
  			
  			
  		</div>
  		
  		<div class="row">
  			<div class="col-md-8"></div>
  			<div class="col-md-4">
  				<nav>
				  <ul class="pagination">
				     <li><a href="/index.php/Home/Index/edithouserentinfo/pagenow/1">&laquo;</a></li>
			    	<?php $__FOR_START_658__=1;$__FOR_END_658__=$pagecount+1;for($i=$__FOR_START_658__;$i < $__FOR_END_658__;$i+=1){ ?><li><a href="/index.php/Home/Index/edithouserentinfo/pagenow/<?php echo ($i); ?>"><?php echo ($i); ?></a></li><?php } ?>
			   		<li><a href="/index.php/Home/Index/edithouserentinfo/pagenow/<?php echo ($pagecount); ?>">&raquo;</a></li>
				  </ul>
				</nav>
  			</div>
  		</div>
  		
  </div>
</body>
<script type="text/javascript">
	$(function(){
		$("#del").click(function(){
			
			window.location.href="/index.php/Home/Index/delhouserentinfo";
		});
		$("#save").click(function(){
			window.location.href="/index.php/Home/Index/savehouserentinfo";
		});
	});
</script>  
</html>