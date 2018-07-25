<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>图书借阅管理系统普通用户</title>
	<link rel="stylesheet" type="text/css" href="/library/Public/Home/style/userLeft.css">
	<link rel="stylesheet" type="text/css" href="/library/Public/Home/style/img.css">
	<link rel="stylesheet" type="text/css" href="/library/Public/Home/style/aside_style.css">
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


	<!-- IE兼容 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
    

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="/library/Public/Home/js/jquery-1.8.3.min.js"></script>	
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

        .content_img{
			height:450px;
			width:100%;
		}

		.content_img img{
			height: 450px;
			width:100%;
		}

		.content_img img:not(:first-child){display: none;}

	</style>
</head>
<body>
<!-- 导航栏部分 -->
<nav class="navbar navbar-default" style="background-color:#66a6cc;border: 0">
	<div class="container-fluid">
	    <div class="navbar-header">
	        <img  src="/library/Public/Common/library.png" style="line-height: 50px;width: 50px;padding:0;float: left;margin-right: 40px;margin-left: 30px "/>
	      	<p class="navbar-text">欢迎进入图书馆借阅管理系统</p>
	    </div>
	    <div class="navbar-right">
	    	<span >你好,<?php echo ($_SESSION["user_name"]); ?></span>
	    	<span id="date" style="line-height: 50px;margin-right: 50px;margin-left: 20px"></span>
	    </div>‘
	</div>
</nav>

<!-- 中间内容部分 -->
<div class="container" style="margin-bottom: 30px; ">
	<div class="content_img" id="img_change">
    	<img src="http://a3.att.hudong.com/18/23/01300000089105120689235601822.jpg" />
    	<img src="http://ww2.sinaimg.cn/large/c1a1f92djw1eabm8jtef9j20f0078t9x.jpg" />
    	<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1526299040348&di=7cb2dd8f2aa6300864e3c7367be72bc2&imgtype=0&src=http%3A%2F%2Fimgsrc.baidu.com%2Fimage%2Fc0%253Dpixel_huitu%252C0%252C0%252C294%252C40%2Fsign%3D5ba94fde9a2397ddc274904430fad7db%2Fe61190ef76c6a7eff08ade1ff6faaf51f3de665e.jpg" />
    </div>
	<div class="row" id="main" style="background-color: #e8e8e8;margin-top: 20px">
		<div class="col-sm-4">
			<aside class="accordion">
				<h1>个人信息</h1>
				<div class="opened-for-codepen">
					<p><a href="/library/index.php/Home/Modpwd/modpwd#main"><h2>个人密码修改</h2></a></p>
					<p><a href="/library/index.php/Home/Booksort/booksort#main"><h2>借阅记录查看</h2></a></p>
				</div>
				<h1>图书借阅</h1>
				<div class="opened-for-codepen">
					<p>
						<a href="/library/index.php/Home/Bookser/bookser#main">
							<h2>图书信息查询</h2>
						</a>
					</p>
				</div>
				<h1>用户建议</h1>
				<div class="opened-for-codepen">
					<p>
						<a href="/library/index.php/Home/SelfSuggestion/selfSuggestion
						#main">
							<h2>用户个人建议</h2>
						</a>
					</p>
					<p>
						<a href="/library/index.php/Home/UserSuggestion/userSuggestion
						#main">
							<h2>其他学生建议</h2>
						</a>
					</p>
				</div>
			</aside>						
		</div>
		<div class="col-sm-8">
			<div style="text-align: center">
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
</div>
<!-- 底部状态栏部分 -->
<div class="copyright" style="background-color:#66a6cc;border: 0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p>&copy安徽大学计算机科学与技术学院信息安全专业</p>
                <p>开发人员:傅玉屏 金忠祥 余静 郁雪梅</p>
            </div>
        </div>
    </div>
</div>
<script src="/library/Public/Home/js/aside_index.js"></script>

<script type="text/javascript">
	//显示当前日期
	var date=new Date();
	document.getElementById('date').innerHTML="当前日期是："+date.toLocaleDateString();
    //轮播图
	 var img=document.getElementById('img_change').getElementsByTagName("img");
	    var num=0;
	    var len=img.length;

	    setInterval(function(){
	        img[num].style.display="none";
	        num=++num==len?0:num;
	        img[num].style.display="inline-block";
	    },3000);//切换时间
</script>
</body>
</html>