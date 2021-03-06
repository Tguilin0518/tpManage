<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap.min.css" />
   <script src="__PUBLIC__/js/jquery.js"></script>
   <script src="__PUBLIC__/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style.css"/>
    <link rel="stylesheet" href="__PUBLIC__/css/animsition.min.css">

    <script type="text/javascript">
        var pwdResetUrl = '<?php echo U("Deal/pwdReset",'','');?>';
        var pwdResetSuccessUrl = '<?php echo U("pwdResetSuccess",'','');?>';
    </script>
    <script src ="__PUBLIC__/js/pwdReset.js"></script>
    <title>青协会员密码重置</title>
</head>
<body>

<div class="bg">
   
    <img src="http://7xrv9y.com1.z0.glb.clouddn.com/findPwdBack.jpg" />
    
</div>
<div class="border_all" style="margin-top: 200px;">
    <div class="animsition3">
    <h1 style="font-weight: bold;text-align: center;color: #fff;font-family: Muli,'Helvetica Neue','Hiragino Sans GB','WenQuanYi Micro Hei','Microsoft Yahei',sans-serif !important;font-size: 50px;">欢迎</h1>
    </div>
    <br/><br/>
    
        <div class="login-content ">
                <div class="form" id="findPwd">
                <form id="pwdReset">
                    <div class="animsition">
                    <div class="form-group" style="max-width: 400px;margin: 0 auto;">
                        <div class="col-xs-12  ">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input type="password" id="pwd1" name="pwd1" class="form-control" placeholder="输入密码" required="required" style="min-height: 50px;">
                            </div>
                        </div>
                    </div>
                    <br/><br/><br/>
                    <div class="form-group" style="max-width: 400px;margin: 0 auto;">
                        <div class="col-xs-12  ">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input type="password" id="pwd2" name="pwd2" class="form-control" placeholder="确认密码" required="required" style="min-height: 50px;">
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="animsition2">
                    <div style="text-align: center;">
                    <div class="form-group form-actions">
                        <div class="col-xs-4 col-xs-offset-4 ">
                            <button  class="btn btn-large btn-info" id="sureReset" type="submit" style="margin-top: 50px;font-size: 20px;">确定</button>
                        </div>
                    </div>
                    </div>
                </div>
                </form>
                
            </div>
    
</div>
</div>

<div class="modal fade" id="mymodal">
    <div class="modal-dialog">
        <div class="modal-content" style="width:300px;margin:auto;margin-top: 200px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">修改提醒</h4>
            </div>
            <div class="modal-body">
                <p id="userChangeMessage"></p>
            </div>
            <div class="modal-footer" style="height:60px;">
                <button type="button" class="btn btn-primary" data-dismiss="modal" style="margin-top: 0px;">确定</button>
            </div>
        </div>
    </div>
</div>



<!-- <script src="__PUBLIC__/css/jquery.min.js"></script> -->
    <script src="__PUBLIC__/js/jquery.animsition.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
  
          $(".animsition").animsition({
          
            inClass               :   'fade-in-right',
            outClass              :   'fade-in-down-sm',
            inDuration            :    1500,
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
          $(".animsition2").animsition({
          
            inClass               :   'fade-in-left',
            outClass              :   'fade-in-down-sm',
            inDuration            :    1500,
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
          $(".animsition3").animsition({
          
            inClass               :   'fade-in-down',
            outClass              :   'fade-in-down-sm',
            inDuration            :    1500,
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