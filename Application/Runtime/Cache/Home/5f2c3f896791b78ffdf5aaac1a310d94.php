<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>途途快递信息管理系统登录页面</title>
    <link rel="stylesheet" type="text/css" href="/library/Public/Home/style/login.css">
</head>
<body>
    <div class="home_login">
        <h1>途途快递信息管理系统</h1>
        <div class="home_information">
            <form action="" method="post">
                <ul class="home_list">
                    <li>
                        <label for="user">用户名：</label>
                        <input type="text" name="user_name" placeholder="用户名" id="user" size="35" class="home_input_style" />
                    </li>
                    <li>
                        <label for="pwd">密&nbsp;&nbsp;&nbsp;码：</label>
                        <input type="password" name="user_password"  placeholder="密码" id="pwd" size="35" class="home_input_style" />
                    </li>
                    <li>
                        <label for="identity">角&nbsp;&nbsp;&nbsp;色：</label>
                        <select id="identity" name="user_identity">
                            <option value="普通用户">快递员</option>
                            <option value="管理员">管理员</option>
                        </select>
                    </li>
                    <li>
                        <label for="pwd">验证码：</label>
                        <input type="text" name="code" placeholder="验证码" id="pwd" size="35" class="home_input_style" />
                        <img src="/library/Public/Home/img/image.php" id="refresh" onclick="document.getElementById('refresh').src='/library/Public/Home/img/image.php'" style="cursor: pointer;height:20px" />
                    </li>
                    <li>
                        <input type="submit" value="登陆" class="btn_input" />
                        <input type="submit" value="重置" class="btn_input" />
                    </li>
                </ul>
            </form>
        </div>
    </div>
</body>
</html>