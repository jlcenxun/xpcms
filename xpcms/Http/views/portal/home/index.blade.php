<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>php中文网门户系统</title>
<meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="apple-mobile-web-app-status-bar-style" content="black"> 
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="format-detection" content="telephone=no">
  
  <link rel="stylesheet" href="/models/portal/static/css/style.css"  media="all">
  <link rel="stylesheet" href="/models/portal/static/css/home.css"  media="all">
  <script src="/models/portal/static/js/jquery3.4.1.js"></script>
  <link rel="stylesheet" type="text/css" href="/models/portal/static/layui/css/layui.css">
  <script type="text/javascript" src="/models/portal/static/layui/layui.js"></script>
  <script type="text/javascript" src="/models/portal/static/js/site.js"></script>
</head>
<body>
<div class="home-top phpcn-clear">
	<ul class='phpcn-col-md10'>
		<li ><a href="">网站首页</a></li>
		<li><a href="">专题</a></li>
		<li><a href="">网站导航 <i class="phpcn-icon phpcn-icon-down"></i></a></li>
		<li><a href="">二手商品</a></li>
		<li><a href="">讨论区</a></li>
	</ul>
	<dl class='phpcn-col-md2'>
		<dd><a href="">免费注册</a></dd>
		<dd><a href="javascript:;" onclick="login()"><i class="phpcn-icon phpcn-icon-huiyuan2"></i>登陆</a></dd>
	</dl>
