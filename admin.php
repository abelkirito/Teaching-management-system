<?php
  session_start();
  $_SESSION['ready'] = '';
  if(!isset($_SESSION['status'])){
      echo "<script>alert('请通过合法途径登录!');window.location.href='start.php';</script>";
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>teacher</title>
		<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
		<script type="text/javascript" src="js/index.js"></script>
		<link href="css/index.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id="top">
			<h2>基于PHP的高校数据中心管理系统</h2>
			<div class="t_right">
					<span> 权限：<?php  echo $_SESSION['cx'];?>  </span>
				<span><a href="logout.php" target="_parent">退出</a></span>
				
			</div>
		</div>
		<div id="left">
			<ul>
				<li class="leftmenu"><a href="#">学生信息</a>
					<ul>
						<li><a href=yonghuzhuce_list.php target=link>学生管理</a></li>
						
						<li><a href=yonghuzhuce_add.php target=link>学生添加</a></li>
					</ul>
				</li>
				 
			 	<li class="leftmenu"><a href="#">老师信息</a>
					<ul>
						<li><a href=yonghuzhuce_list2.php target=link>老师管理</a></li>
						
						<li><a href=yonghuzhuce_add.php target=link>老师添加</a></li>
					</ul>
				</li>
				 
			 
				 
				<li class="leftmenu"><a href="#">课程管理</a>
					<ul>
						<li><a href="kechengxinxi_add.php" target="link">课程添加</a></li>
						<li><a href="kechengxinxi_list.php" target="link">课程管理</a></li>
					</ul>
				</li>
				 
				
				
					<li class="leftmenu"><a href="#">数据维护</a>
					<ul>
						<li><a href="beifen.php" target="link">数据备份</a></li>
						 
						
					</ul>
				</li>
			</ul>
		</div>
		<div id="right">
			<iframe name="link" width="100%" height="500px" frameborder="0" src="main.html"></iframe>
		</div>
		<div id="footer">
			<span class="left">基于PHP的高校数据中心管理系统的设计与实现</span>
			<span class="right">版权所有&nbsp;   &nbsp;&nbsp; </span>
		</div>
	</body>
</html>
