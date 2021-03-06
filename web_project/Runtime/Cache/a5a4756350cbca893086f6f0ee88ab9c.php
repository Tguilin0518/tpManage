<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="__PUBLIC__/css/bootstrap.min.css">
    <script src="__PUBLIC__/js/jquery.js"></script>
    <script src="__PUBLIC__/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style.css"/>
	<link rel="stylesheet" href="__PUBLIC__/css/animsition.min.css">
    
    <script type="text/javascript">
        var registUrl = '<?php echo U("Deal/userRegist",'','');?>';
    </script>

	<script  src="__PUBLIC__/js/regist.js"></script>
	
    <title>青协注册</title>
  </head>
<body>

<div class="bg">
  
    <img src="__PUBLIC__/image/qx5_1.jpg" />
</div>
<div class="animsition">
<div class = "bigRegist_container">
	<div class = "registMsg">

	<h1><div class="registFont">Welcome to<br/>
		加入我们</div></h1>
	<h3><div class="registFont">青&nbsp;协&nbsp;是一个充满&nbsp;阳光&nbsp;和&nbsp;快乐&nbsp;的大家庭，在这里，你可以畅所欲言,也许某个活动就有你的创意的影子，
	期待你的加入</div></h3>
	</div>

	<div class = "regist_form">
	<form id="registForm">
	<input class = "regist_input" type = "text" placeholder = "取一个喜欢的称号" name ="username" required = "required">
	
	<input class = "regist_input" type = "text" placeholder = "一个你常用的邮箱" name="mail" required = "required" pattern="^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$">
	<input class = "regist_input" type = "password" placeholder = "一个好用的密码"  name="password" required = "required">
	<button class="btnRegist btn-theme-green btn-jumbotron btn-regist-block" id="regist" type="submit">注&nbsp;&nbsp;册</button>
	</form>
	</div>
</div>
</div>

<div class="modal fade" id="mymodal">
    <div class="modal-dialog">
        <div class="modal-content" style="width:300px;margin:auto;margin-top: 200px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">注册提醒</h4>
            </div>
            <div class="modal-body">
                <p id="registMessage"></p>
            </div>
            <div class="modal-footer" style="height:60px;">
                <button type="button" class="btn btn-primary" data-dismiss="modal" style="margin-top: 0px;">确定</button>
            </div>
        </div>
    </div>
</div>

<!-- <script src="__PUBLIC__/js/jquery.min.js"></script> 添加这个会导致模态框方法不能使用-->
<script src="__PUBLIC__/js/jquery.animsition.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {

		$(".animsition").animsition({

			inClass               :   'zoom-in',
			outClass              :   'fade-out-down-lg',
			inDuration            :    3500,
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