<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>借阅操作</title>
	<!-- IE兼容 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	
	<style type="text/css">
		.copyright {
            background: #eaf2f1;
            font-size: 13px;
            text-align: center;
            color: #555555;
            padding-top: 21px;
            padding-bottom: 15px;
            border-top: 1px solid #d7e0d9;
        }

        * {
			margin: 0 auto;
			padding: 0;
			box-sizing: border-box;
		}

		ul li {
			list-style: none;
			margin-bottom: 10px;
		}		

		.btn_input {
			float:left;
			width: 80px;
			height: 30px;
        	margin-left: 350px;
        	margin-top: 60px;
        	background-color: rgb(59,171,193);
			border-radius: 20px 20px 20px 20px;
        
		}
		.btn_input1 {
			width: 80px;
			height: 30px;
			margin-left: 100px;
			margin-top: 60px;
			background-color: rgb(59,171,193);
			border-radius: 20px 20px 20px 20px;
		}

        li {
		    padding: 5px 0 5px 20px;
		    list-style: none;
		    text-shadow: 0 1px 0 #ffffff;
		}

		ul {
			padding-left: 15px; 
		}

		 a:hover {color:red;} 
		 a:visited {color:green;} 
		 a:link {color:black;} 
		 a {color:white;}
		     .col-sm-2 {
      	position: relative;
      	top: 0px;
      	left: 0px;
      	background-image: url('/library/Public/Common/background.jpg');
      	border: 3px solid white;
      	border-radius: 20px 20px 20px 20px;
      	 font-family: 黑体;
       font-weight: bold;
      }
      .col-sm-2 a {
      	font-size: 15px;
      	color: #000;
      	font-family: SimHei ;
      }
      
	</style>
</head>
<body>
<!-- 导航栏部分 -->
<nav class="navbar navbar-default" style="background-color:#ffffff;border: 0;margin-bottom: 0px;background-color: rgb(201,240,211);">
	<div class="container-fluid">
	    <div class="navbar-header">
	    
	      	<p class="navbar-text" style="font-size: 30px; ">欢迎进入图书馆借阅管理系统</p>
	    </div>
	    <div class="navbar-right">
	    	<span id="date" style="line-height: 50px;margin-right: 50px"></span>
	    </div>
	</div>
</nav>
<!-- 中间内容部分 -->
<div class="container" style="width:100%; background-image: url('/library/Public/Common/background.jpg');">
	<div class="row">
		<div class="col-sm-2" style="position: relative;left: 100px;">
			<ul>
				<li>
					<a href="" style="font-size: 20px;">系统用户管理</a>
				</li>
				<ul>
					<li>
						<a href="/library/index.php/Admin/Adduser/adduser">普通用户添加</a>
					</li>
					<li>
						<a href="/library/index.php/Admin/Modpwd/modpwd">修改个人密码</a>
					</li>
				</ul>
				<li>
					<a href="" style="font-size: 20px;">图书类别管理</a>
				</li>
				<ul>
					<li>
					    <a href="/library/index.php/Admin/Addbooksort/addbooksort">图书类别添加</a>
					</li>
					<li>
					    <a href="/library/index.php/Admin/Serbooksort/serbooksort">图书类别查询</a>
					</li>
				</ul>
				<li>
					<a href="" style="font-size: 20px;">图书信息管理</a>
				</li>
				<ul>
					<li>
					    <a href="/library/index.php/Admin/Addbook/addbook">图书信息添加</a>
					</li>
					<li>
					    <a href="/library/index.php/Admin/Serbook/serbook">图书信息查询</a>
					</li>
				</ul>
				<li>
					<a href="" style="font-size: 20px;">图书借阅管理</a>
				</li>
				<ul>
					<li>
					    <a href="/library/index.php/Admin/Checkrecord/checkrecord">借阅记录查看</a>
					</li>
					<li>
					    <a href="/library/index.php/Admin/Serrecord/serrecord">图书借阅统计</a>
					</li>
				</ul>
			</ul>			
		</div>
		<div class="col-sm-10">
			<form action="" method="post">
				<h3 style="text-align: center;">借阅统计</h3>
				<table>
					<tr>
						<td><label for="id">ID：</label></td>
	                    <td><input type="text" name="id"  placeholder="请输入要借阅人的ID" id="id" size="35" class="home_input_style" /></td>
	                    
					</tr>
					<tr>
						<td><label for="user_name">姓名：</label></td>
	                    <td><input type="text" name="user_name"  placeholder="请输入要借阅人的姓名" id="username" size="35" class="home_input_style" /></td>
					</tr>
					<tr>
						<td><label for="name">书名：</label></td>
	                    <td><input type="text" name="name"  placeholder="请输入要借阅的书名" id="name" size="35" class="home_input_style" /></td>
					</tr>
					<tr>
						<td><label for="yujiedays">预借天数：</label></td>
	                    <td><input type="text" name="yujiedays" placeholder="请输入预借的天数" id="yujiedays" size="35" class="home_input_style" /></td>
					</tr>
					<tr>
						<td><label for="jieyuedate">借书日期：</label></td>
	                    <td><input type="text" name="jieyuedate"  id="jieyuedate" size="35" class="home_input_style" /></td>
					</tr>					
					
					<tr>
						<td><label for="state">还书状态：</label></td>
	                    <td><input type="text" name="state"  id="state" size="35" class="home_input_style" value="未还" /></td>
					</tr>
					</table>
						<input type="submit" value="借书" class="btn_input"/>
					    <input type="reset" value="重置" class="btn_input1"/>
						
				
			</form>
		</div>
	</div>
</div>
<!-- 底部状态栏部分 -->
<div class="copyright" style="background-color:#ffffff;border: 0;background-color: rgb(104,203,224);">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
               <p>&copy安徽大学计算机科学与技术学院信息安全专业</p>
                <p>开发人员:傅玉屏 金忠祥 余静 郁雪梅</p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
	var jieyuedate=document.getElementById('jieyuedate');
	var huanshudate=document.getElementById('huanshudate');
	jieyuedate.value=(new Date()).toLocaleDateString()+" "+(new Date()).toLocaleTimeString();
</script>
</body>
</html>