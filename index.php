<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
		<title>login</title>
		<link href="css/login.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<h1>基于PHP的高校数据中心管理系统</h1>
		<div class="login">
	  <form name="form1" method="post" action="login.php">
				<table>
					<tr>
						<td>用户名：</td>
					</tr>
					<tr>
						<td class="width"><input type="text" name="username" /> </td>
					</tr>
					<tr>
						<td>密 码：</td>
					</tr>
					<tr>
						<td class="width"><input type="password" name="pwd" /> </td>
					</tr>
					<tr>
						<td class="center">
							 
							<input type="radio" name="login" value="2" />老师 
				
						    <input type="radio" name="login" value="1" />管理员 
						</td>
					</tr>
					<tr>
						<td class="center">
							<input type="submit" name="sub" value="确定" />
						    <input type="reset" name="res" value="取消" />
						</td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>
