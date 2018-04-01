<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"/Users/cristi/Sites/fastadmin/public/../application/home/view/index/detail.html";i:1522583747;s:70:"/Users/cristi/Sites/fastadmin/application/home/view/common/header.html";i:1522584023;s:70:"/Users/cristi/Sites/fastadmin/application/home/view/common/footer.html";i:1522574623;}*/ ?>
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
	<!--关于我们内容-->	
	<div class="about">	
		<div class="title"><?php echo $detail['title']; ?></div>
		<div class="content">
			<!--编辑内容-->
			<p style="color:#cccccc;font-size:16px;line-height:30px;">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $detail['content']; ?></p></br>
			<?php if(is_array($detail['images']) || $detail['images'] instanceof \think\Collection || $detail['images'] instanceof \think\Paginator): $i = 0; $__LIST__ = $detail['images'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$img): $mod = ($i % 2 );++$i;?>
				<p><img src="/fastadmin/public<?php echo $img; ?>" /></p></br>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			<p style="color:#cccccc;font-size:16px;line-height:30px;"><a href="<?php echo $detail['baidu_url']; ?>" style="color:red;font-size:20px">百度云链接点此处</a></p></br>
			<p style="color:#cccccc;font-size:16px;line-height:30px;font-size:20px;">百度云密码：<?php echo $detail['password']; ?></p>
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
</body>
</html>