</div>
<!--头部结束--->
<!--LOGO与搜索--->
<div class="phpcn-main  phpcn-mt-60">
	<div class="logo-top phpcn-clear">
		<div class="phpcn-col-md4">
			<a href=""><img src="/models/portal/static/images/logo.png"></a>
		</div>
		<div class="phpcn-col-md4">
			<input type="" name=""><i class="phpcn-icon phpcn-icon-jinduchaxun"></i>
		</div>
		<div class="phpcn-col-md4">
			<dl class="erwei-code">
				<dd><a href="/personal"><i class="phpcn-icon phpcn-icon-huiyuan1"></i></a></dd>
				<dd><a href=""><i class="phpcn-icon phpcn-icon-danmu1"></i></a></dd>
				<dd><a href=""><i class="phpcn-icon phpcn-icon-duoxuankuang1"></i></a></dd>
				<dd><a href=""><i class="phpcn-icon phpcn-icon-jishufuwu"></i></a></dd>
				<dd><a href=""><i class="phpcn-icon phpcn-icon-peiwangyindao"></i></a></dd>
				<dd><a href=""><i class="phpcn-icon phpcn-icon-wenjianjia"></i></a></dd>
				<dd><a href=""><i class="phpcn-icon phpcn-icon-huiyuan1"></i></a></dd>
			</dl>
		</div>
	</div>
	<!--LOGO与搜索结束--->
	<!--菜单 开始 --->
	<div class="menu phpcn-mt-30 phpcn-clear">
		<div >
			<dl class="phpcn-col-md3">
				<dt><i class="phpcn-icon phpcn-icon-gongdan"></i><span>{{$zixunkanxue['title']}}</span></dt>
				<dd>
					@foreach($zixunkanxue_sub as $zxkx_sub)
					<a href="">{{$zxkx_sub['title']}}</a>
					@endforeach
				</dd>
			</dl>
			<dl class="phpcn-col-md2">
				<dt>
					<i class="phpcn-icon phpcn-icon-renwujincheng"></i><span>{{$xiaopitoutiao['title']}}</span>
				</dt>
				<dd>
					@foreach($xiaopitoutiao_sub as $xptt_sub)
					<a href="">{{$xptt_sub['title']}}</a>
					@endforeach
				</dd>				
			</dl>
			<dl class="phpcn-col-md2">
				<dt>
					<i class="phpcn-icon phpcn-icon-gongdan"></i><span>{{$jinrizixun['title']}}</span>
				</dt>
				<dd>
					@foreach($jinrizixun_sub as $jrzx_sub)
					<a href="">{{$jrzx_sub['title']}}</a>
					@endforeach
				</dd>				
			</dl>
			<dl class="phpcn-col-md4">
				<dt>
					<i class="phpcn-icon phpcn-icon-DOC"></i><span>{{$tujidaquan['title']}}</span>
				</dt>
				<dd>
					@foreach($tujidaquan_sub as $tjdq_sub)
					<a href="">{{$tjdq_sub['title']}}</a>
					@endforeach
				</dd>
			</dl>
		</div>
	</div>
	<!--菜单 结束--->
	<!--幻灯片-->
	<div class="phpcn-clear banner phpcn-mt-30">
		<div class="phpcn-col-md9">
			<div class="pi">
				<div class="pike">  {{--.pike js里面定义--}}
					<div><img src="/models/portal/static/images/1.jpg" alt=""></div>
					<div><img src="/models/portal/static/images/2.jpg" alt=""></div>
					<div><img src="/models/portal/static/images/3.jpg" alt=""></div>
					<div><img src="/models/portal/static/images/4.jpg" alt=""></div>
				</div>
				<div class="pike_prev"></div>
				<div class="pike_next"></div>
				<div class="pike_spot"></div>
			</div>
		</div>
		<div class="phpcn-col-md3">
			<img class="phpcn-r banner-right" src="/models/portal/static/images/banner-right.jpg">
		</div>
	</div>
	<!--幻灯片结束-->
	<!--新聞開始-->
	<div class="home-news phpcn-mt-30">
		<div class="title phpcn-mb-20">
			<a href="" class="tit">新闻资讯</a>
			<span class="phpcn-r"><a href="">更多</a></span>
		</div>
		<div class="phpcn-clear ">
			<div class="phpcn-col-md4">
				<img src="/models/portal/static/images/news.jpg">
			</div>
			<div class="phpcn-col-md4">
				<h3>

					<a href="">{{$lists_1[0]['title']}}</a>

				</h3>
				<ul>
					<?php unset($lists_1[0])?>
					@foreach($lists_1 as $list)
					<li><span></span><a href="">{{$list['title']}}</a></li>
					@endforeach
				</ul>
			</div>
			<div class="phpcn-col-md4">
				<h3>
					<a href="">{{$lists_2[0]['title']}}</a>
				</h3>
				<ul>
					<?php unset($lists_2[0])?>
					@foreach($lists_2 as $list)
						<li><span></span><a href="">{{$list['title']}}</a></li>
					@endforeach
				</ul>
			</div>
		</div>
		<div class="phpcn-clear phpcn-mt-30">
			<div class="phpcn-col-md4">
				<dl class="pic">
					<dd class="phpcn-col-md6">
						<a href=""><img src="/models/portal/static/images/n-2.jpg"><span>三星Note10/10+发布<br>搭载挖孔前摄</span></a>
					</dd>
					<dd class="phpcn-col-md6">
						<a href=""><img src="/models/portal/static/images/n-3.jpg"><span>小米公布6400万<br>和1亿像素手机信息</span></a>
					</dd>
				</dl>
			</div>
			<div class="phpcn-col-md4">
				<ul>
					@foreach($lists_3 as $list)
						<li><span></span><a href="">{{$list['title']}}</a></li>
					@endforeach
				</ul>
			</div>
			<div class="phpcn-col-md4">
				<ul>
					@foreach($lists_4 as $list)
						<li><span></span><a href="">{{$list['title']}}</a></li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
	<!--新聞開始結束-->
