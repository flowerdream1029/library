<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>图书借阅管理系统管理员</title>
	<link rel="stylesheet" type="text/css" href="/library/Public/Home/style/userLeft.css">
	<link rel="stylesheet" type="text/css" href="/library/Public/Home/style/img.css">
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

        .col-sm-2 {
      	position: relative;
      	top: 0px;
      	left: 100px;
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

      .col-sm-10  {
      	position: relative;
      	top: 40px;
        left: 100px;
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
<div class="container"  style="width:100%; background-image: url('/library/Public/Common/background.jpg');">
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
					<a href="" style="font-size: 20px;">借阅管理</a>
				</li>
				<ul>
					<li>
					    <a href="/library/index.php/Admin/Checkrecord/checkrecord">借阅记录查看</a>
					</li>
					<li>
					    <a href="/library/index.php/Admin/Serrecord/serrecord">借阅统计</a>
					</li>
				</ul>
			</ul>			
		</div>
		<div class="col-sm-10">
			    <h3>项目开发者</h3>
	<div class="row">
	    <div class="col-sm-3">
	    	<h4>郁雪梅</h4>
	    	<div class="box">
				<div class="he_slideAllDown">
					<img class="he_slideAllDown_img" src="http://ent.chinadaily.com.cn/img/site1/20161005/d8cb8a14fbeb195f2a933e.jpeg" alt="郁雪梅">
					<div class="he_slideAllDown_caption">
						<h3 class="he_slideAllDown_caption_h">姓名：郁雪梅</h3>
						<p class="he_slideAllDown_caption_p">爱好：看电视 看小说 幻想</p>
						<a class="he_slideAllDown_caption_a" href="#"></a>
					</div>
				</div>
			</div>
	    </div>
	    <div class="col-sm-3">
	    	<h4>傅玉屏</h4>
	    	<div class="box">
				<div class="he_slideAllDown">
					<img class="he_slideAllDown_img" src="http://n.sinaimg.cn/sinacn/w1024h1535/20180124/76df-fyqwiqk2976092.jpg" alt="傅玉屏">
					<div class="he_slideAllDown_caption">
						<h3 class="he_slideAllDown_caption_h">姓名：傅玉屏</h3>
						
						<p class="he_slideAllDown_caption_p">爱好：阅读 听音乐 吃</p>
						<a class="he_slideAllDown_caption_a" href="#"></a>
					</div>
				</div>
			</div>
	    </div>
	    <div class="col-sm-3">
	    	<h4>金忠祥</h4>
	    	<div class="box">
				<div class="he_slideAllDown">
					<img class="he_slideAllDown_img" src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1526291075148&di=43b54f68929229da35af87f0a9ad4170&imgtype=0&src=http%3A%2F%2Fmvimg11.meitudata.com%2F597178103d4715366.jpg" alt="金忠祥">
					<div class="he_slideAllDown_caption">
						<h3 class="he_slideAllDown_caption_h">姓名：金忠祥</h3>
						
						<p class="he_slideAllDown_caption_p">爱好：烹饪 跳舞（优秀） 唱歌 打羽毛球</p>
						<a class="he_slideAllDown_caption_a" href="#"></a>
					</div>
				</div>
			</div>
	    </div>
	    <div class="col-sm-3">
	    	<h4>余静</h4>
	    	<div class="box">
				<div class="he_slideAllDown">
					<img class="he_slideAllDown_img" src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1526290435126&di=6b56492da17c43707575bb247fb4b92f&imgtype=0&src=http%3A%2F%2Fupload.ct.youth.cn%2F2015%2F1204%2F1449209951411.jpeg" alt="余静">
					<div class="he_slideAllDown_caption">
						<h3 class="he_slideAllDown_caption_h">姓名：余静</h3>
						
						<p class="he_slideAllDown_caption_p">爱好：音乐 读书 运动</p>
						<a class="he_slideAllDown_caption_a" href="#"></a>
					</div>
				</div>
			</div>
	    </div>	
	</div>




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
	//显示当前日期
	var date=new Date();
	document.getElementById('date').innerHTML="当前日期是："+date.toLocaleDateString();
</script>
</body>
</html>