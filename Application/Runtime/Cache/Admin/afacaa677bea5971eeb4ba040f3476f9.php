<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>图书借阅管理系统管理员普通图书类别添加</title>
	<link rel="stylesheet" type="text/css" href="/library/Public/Home/style/userLeft.css">
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
            padding-top: 28px;
            padding-bottom: 28px;
            border-top: 1px solid #d7e0d9;
        }

        .select li {
        	display:inline;
        }
	</style>
</head>
<body>
<!-- 导航栏部分 -->
<nav class="navbar navbar-default">
	<p class="navbar-text">欢迎进入图书馆借阅管理系统</p>
</nav>
<!-- 中间内容部分 -->
<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<ul>
				<li>
					<a href="">系统用户管理</a>
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
					<a href="">图书类别管理</a>
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
					<a href="">图书信息管理</a>
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
					<a href="">借阅管理</a>
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
		<div class="col-sm-8">
			<form action="" method="post">
				<h4>请选择查询标准：</h4>
				<input type="text" name="keywords" class="home_input_style" id="keywords" placeholder="请输入查询的学号" />
				<ul class="select">
					<li>
						<label for="id">学号：</label>
	                    <input type="radio" name="book" id="id" size="50" class="home_input_style" onclick="changeInput()" value="学号" checked="checked" />
					</li>
					<li>
						<label for="name">姓名：</label>
	                    <input type="radio" name="book" id="name" size="50" class="home_input_style" 
	                    onclick="changeInput()" value="姓名" />
					</li>
					<li>
						<input type="submit" value="查询" class="btn_input"/>
					</li>
				</ul>
				<input type="hidden" name="TOKEN"  value="<?php echo session('TOKEN');?>" />
			</form>
			<hr>
			<h4>查询结果：</h4>
			<table class="table table-bordered"> 
            	<tr>
            		<th>用户id</th>
            		<th>姓名</th>
            		<th>书名</th>
            		<th>预借天数</th>
            		<th>借书日期</th>
            		<th>还书日期</th>
            		<th>还书状态</th>
            		<th>还书</th>
            	</tr>
            	<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            			<td name="id"><?php echo ($vo["id"]); ?></td>
	            		<td><?php echo ($vo["name"]); ?></td>
	            		<td name="bookname"><?php echo ($vo["bookname"]); ?></td>
	            		<td><?php echo ($vo["yujiedays"]); ?></td>
	            		<td><?php echo ($vo["jieyuedate"]); ?></td>
	            		<td><?php echo ($vo["huanshudate"]); ?></td>
	            		<td name="state"><?php echo ($vo["state"]); ?></td>
	            		<td><a href="/library/index.php/Admin/Checkrecord/returnBook/id/<?php echo ($vo["id"]); ?>/bookname/<?php echo ($vo["bookname"]); ?>" name="Return">还书</a></td>
            		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
		</div>
	</div>
</div>
<!-- 底部状态栏部分 -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                &copy安徽大学计算机科学与技术学院信息安全专业
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
	function changeInput(){
		var id=document.getElementById("id");
		var name=document.getElementById("name");
		var keywords=document.getElementById("keywords");

		if(name.checked){
			keywords.placeholder="请输入要查询的学生姓名";
		}else if(id.checked){
			keywords.placeholder="请输入要查询的学生学号";
		}
    }

    var state=document.getElementsByName('state');
    var Return=document.getElementsByName('Return');
    for(var i=0;i<state.length;i++){
    	if(state[i].innerHTML=="已还"){
    	Return[i].href="#";
    	Return[i].style.color="gray";
    	Return[i].style.textDecoration="line-through";
       }
    }
</script>
</body>
</html>