</div>
<!--LOGO与搜索结束--->
<!--图片开始-->
<div class="phpcn-clear phpcn-mt-30" style='background:#eee;'>
	<div class="phpcn-main">
		<div class="phpcn-clear home-img">
			<div class="title-header phpcn-mb-40 phpcn-mt-20"><span>图片专区</span></div>
			<div class=" phpcn-clear phpcn-col-space15">
				<div class="phpcn-col-md4">
					<div class="bg">
						<div class="title "><a href="">美女</a> <span>纵观摄影艺术</span></div>
						<ul class="phpcn-clear">
							<li class="phpcn-col-md6">
								<a href="}"><img src=""></a>
								<a href=""></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="phpcn-col-md4">
					<div class="bg">
						<div class="title "><a href="">帅哥</a> <span>纵观摄影艺术</span></div>
						<ul class="phpcn-clear">
							<li class="phpcn-col-md6">
								<a href=""><img src=""></a>
								<a href=""></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="phpcn-col-md4">
					<div class="bg">
						<div class="title "><a href="">卡通</a> <span>纵观摄影艺术</span></div>
						<ul class="phpcn-clear">
							<li class="phpcn-col-md6">
								<a href=""><img src=""></a>
								<a href=""></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--图片开始结束-->
		<!--商城开始-->
		<div class="phpcn-clear">
			<div class="title-header phpcn-mb-40 phpcn-mt-20"><span>二手交易</span></div>
			<div class="home-shop phpcn-clear">
				<div class="title "><a href="">抢好货</a> <span>0低价、便捷、安全、快速</span></div>
				<div class='head-tags'>
					<span>热门分类：</span>
					<a href="">美女写真</a>
					<a href="">日本美女</a>
					<a href="">美国美女</a>
					<a href="">国内美女</a>
					<a href="">AV美女</a>
				</div>
				<div class="phpcn-clear">
					<div class="phpcn-col-md8">
						<dl>
							<dd class="phpcn-col-md3">
								<a href=""><img src="/models/portal/static/images/shop/shop1.jpg"></a>
								<a href="">美女性感写真海报墙艺术装饰画贴画图画</a>
								<a href="" class="phpcn-mt-10"><span class="price">￥113</span><span class="tags">美女</span></a>
							</dd>
							<dd class="phpcn-col-md3">
								<a href=""><img src="/models/portal/static/images/shop/shop2.jpg"></a>
								<a href="">美女性感写真海报墙面贴画艺术装画</a>
								<a href="" class="phpcn-mt-10"><span class="price">￥113</span><span class="tags">美女</span></a>
							</dd>
							<dd class="phpcn-col-md3">
								<a href=""><img src="/models/portal/static/images/shop/shop3.jpg"></a>
								<a href="">美女性感写真海报墙面贴画艺</a>
								<a href="" class="phpcn-mt-10"><span class="price">￥113</span><span class="tags">美女</span></a>
							</dd>
							<dd class="phpcn-col-md3">
								<a href=""><img src="/models/portal/static/images/shop/shop4.jpg"></a>
								<a href="">美女性感写真海饰画酒吧卧室贴画图画</a>
								<a href="" class="phpcn-mt-10"><span class="price">￥113</span><span class="tags">美女</span></a>
							</dd>
							<dd class="phpcn-col-md3">
								<a href=""><img src="/models/portal/static/images/shop/shop5.jpg"></a>
								<a href="">美女性感写真海报墙画图画</a>
								<a href="" class="phpcn-mt-10"><span class="price">￥113</span><span class="tags">美女</span></a>
							</dd>
							<dd class="phpcn-col-md3">
								<a href=""><img src="/models/portal/static/images/shop/shop6.jpg"></a>
								<a href="">美女性感写真海报墙画图画</a>
								<a href="" class="phpcn-mt-10"><span class="price">￥113</span><span class="tags">美女</span></a>
							</dd>
							<dd class="phpcn-col-md3">
								<a href=""><img src="/models/portal/static/images/shop/shop7.jpg"></a>
								<a href="">美女性感写真海报墙画图画</a>
								<a href="" class="phpcn-mt-10"><span class="price">￥113</span><span class="tags">美女</span></a>
							</dd>
							<dd class="phpcn-col-md3">
								<a href=""><img src="/models/portal/static/images/shop/shop8.jpg"></a>
								<a href="">美女性感写真海报墙画图画</a>
								<a href="" class="phpcn-mt-10"><span class="price">￥113</span><span class="tags">美女</span></a>
							</dd>
						</dl>
					</div>
					<div class="phpcn-col-md4 home-ad">
						<ul class="phpcn-clear">
							<li class="phpcn-col-md6"><a href=""><img src="/models/portal/static/images/ad/1.png"></a></li>
							<li class="phpcn-col-md6"><a href=""><img src="/models/portal/static/images/ad/2.png"></a></li>
							<li class="phpcn-col-md6"><a href=""><img src="/models/portal/static/images/ad/3.png"></a></li>
							<li class="phpcn-col-md6"><a href=""><img src="/models/portal/static/images/ad/4.png"></a></li>
						</ul>
						<div class="phpcn-mt-10">
							<a href=""><img src="/models/portal/static/images/ad/image.png" class="slogan"></a>
						</div>
						<div class="phpcn-mt-10" >
							<a href=""><img src="/models/portal/static/images/ad/ad2.jpg" class="slogan "></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--商城开始结束-->
	</div>
