<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>图书借阅管理系统管理员普通图书类别添加</title>
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
            position: relative;
            bottom: 0px;
            left: 0px;
            right: 0px;
            top: 0px;
        }

        .select li {
        	display:inline;
        }

        * {
			box-sizing: border-box;
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
       height: 500px;
       padding: 20px 10px 20px 10px;
      }
      .col-sm-2 a {
      	font-size: 15px;
      	color: #000;
      	
      }
      .col-sm-2 a:hover {
      	color: yellow;
      	
      	text-decoration: none;

      }
     .col-sm-10 table {
      	position: relative;
      	top: 40px;
      }
     .tb1 {
     	font-size: 18px;
      	border-collapse:  separate;  
       border-spacing: 15px; 
      }

	</style>
</head>
<body>
<!-- 导航栏部分 -->
<nav class="navbar navbar-default"  style="background-color:#ffffff;border: 0;margin-bottom: 0px;background-color: rgb(201,240,211);">
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
		<div class="col-sm-2">
			<ul>
				<li>
					<a href="" style="font-size: 20px; ">系统用户管理</a>
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
					<a href="" style="font-size: 20px; ">图书类别管理</a>
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
					<a href="" style="font-size: 20px; ">图书信息管理</a>
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
					<a href="" style="font-size: 20px; ">图书借阅管理</a>
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
		<div class="col-sm-10" style="font-weight: bold;margin-top: 30px">
			<form action="" method="post">
				 <h1 style="text-align: center;">图书类别查询</h1>
				<table class="tb1">
				<tr>
					<td>请选择查询标准</td>
					<td></td>
					<td></td>
					<td></td>
			    </tr>
				<tr>
					<td><input type="text" name="keywords" class="home_input_style" id="keywords" placeholder="请输入类名" /></td>
					<td></td>
					<td></td>
					<td></td>
				 </tr>
				<tr>
					<td width="150px">
						<label for="cate_id">类ID：</label>
	                    <input type="radio" name="cate" id="cate_id" size="35" class="home_input_style" onclick="changeInput()" value="类ID" />
					</td>
					<td width="150px">
						<label for="cate_name">类名：</label>
	                    <input type="radio" name="cate" id="cate_name" size="35" class="home_input_style" checked="checked" 
	                    onclick="changeInput()" value="类名" />
					</td>
					<td width="150px">
						<label for="cate_position">所属区域：</label>
	                    <input type="radio" name="cate" id="cate_position" size="35" class="home_input_style" onclick="changeInput()" value="类所属区域" />
					</td>
					<td width="200px" style="text-align: center">
						<input type="submit" value="查询" class="btn_input"/>
					</td>
				</tr>
			</table>
			</form>
			<br />
			<br />
			<h4>查询结果</h4>
			<table class="table table-bordered tb2">
				
            	<tr>
            		<th>类id</th>
            		<th>类名</th>
            		<th>类所属区域</th>
            	</tr>
            	<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            			<td><?php echo ($vo["cate_id"]); ?></td>
	            		<td><?php echo ($vo["cate_name"]); ?></td>
	            		<td><?php echo ($vo["cate_position"]); ?></td>
            		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
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
	function changeInput(){
		var cateid=document.getElementById("cate_id");
		var catename=document.getElementById("cate_name");
		var cateposition=document.getElementById("cate_position");
		var keywords=document.getElementById("keywords");

		if(cateid.checked){
			 keywords.placeholder="请输入要查询的类ID";
		}else if(catename.checked){
			keywords.placeholder="请输入要查询的类名";
		}else if(cateposition.checked){
			keywords.placeholder="请输入书类所属区域";
		}
	}
</script>
</body>
</html>