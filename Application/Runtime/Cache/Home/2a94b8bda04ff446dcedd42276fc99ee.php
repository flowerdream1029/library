<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>图书馆借阅管理系统登录</title>
<meta name="author" content="DeathGhost">
<link rel="stylesheet" type="text/css" href="/library/Public/Home/style/style.css"">
<style>
body{height:100%;background:#16a085;overflow:hidden;}
canvas{z-index:-1;position:absolute;}
</style>
<script src="/library/Public/Home/js/jquery.js"></script>
<script src="/library/Public/Home/js/verificationNumbers.js"></script>
<script src="/library/Public/Home/js/Particleground.js"></script>
<script>
$(document).ready(function() {
  //粒子背景特效
  $('body').particleground({
    dotColor: '#5cbdaa',
    lineColor: '#5cbdaa'
  });
  //验证码
  createCode();
});

</script>
</head>
<body>
    <form action="" method="post">
    	<dl class="admin_login">
    		<dt>
    		    <strong>图书馆借阅管理系统</strong>
    		    <em>Management System</em>
    		</dt>
    		<dd class="user_icon">
    		    <input type="text" placeholder="账号" class="login_txtbx" name="user_name">
    		</dd>
    		<dd class="pwd_icon">
    		    <input type="password" placeholder="密码" class="login_txtbx" name="user_password">
    		</dd>
    		<dd class="idy_icon">
    		    <select class="login_txtbxx" name="user_identity">
                    <option value="普通用户">普通用户</option>
                    <option value="管理员">管理员</option>
                </select>
    		</dd>
    		<dd class="val_icon">
    		    <div class="checkcode">
    			    <input type="text" id="J_codetext" placeholder="验证码" maxlength="4" class="login_txtbx" name="code">
    			    <canvas class="J_codeimg" id="myCanvas" onclick="createCode()">对不起，您的浏览器不支持canvas，请下载最新版浏览器!</canvas>
    			 </div>
    		    <input type="button" value="验证码校验" class="ver_btn" onclick="validate()">
    		</dd>
    		<dd>
    		    <input type="submit" value="立即登陆" class="submit_btn">
    		</dd>
    		<dd>
    		    <p>适用浏览器：360、FireFox、Chrome、Safari、Opera、傲游、搜狗、世界之窗. 不支持IE8及以下浏览器。</p>
    		</dd>
    	</dl>
    </form>
</body>
</html>