</div>

<!--友情链接 -->
<div class="phpcn-clear phpcn-mt-30">
		<div class="phpcn-main links">
			<div class="title-header phpcn-mb-40 phpcn-mt-20"><span>合作网站</span></div>
			<div>
				<a href="">php中文网</a>
				<a href="">百度中国</a>
				<a href="">phpstudy</a>
			</div>
		</div>
</div>
<!--友情链接结束-->
<!--网站底部-->
<div class="phpcn-clear phpcn-mt-30 footer">
	<div class="phpcn-main">
		<div class="phpcn-col-md8">
			<div class="link phpcn-mb-30">
                <a href="" target="_blank">简介</a>
                <a href="" target="_blank">联系我们</a>
                <a href="" target="_blank">友情链接</a>
                <a href="" target="_blank">招聘信息</a>
                <a href="" target="_blank">用户服务协议</a>
                <a href="" target="_blank">隐私权声明</a>
                <a href="" target="_blank">法律投诉声明</a>
			</div>
			<div class="phpcn-col-md2 f-logo">LOGO</div>
			<div class="phpcn-col-md10">
				<P>2019 fengniao.com. All rights reserved . 安徽闹着玩有限公司（无聊网）版权所有</P>
				<P><span>皖ICP证150110号 京ICP备14323013号-2</span> <span>皖公网安备110108024357788号</span></P>
				<P><span>违法和不良信息举报电话: 0551-1234567</span> <span>举报邮箱: admin@baidu.com</span></P>
			</div>
		</div>
		<div class="phpcn-col-md4">
			<h4>关注公众号</h4>
			<img src="/models/portal/static/images/erwei-code.png">
		</div>
	</div>
</div>
<!--网站底部-->

//引入轮播图js
<script src="/models/portal/static/js/pin.js"></script>
<script type="text/javascript">
	//轮播图
	var myPi = new Pike(".pi", {
		type: 1, // 轮播的类型(1渐隐)
		automatic: true, //是否自动轮播 (默认false)
		autoplay: 2000, //自动轮播毫秒 (默认3000)
		hover: true, //鼠标悬停轮播 (默认false)
		arrowColor: "yellow", //箭头颜色 (默认绿色)
		arrowBackgroundType: 2, //箭头背景类型 (1: 方形, 2:圆形)
		arrowBackground: 1, //箭头背景色 (1:白色,2:黑色, 默认:无颜色)
		arrowTransparent: 0.2, //箭头背景透明度 (默认: 0.5)
		spotColor: "white",//圆点颜色 (默认: 白色)
		spotType: 1, //圆点的形状 (默认: 圆形, 1:圆形, 2.矩形)
		spotSelectColor: "red", //圆点选中颜色 (默认绿色)
		spotTransparent: 0.8, //圆点透明度 (默认0.8)
		mousewheel: true, //是否开启鼠标滚动轮播(默认false)
		drag: false, //是否开启鼠标拖动 (默认为: true, 如不需要拖动设置false即可)
		loop: true, //是否循环轮播 (默认为: false)
	});


</script>
</body>
</html>