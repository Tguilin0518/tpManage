<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/advice.css">
	<link rel="stylesheet" href="__PUBLIC__/css/animsition.min.css">

	<title>天使行动</title>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="menu-nav">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <span class="navbar-brand">青协会员</span>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="__URL__/indexPage" target="_top">首页</a></li>
                <li><a href="__URL__/aboutPage">关于我们</a></li>
                <li class="active"><a href="javascript:void(0)">留言建议</a></li>
                <li><a href="__URL__/userActivity">活动报名</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          Hi&nbsp;欢迎你 <span class="caret"></span>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($_COOKIE['username']); ?>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#" style="font-weight: bold;">艾斯</a></li>
            <li><a href="#"><img src="__PUBLIC__/image/aisi.jpg"></a></li>
            <li role="separator" class="divider"></li>
           <li><a href="__URL__/userInfo">我的信息</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="__URL__/index">退出</a></li>
          </ul>
        </li>
      </ul>
        </div>
    </div>
</div>
<div class="animsition">
<div class="adMessage">
	<h1>天使行动</h1>
	<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;天使行动是青协定期举办的活动，回收旧衣物、敬老院服务
	等等，青协的每个人都在为服务帮助大家用心地努力着，此专题区主要是让大家发表对天使行动的意见，欢迎大家各抒己见，对于更多
    爱心家教的了解，请点击这里</h3>
	<h2>And Speak your voice</h2>
</div>


<!-- 多说评论框 start -->
<div class="border_all">
	<div class="ds-thread" data-thread-key="1" data-title="1" data-url="请替换成文章的网址">

	</div>
</div>
<!-- 多说评论框 end -->
</div>
<!-- 右边分类 start-->
	<div class="rightAssort">
		<h2>专题区</h2>
		<hr/>
		<a href="javascript:void(0)">天使行动</a><br/>
		<a href="__URL__/loveTeachAdvice">爱心家教</a><br/>
		<a href="__URL__/nationalVolunteerAdvice">国际志愿者日</a><br/>
		<br/><br/>
		<h2>调查问卷</h2>
		<hr/>
		<a href="#">活动征集</a><br/>
	</div>
<!-- 右边分类 end -->

<script src="__PUBLIC__/js/jquery.min.js"></script>
<script src="__PUBLIC__/js/jquery.animsition.min.js"></script>

<script src="__PUBLIC__/js/bootstrap.min.js"></script>
<script type="text/javascript">

<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
var duoshuoQuery = {short_name:"angleadvice"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
<!-- 多说公共JS代码 end -->


 $(document).ready(function() {
  
          $(".animsition").animsition({
          
            inClass               :   'fade-in-up-sm',
            outClass              :   'fade-out-down-lg',
            inDuration            :    2000,
            outDuration           :    800,
            linkElement           :   '.animsition-link',
            // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
            loading               :    true,
            loadingParentElement  :   'body', //animsition wrapper element
            loadingClass          :   'animsition-loading',
            unSupportCss          : [ 'animation-duration',
                                      '-webkit-animation-duration',
                                      '-o-animation-duration'
                                    ],
            overlay               :   false,
            overlayClass          :   'animsition-overlay-slide',
            overlayParentElement  :   'body'
          });
        });
</script>

</body>
</html>