<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"D:\upupw\wf_cars\public/../application/manage\view\login\login.html";i:1494410062;}*/ ?>

<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="url" content="">
    <meta name="mobile-agent" content="format=html5;url=http://m.wofang.com/">

    <!-- Favicon -->
    <link rel="shortcut icon" href="_SHORTCUT_" type="image/x-icon">

    <!-- For site css -->

    <script type="text/javascript" src="__JS__/jquery.js"></script>
    <script type="text/javascript" src="_LAYUI_/layui.js"></script>

    <!-- load css -->
    <link rel="stylesheet" type="text/css" href="_LAYUI_/css/layui.css" media="all">
    <link rel="stylesheet" type="text/css" href="__CSS__/iconfont.css" media="all">

    <style type="text/css">
        .signwrapper {
            background-color: #1c77ac;
            background-image: url(/static/images/light.png);
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
        }
        .sign-overlay {
            background-color: #1c77ac;
            background-image: url(/static/images/loginbg.png);
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            opacity: 0.628;
        }
        /*云*/
        .signpanel {
            width:100%;
            height:100%;
            position:absolute;
            z-index:200;
        }
        .cloud {
            position:absolute;
            top:0px;
            left:0px;
            width:100%;
            height:100%;
            background:url(/static/images/cloud.png) no-repeat;
            z-index:201;
            opacity:0.5;
        }
        #cloud2 {z-index:202;}

        /*渐变*/
        /*.signpanel {*/
            /*background-image: -webkit-linear-gradient(left, transparent 0%, #1b1f27 100%);*/
            /*background-image: -o-linear-gradient(left, transparent 0%, #1b1f27 100%);*/
            /*background-image: linear-gradient(to right, transparent 0%, #1b1f27 100%);*/
            /*background-repeat: repeat-x;*/
            /*filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#ff1b1f27', GradientType=1);*/
            /*position: fixed;*/
            /*top: 0;*/
            /*right: 0;*/
            /*bottom: 0;*/
            /*left: 0;*/
            /*z-index: 200;*/
            /*opacity: .75;*/
        /*}*/
        .signin {
            width: 440px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            z-index: 300;
        }
        #WF_Login .separator,.login-title h2{
            font-size: 20px;
        }
        #WF_Login a{
            font-size: 20px;
            color: #000;
            position: relative;
            text-decoration: none;
        }
        #WF_Login a:hover{
            opacity: 0.628;
        }
        #WF_Login a:focus{
            outline:none;
        }
        #WF_Login a:before{
            content: "";
            position: absolute;
            width: 100%;
            height: 1px;
            bottom: 0;
            left: 0;
            background-color: #000;
            visibility: hidden;
            -webkit-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transition: all 0.3s ease-in-out 0s;
            transition: all 0.3s ease-in-out 0s;
            top: 1.2em;
            box-sizing: border-box;
        }
        #content-body{
            background: #5d5d5d;
            box-shadow: 0px 0px 3px  #fff;
        }
        #WF_Login .field{
            display: flex;
            width: 370px;
            height: 36px;
            padding: 28px !important;
            margin: auto;
        }
        #WF_Login .layui-form-item{
            position: relative;
            margin: auto;
        }
        #WF_Login .layui-form-item label{
            top: 25%;
            left: 10px;
            position: absolute;
            background: #f4f4f4;
        }
        #WF_Login .layui-form-item .field-success{
            top: 25%;
            right: 10px;
            position: absolute;
            background: #f4f4f4;
        }
        #WF_Login .login-text{
            width: 304px;
            height: 36px;
            margin: auto;
            padding: 3px 32px;
            border: 0px;
            vertical-align: middle;
            font-size: 18px;
            line-height: 20px;
            background: #f4f4f4;
        }
        #WF_Login .login-text:hover{
            border: 1px solid #555555;
        }
        #WF_Login #WF_Submit_1{
            width: 304px;
            height: 36px;
            padding: 3px 15px;
            font-size: 20px;
            text-align: center;
            background: #f4f4f4;
        }
        #WF_Login #WF_Submit_1:hover{
            opacity: 0.628;
        }
        #WF_Login .links-field{
            padding-top: 5px !important;
        }
        #content-body{
            background: rgba(0,0,0,0.375);
        }
        #WF_Login .login-text,#WF_Login #WF_Submit_1{
            background: rgba(255,255,255,0.9);
        }
    </style>

    <title>登录</title>

</head>
<body class="signwrapper">

<div class="sign-overlay"></div>
<div class="signpanel">
    <div id="cloud1" class="cloud" style="background-position: 700px 100px;"></div>
    <div id="cloud2" class="cloud" style="background-position: 250px 460px;"></div>
</div>

