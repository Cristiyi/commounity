<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"/Users/cristi/Sites/fastadmin/public/../application/home/view/index/index.html";i:1522583848;s:70:"/Users/cristi/Sites/fastadmin/application/home/view/common/header.html";i:1522584023;s:70:"/Users/cristi/Sites/fastadmin/application/home/view/common/footer.html";i:1522574623;}*/ ?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8" />
	<title>蓝软社区</title>
	
	<meta name="Keywords" content="蓝软社区" />
    <meta name="Description" content="蓝软社区" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<meta content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
	
	<!-- Mobile Devices Support @begin -->
        <meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
        <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
        <meta content="no-cache" http-equiv="pragma">
        <meta content="0" http-equiv="expires">
        <meta content="telephone=no, address=no" name="format-detection">
        <meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <!-- Mobile Devices Support @end -->
	
	<link href="/fastadmin/public/static/css/index.css" rel="stylesheet" type="text/css" />
	<link href="/fastadmin/public/static/css/common.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/fastadmin/public/static/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="/fastadmin/public/static/js/main.js"></script>
	<script type="text/javascript" src="/fastadmin/public/static/js/jquery.rotate.min.js"></script>
	<script type="text/javascript" src="/fastadmin/public/static/js/jQuery-jcMarquee.js"></script>
	<script src="/fastadmin/public/static/js/idangerous.swiper-1.9.1.min.js"></script>
	<script type="text/javascript">
	$(function(){
		//Main Swiper
		var swiper = new Swiper('.swiper1', {
			pagination : '.pagination1',
			loop:true,
			autoPlay:5000,
			grabCursor: true
		});
		//Clickable pagination
		$('.pagination1 .swiper-pagination-switch').click(function(){
			swiper.swipeTo($(this).index())
		});		
	});
	</script>
</head>

<body>
<div class="main">
	<!--头部-->
	<div class="header" id="bktop">
		<div class="logo"><a href="index.html"><img src="/fastadmin/public/static/images/logo.gif" /></a></div>
		<div class="banner">
			<div class="close"><img id="img1" src="/fastadmin/public/static/images/banner01.gif" /></div>
			<div class="open hide"><img id="img2" src="/fastadmin/public/static/images/banner02.gif" /></div>
			<ul class="xla">
					<li>
						<a class="dianj dj1" href="<?php echo url('index'); ?>"><font>首页</font><img id="ig1" src="/fastadmin/public/static/images/xiala.gif" /></a>
					</li>
				<?php if(is_array($pcat) || $pcat instanceof \think\Collection || $pcat instanceof \think\Paginator): $k = 0; $__LIST__ = $pcat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$parent): $mod = ($k % 2 );++$k;?>
					<li>
						<a class="dianj dj<?php echo $k+1; ?>" href="javascript:;"><font><?php echo $parent['name']; ?></font><img id="ig<?php echo $k+1; ?>" src="/fastadmin/public/static/images/xiala.gif" /></a>
						<div class="zilan">
							<?php if(is_array($childcat) || $childcat instanceof \think\Collection || $childcat instanceof \think\Paginator): $i = 0; $__LIST__ = $childcat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;if($child['pid']==$parent['id']): ?>
									<a href="<?php echo url('index',['cate_id'=>$child['id']]); ?>"><?php echo $child['name']; ?></a>
								<?php endif; endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<div class="clearBoth"></div>
	</div>
	<!--滚动图-->
	<div id="main">
		<div class="home-device">
			<a class="arrow-left" href="#"></a> 
			<a class="arrow-right" href="#"></a>
			<div class="swiper-main">
				<div class="swiper-container swiper1">
					<div class="swiper-wrapper">
					    <div class="swiper-slide"><img src="/fastadmin/public/static/images/product/14110601.jpg" width="100%"></div>
						<div class="swiper-slide"><img src="/fastadmin/public/static/images/product/14110601.jpg" width="100%"></div>
						<div class="swiper-slide"><img src="/fastadmin/public/static/images/product/14110601.jpg" width="100%"></div>
					</div>
				</div>
			</div>			
		</div>
		<div class="dian"><div class="pagination pagination1"></div></div>
	</div>	
	<!--资讯列表-->
	<div class="news">
		<!--滚动公告-->
		<div class="gongao">
			<div class="laba"><img src="/fastadmin/public/static/images/gongao.gif" /></div>
			<div class="wenzi" id="mrq">
				<div id="Marquee_x">
					<ul>
						<li>
							<div>蓝软社区每天都会推出IT教学资源，日用软件，美剧，电影，学习资源等各种优质资源，免去你寻找资源的烦恼。</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="clearBoth"></div>
		</div>
		<!--资讯列表-->
		<div class="newslist">
			<?php if(is_array($result) || $result instanceof \think\Collection || $result instanceof \think\Paginator): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$re): $mod = ($i % 2 );++$i;?>
			<div class="qtao">
				<div class="mg">
					<div class="mgl"><a href="/fastadmin/public/<?php echo $re['image']; ?>"><img src="/fastadmin/public/<?php echo $re['image']; ?>" width="100%"/></a></div>
					<div class="mgr">
						<h3 style="font-size:100%;margin:5% 0 2% 2%;"><?php echo $re['title']; ?></h3>
						<div class="what">
							<div class="time">
								<div class="tub"><img src="/fastadmin/public/static/images/time.gif" /></div>
								<div class="shij"><?php echo date("Y年m月d日",$re['createtime']); ?></div>
								<div class="clearBoth"></div>
							</div>
							<div class="time hit">
								<div class="tub"><img src="/fastadmin/public/static/images/hit.gif" /></div>
								<div class="shij"><?php echo $re['views']; ?></div>
								<div class="clearBoth"></div>
							</div>
							<div class="clearBoth"></div>
						</div>
						<!-- <div class="jianj">	
						<?php echo $re['content']; ?>
						</div> -->
						<div class="ydu">
							<div class="anniu" style="margin-right:18%;"><a href="<?php echo url('detail',['re_id'=>$re['id']]); ?>"><img src="/fastadmin/public/static/images/ydu.gif" /></a></div>
							<div class="clearBoth"></div>
						</div>
					</div>
					<div class="clearBoth"></div>
				</div>
			</div>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
	<!--底部-->
	<div class="bottom">
		<div class="bottom-top">
			<div class="linker">
				<a class="abq" href="#"><img src="/fastadmin/public/static/images/xlweibo.gif" /></a>
				<a class="abq" href="#"><img src="/fastadmin/public/static/images/txweibo.gif" /></a>
				<a class="abq" href="#"><img src="/fastadmin/public/static/images/weixin.gif" /></a>
				<div class="liuy">
					<a href="message.html">
						<div class="tubiao"><img src="/fastadmin/public/static/images/liuy.gif" /></div>
						<div class="wenzi">联系我们</div>
						<div class="clearBoth"></div>
					</a>
				</div>
				<div class="clearBoth"></div>
			</div>
		</div>
		<div class="bottom-bot">Powered By 蓝软社区</div>
	</div>
</div>
<script type="text/javascript">
  $('#Marquee_x').jcMarquee({ 'marquee':'x','margin_right':'300px','speed':20 });
</script>
<div style="text-align:center;">
<!-- -->
</body>
</html>