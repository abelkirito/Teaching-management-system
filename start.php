<?php
  session_start();
  //合法途径登录
  $_SESSION['ready'] = 'ok';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>login</title>
		<link href="css/login.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="./js/jquery-1.6.2.min.js"></script>
	</head>
	<body>
		<h1>基于PHP的高校数据中心管理系统</h1>
		<div class="login">
	  <form id="form1" name="form1" method="post" action="login.php">
				<table>
					<tr>
						<td>用户名：</td>
					</tr>
					<tr>
						<td class="width"><input type="text" name="username" id="username" /> </td>
					</tr>
					<tr>
						<td>密 码：</td>
					</tr>
					<tr>
						<td class="width"><input type="password" name="pwd" id="pwd" /> </td>
					</tr>
					<tr>
						<td class="center">
							<input type="radio" name="login" value="0"   />学生 
				
						    <input type="radio" name="login" value="2"  />老师 
						    <input type="radio" name="login" value="3"  />管理员 
						</td>
					</tr>
					<tr>
						<td class="center" id="wrap">
							<input id="sub" type="button" name="sub" value="确定"  style="width: 90px;background: #40454B;border: none;height: 30px;color: #FFFFFF;border-radius: 5px;" />
						    <input type="reset" name="res" value="取消" />
						</td>
					</tr>
				</table>
			</form>
		</div>
	</body>
	<script type="text/javascript">
         $("#sub").click(function(t) {
         	//用户输入合法性检查
         	var name = $("#username").val();
         	var pwd = $("#pwd").val();
            var login = $("input[name='login']:checked").val();
         	if(name ==""){
                alert('用户名输入不能为空!');
         	}else if(pwd == ""){
         		alert('密码输入不能为空!');
         	}else if(login !=0&&login !=2&&login !=3){
                alert('请选择登录身份!');
         	}else{
         		//输入合法，提交
                $("#form1").submit();
         	}
         });
	</script>
</html>
