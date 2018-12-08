 <?php 
include_once 'ConnectDb.php';
$ndate =date("Y-m-d");
$addnew=@$_POST["addnew"];
if ($addnew=="1" )
{
	
	$zhanghao=$_POST["zhanghao"];$mima=$_POST["mima"];$xingming=$_POST["xingming"];$xingbie=$_POST["xingbie"];$diqu=$_POST["diqu"];$Email=$_POST["Email"];$quanxian=$_POST["quanxian"];$s1=$_POST["s1"];$s2=$_POST["s2"];$quanxian = $_POST['quanxian'];
	$sql="insert into yonghuzhuce(zhanghao,mima,xingming,xingbie,diqu,Email,quanxian,s1,s2) values('$zhanghao','$mima','$xingming','$xingbie','$diqu','$Email','$quanxian','$s1','$s2') ";
	$conn = new ConnectDb();
    $res = $conn->Connect($sql);
  if($res){
       echo "<script>javascript:alert('添加成功!');location.href='yonghuzhuce_add.php';</script>";
  }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>用户注册</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>
<p>添加用户注册： 当前日期：  <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.zhanghao.value==""){alert("请输入账号");document.form1.zhanghao.focus();return false;}if(document.form1.mima.value==""){alert("请输入密码");document.form1.mima.focus();return false;}if(document.form1.xingming.value==""){alert("请输入姓名");document.form1.xingming.focus();return false;}if(document.form1.Email.value==""){alert("请输入Email");document.form1.Email.focus();return false;}if(document.form1.quanxian.value==""){alert("请输入权限");document.form1.quanxian.focus();return false;}
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
	}
</script>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#6699CC" style="border-collapse:collapse">    
	<tr><td>账号：</td><td><input name='zhanghao' type='text' id='zhanghao' value='' />&nbsp;*</td></tr><tr><td>密码：</td><td><input name='mima' type='text' id='mima' value='' />&nbsp;*</td></tr><tr><td>姓名：</td><td><input name='xingming' type='text' id='xingming' value='' />&nbsp;*</td></tr><tr><td>性别：</td><td><select name='xingbie' id='xingbie'><option value="男">男</option><option value="女">女</option></select></td></tr><tr><td>地区：</td><td><select name='diqu' id='diqu'>
	<option value="上海">上海</option>
	<option value="北京">北京</option>
	
	</select></td></tr>
    <tr><td>权限：</td><td><select name='quanxian' id='quanxian'>
	<option value="老师">老师</option>
	<option value="学生">学生</option>
	
	</select></td></tr>
	<tr><td>Email：</td><td><input name='Email' type='text' id='Email' value='' />&nbsp;*</td></tr>
 <tr><td>电话：</td><td><input name='s1' type='text' id='diqu' value='' /></td></tr>
	  
	  <tr><td>班级：</td><td><input name='s2' type='text' id='diqu' value='' /></td></tr>
	
    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="添加" onclick="return check();" />
      <input type="reset" name="Submit2" value="重置" /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>

