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
		.filter{
    		margin-top: 20px;
    	}
		#reg{
    		margin-left: 20px;
    	}
    </style>
  </head>
  <body>
  	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	  <div class="container">
	    <div class="row">
	    	<div class="col-md-10">
	      		<a class="navbar-brand" href="javascript:;">
	        		<p>房产信息管理</p>
	      		</a>
	      	</div>
	      	<div class="col-md-2">
				<input id="login" type="button" class="btn btn-info navbar-btn navbar-left" value="登录">
	      		<input id="reg" type="button" class="btn btn-info navbar-btn navbar-middle" value="注册">
	      	</div>
	    </div>
	  </div>
	</nav>
	
	<div class="container">
		<div class="row">
			<div class="col-md-9"></div>
			<div class="col-md-1" id="pubbtn">
				<button class="btn btn-info" data-toggle="modal" data-target="#myModal">发布房屋信息</button>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10"  id="location-info">
				<ul class="nav nav-tabs" role="tablist" id="mytab">
				  <li role="presentation" class="dropdown active">
				    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
				    	<?php echo ($location); ?>  <span class="caret"></span>
				    </a>
				    <ul class="dropdown-menu" role="menu">
				      <?php if(is_array($province)): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$province): $mod = ($i % 2 );++$i;?><li><a href="javascript:;" role="tab" data-toggle="tab" class="pro_a"><?php echo ($province["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				    </ul>
				  </li>
				</ul>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" >
						<?php if(($location != '上海市') OR ($location != '北京市') OR ($location != '天津市') OR ($location != '重庆市')): ?><label id="label" >城市
								<?php if(is_array($city)): $i = 0; $__LIST__ = $city;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$city): $mod = ($i % 2 );++$i;?><a class="btn" href="javascript:;" class="city_a"><?php echo ($city["name"]); ?></a>
									<?php if($i == 12 ): ?><br><?php $__FOR_START_5044__=1;$__FOR_END_5044__=10;for($i=$__FOR_START_5044__;$i < $__FOR_END_5044__;$i+=1){ ?>&nbsp;<?php } endif; endforeach; endif; else: echo "" ;endif; ?>
							</label><?php endif; ?>
						<br />
						<label id="label" >地区
							<?php if(is_array($county)): $i = 0; $__LIST__ = $county;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$county): $mod = ($i % 2 );++$i;?><a class="btn" href="javascript:;" class="county_a"><?php echo ($county["name"]); ?></a>
								<?php if($i == 12 ): ?><br><?php $__FOR_START_27613__=1;$__FOR_END_27613__=10;for($i=$__FOR_START_27613__;$i < $__FOR_END_27613__;$i+=1){ ?>&nbsp;<?php } endif; endforeach; endif; else: echo "" ;endif; ?>
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
			  <li role="presentation"><a href="/index.php/Home/Index/index">出租房信息</a></li>
			  <li role="presentation"  class="active"><a href="/index.php/Home/Index/wantedindex">求租房信息</a></li>
			</ul>
			<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="filter">
					<table class="table table-bordered">
							<tr>
								<th><a style="text-decoration: none" href="/index.php/Home/Index/towantedinfobefore/id/<?php echo ($vo[id]); ?>" id="towantinfo"><?php echo ($vo["title"]); ?></a></th>
								<th><?php echo ($vo["rent"]); ?>元/月</th>
								<th><?php echo ($vo["type"]); ?></th>
								<th>手机：<?php echo ($vo["phone"]); ?></th>
							</tr>
					</table>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div class="col-md-1"></div>
		
		<div class="col-md-1"></div>
		<div class="col-md-8 col-md-offset-1">
			<nav>
			  <ul class="pagination">
			    <li><a href="/index.php/Home/Index/wantedindex/pagenow/1">&laquo;</a></li>
			    <?php $__FOR_START_29522__=1;$__FOR_END_29522__=$pagecount+1;for($i=$__FOR_START_29522__;$i < $__FOR_END_29522__;$i+=1){ ?><li><a href="/index.php/Home/Index/wantedindex/pagenow/<?php echo ($i); ?>"><?php echo ($i); ?></a></li><?php } ?>
			    <li><a href="/index.php/Home/Index/wantedindex/pagenow/<?php echo ($pagecount); ?>">&raquo;</a></li>
			  </ul>
			</nav>
		</div>
		<div class="col-md-2"></div>
		
		<div class='row'>
			 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-sm">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">提示</h4>
				      </div>
				      <div class="modal-body">
				        	<h3 style="text-align: center;">请先登录</h3>
				      </div>
				      <div class="modal-footer">
				      	<button type="button" class="btn btn-primary" id="redirect">登录</button>
				        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
				      </div>
				    </div>
			       </div>
			</div>
	    </div>
	</div>
</body>
  <script type="text/javascript">
	 $(function(){
		$("#login").click(function(){
			window.location.href="/index.php/Home/Index/login";
		});
		$("#reg").click(function(){
			window.location.href="/index.php/Home/Index/register";
		});
		$("#redirect").click(function(){
			window.location.href="/index.php/Home/Index/login";
		});
	 });
  </script>
</html>