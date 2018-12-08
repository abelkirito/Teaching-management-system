 <?php
//验证登陆信息
session_start();
include_once 'ConnectDb.php';
if($_SESSION['ready']){
	//if($_POST['submit']){
	@$login = $_POST["login"];
	$username = $_POST['username'];
	$pwd = $_POST['pwd'];
	//$userpass=md5($userpass);
	//创建pdo连接类
	$conn = new ConnectDb();
	if($login == "2")
	{   
		if ($username!="" && $pwd!="")
		{
		$sql = "select * from yonghuzhuce where zhanghao='$username' and mima='$pwd' and quanxian='老师'";	
		$result = $conn->Connect($sql);
        $res = $result->fetch(PDO::FETCH_ASSOC);	
			if($res['zhanghao'])
			{
					$_SESSION['username'] = $username;
					$_SESSION['cx'] = "老师";
					//$row = mysql_fetch_row($query)
					//echo $_SESSION['cx'];
					//注销session
					$_SESSION['status'] = 'ok';
					echo "<script language='javascript'>alert('登陆成功！');location='teacher.php';</script>";
			}
			else
			{       $_SESSION['ready'] = '';
					echo "<script language='javascript'>alert('用户名或密码错误！');history.back();</script>";
			}
		}
		else
		{       $_SESSION['ready'] = '';
				echo "<script language='javascript'>alert('请输入完整！');history.back();</script>";
		}
	}
	
	 
	
	if($login == "0")
	{
		if ($username!="" && $pwd!="")
		{
		$sql = "select * from yonghuzhuce where zhanghao='$username' and mima='$pwd' and quanxian='学生'";	
		$result = $conn->Connect($sql);
        $res = $result->fetch(PDO::FETCH_ASSOC);
			if($res['zhanghao'])
			{
					$_SESSION['username']=$username;
					$_SESSION['cx']="普通用户";
					$_SESSION['personal'] = $res['xingming'];
					//$row = mysql_fetch_row($query)
					//echo $_SESSION['cx'];
					$_SESSION['status'] = 'ok';
					echo "<script language='javascript'>alert('登陆成功！');location='student.php';</script>";
			}
			else
			{
					echo "<script language='javascript'>alert('用户名或密码错误！');history.back();</script>";
			}
		}
		else
		{
				echo "<script language='javascript'>alert('请输入完整！');history.back();</script>";
		}
	}

	if($login=="3")
	{ 
		if ($username!="" && $pwd!="")
		{
		$cx = '超级管理员';	
		$sql="select * from allusers where username='$username' and pwd='$pwd' and cx='$cx'";	
		$result=$conn->Connect($sql);
        $res=$result->fetch(PDO::FETCH_ASSOC);
			if($res['username'])
			{
					$_SESSION['username']=$username;
					$_SESSION['cx']="超级管理员";
					//$row = mysql_fetch_row($query)
					//echo $_SESSION['cx'];
					$_SESSION['status'] = 'ok';
					echo "<script language='javascript'>alert('登陆成功！');location='admin.php';</script>";
			}
			else
			{
					echo "<script language='javascript'>alert('用户名或密码错误！');history.back();</script>";
			}
		}
		else
		{
				echo "<script language='javascript'>alert('请输入完整！');history.back();</script>";
		}
	}
//}

}else{
	echo "<script language='javascript'>alert('请通过合法途径登录！');history.back();</script>";
}

?>