<div class="wrap signin">

    <div class="container"  id="container">

        <div class="layui-layout layui-layout-back" id="layui_layout">

            <section id="content-container" style="display:flex; position:fixed;top: 0px;left: 0px;right: 0px;bottom: 0px;">
                <div id="content-body" class="signin" style="margin:auto;width: 440px;min-height: 370px;">

                    <!--login box begin-->
                    <div class="login-title">
                        <h2 style="text-align:center; color: #000; margin-bottom: 0;padding-top: 15px;"> 密码登录 </h2>
                    </div>

                    <form id="WF_Login" action="/manage/login/login.html" method="post">

                        <?php echo token(); ?>

                        <div id="WF_Message" style="display:none;" class="login-msg error">
                            <i class="iconfont"></i>
                            <p class="error"></p>
                        </div>

                        <div class="field username-field">
                            <div class="layui-form-item">
                                <label for="WF_username_1"> <i class="fa fa-user" title="会员名称"></i></label>
                                <span id="WF_StandardUsername">
                                    <input type="text"  name="WF_username"id="WF_username_1" datatype="*" lay-ajax="true" autocomplete="off" class="login-text WF_Username" value="" maxlength="32" tabindex="1" placeholder="会员名称 | 邮箱 | 手机号" aria-label="会员名称 | 邮箱 | 手机号">
                                </span>
                                <span class="field-success" style="display: none;">
                                    <i class="fa fa-check-square"></i>
                                 </span>
                            </div>
                        </div>

                        <div class="field password-field">
                            <div class="layui-form-item">
                                <label id="password-label" for="WF_password_1"><i class="fa fa-key" title="登录密码"></i></label>
                                <span id="WF_StandardPassword">
                                    <input type="password" name="WF_password" id="WF_password_1"  datatype="*"  autocomplete="off" class="login-text" maxlength="40" tabindex="2" placeholder="登录密码" aria-label="登录密码">
                                </span>
                                <span class="field-success" style="display: none;">
                                    <i class="fa fa-check-square"></i>
                                </span>
                            </div>
                        </div>

                        <!--<div class="field password-field">-->
                        <!--<div class="layui-form-item">-->
                        <!--<label id="verify-label" for="WF_password_1"><i class="fa fa-key" title="验证码"></i></label>-->
                        <!--<span id="WF_verify">-->
                        <!--<input type="text" name="WF_password" id="WF_verify_1" class="login-text" maxlength="4" tabindex="2" autocomplete="off" placeholder="验证码" aria-label="验证码">-->
                        <!--<div><img src="" alt="captcha" /></div>-->
                        <!--</span>-->
                        <!--<span class="field-success" style="display: none;">-->
                        <!--<i class="fa fa-success"></i>-->
                        <!--</span>-->
                        <!--</div>-->
                        <!--</div>-->

                        <div class="field submit-field">
                            <div class="layui-form-item">
                        <span id="WF_StandardSubmit">
                            <input type="submit" value="确定" id="WF_Submit_1" class="login-text" placeholder="确定" lay-filter="submit" />
                        </span>
                            </div>
                        </div>

                        <div class="field links-field" style="display: none;">
                            <div class="layui-form-item">
                        <span id="WF_StandardLinks">
                            <a href="/manage/user/reset.html?from_site=0&amp;lang=zh_CN&amp;login_id=1"tabindex="6" class="forget-pwd" target="_blank"> 忘记密码</a>
                            <span class="separator" style="color:#000;"> | </span>
                            <a href="/manage/user/register.html?from=login" class="register" target="_blank" tabindex="7">免费注册</a>
                        </span>
                            </div>
                        </div>

                        <ul class="entries" style="display: none;">
                            <li id="WF_OtherLogin" class="other-login">
                                <a href="#" tabindex="4" class="weibo-login"><i class="fa fa-wechat"></i>微信登录</a>
                                <a href="#" tabindex="5" class="qq-login"><i class="fa fa-qq"></i> QQ登录</a>
                            </li>
                        </ul>

                    </form>

                </div>
            </section>

        </div>
    </div>

</div>

<!--&lt;!&ndash; 加载js文件&ndash;&gt;-->
<!--<script type="text/javascript" src="__JS__/validator.js"></script>-->
<!--<script>-->
    <!--window.onload = function () {-->
        <!--$('.fa').html('');-->
    <!--};-->

    <!--$(function () {-->
        <!--layui.config({-->
            <!--base: '/static/js/',-->
        <!--}).use(['layer','validator'], function() {-->
            <!--var form = layui.validator(),-->
                <!--layer = layui.layer;-->

            <!--//自定义验证规则-->
            <!--form.verify({-->
                <!--title: function (value, item) {-->
                    <!--if (value.length < 5) {-->
                        <!--return '标题至少得5个字符啊';-->
                    <!--}-->
                <!--},-->
                <!--username: [/(.+){6,12}$/, '用户必须6到12位'],-->
                <!--pass: [/(.+){6,12}$/, '密码必须6到12位'],-->
                <!--password: [/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,10}$/, '密码格式错误'],-->
                <!--layAjax: function (value, item) {-->
                    <!--var message = true;-->
                    <!--console.log(item.name);-->
                    <!--$.ajax({-->
                        <!--url: "/manage/user/index",-->
                        <!--type: 'POST',-->
                        <!--async: false,-->
                        <!--data: {uaername: value},-->
                        <!--success: function (data) {-->
                            <!--if (data == '1') {-->
                                <!--message = "登陆名已存在";-->
                            <!--}-->
                        <!--}-->
                    <!--});-->
                    <!--return message;-->
                <!--}-->
            <!--});-->

            <!--form.set({ELEM:'#WF_Login'});-->

            <!--//初始化-->
            <!--form.init();-->

            <!--//监听提交-->
            <!--form.on('submit(submit)', function (data) {-->
                <!--layer.alert(JSON.stringify(data.field), {-->
                    <!--title: '最终的提交信息'-->
                <!--});-->
                <!--return false;-->
            <!--});-->
        <!--});-->
    <!--})-->

<!--</script>-->

<script type="text/javascript" src="__JS__/Validform_v5.3.2.js"></script>
<script>
    window.onload = function () {
        $('.fa').html('');
    };
    var _width = document.documentElement.clientWidth;//获取页面可见宽度
    var offsetX1 = 700;
    var offsetX2 = 250;

    /// 飘动
    var Interval = setInterval(function() {
        if (offsetX1 >= _width) {
            offsetX1 =  -580;
        }

        if (offsetX2 >= _width) {
            offsetX2 =  -580;
        }

        offsetX1 += 1.1;
        offsetX2 += 1;
        $('.signpanel #cloud1').css("background-position", offsetX1 + "px 100px");
        $('.signpanel #cloud2').css("background-position", offsetX2 + "px 460px");
    }, 70);
    var alertMsg = function (msg,obj,tip) {
        var config = {icon: 5,shift: 6};
        if (obj.type !== 3){
            config.icon = 6;
        }
        layui.use(['layer'],function () {
            layer.msg(msg,config);
        });
    };

    $(function(){

        var form = $("#WF_Login").Validform({
            tiptype:alertMsg,
            showAllError:false,
            tipSweep:true,
            postonce:true,
            datatype:{
                "s1-20":/^[\w]{1,20}$/,
                "s6-20":/^[\w]{6,20}$/,
                "username":function(gets,obj,curform,regxp){
                    //参数gets是获取到的表单元素值，obj为当前表单元素，curform为当前验证的表单，regxp为内置的一些正则表达式的引用;
                    var reg1=/^[\w\.\_]{4,20}$/;

                    if(reg1.test(gets)){return true;}
                    return '用户名格式不合法';

                    //注意return可以返回true 或 false 或 字符串文字，true表示验证通过，返回字符串表示验证失败，字符串作为错误提示显示，返回false则用errmsg或默认的错误提示;
                },
                "password":function(gets,obj,curform,regxp){
                    //参数gets是获取到的表单元素值，obj为当前表单元素，curform为当前验证的表单，regxp为内置的一些正则表达式的引用;
                    var reg1=/^[\w\.\_]{6,20}$/;

                    if(reg1.test(gets)){return true;}
                    return '密码格式不合法';

                    //注意return可以返回true 或 false 或 字符串文字，true表示验证通过，返回字符串表示验证失败，字符串作为错误提示显示，返回false则用errmsg或默认的错误提示;
                },
            },
            ajaxPost:false,
            beforeCheck:function(curform){
                //在表单提交执行验证之前执行的函数，curform参数是当前表单对象。
                //这里明确return false的话将不会继续执行验证操作;
            },
            beforeSubmit:function(curform){
                //在验证成功后，表单提交前执行的函数，curform参数是当前表单对象。
                //这里明确return false的话表单将不会提交;
//                alert('正在提交中...');
//                return false;
            },
            callback:function(data){
                //返回数据data是json格式，{"info":"demo info","status":"y"}
                //info: 输出提示信息;
                //status: 返回提交数据的状态,是否提交成功。如可以用"y"表示提交成功，"n"表示提交失败，在ajax_post.php文件返回数据里自定字符，主要用在callback函数里根据该值执行相应的回调操作;
                //你也可以在ajax_post.php文件返回更多信息在这里获取，进行相应操作；
                //ajax遇到服务端错误时也会执行回调，这时的data是{ status:**, statusText:**, readyState:**, responseText:** }；

                //这里执行回调操作;
                //注意：如果不是ajax方式提交表单，传入callback，这时data参数是当前表单对象，回调函数会在表单验证全部通过后执行，然后判断是否提交表单，如果callback里明确return false，则表单不会提交，如果return true或没有return，则会提交表单。
            }
        });

        //通过$.Tipmsg扩展默认提示信息;
        form.tipmsg.w["s1-20"]="请输入1到20个字符";
        form.tipmsg.w["s6-20"]="请输入6到20个字符";

        form.addRule([
            {
                ele:"#WF_username_1",
                datatype:"username",
            },
            {
                ele:"#WF_password_1",
                datatype:"password",
            }
        ]);
    })


</script>

</body>
</html>