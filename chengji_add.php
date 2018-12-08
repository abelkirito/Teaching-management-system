 <?php 
include_once 'ConnectDb.php';
$ndate =date("Y-m-d");
$addnew=@$_POST["addnew"];
if ($addnew=="1" )
{
	
	$xuehao=$_POST["xuehao"];$kemu=$_POST["kemu"];$xingming=$_POST["xingming"];$xingbie=$_POST["xingbie"];$diqu=$_POST["diqu"];$Email=$_POST["Email"];$subject=$_POST["subject"];$s1=$_POST["s1"];$s2=$_POST["s2"];
	$sql="insert into chengji(xuehao,kemu,xingming,subject,s1,s2) values('$xuehao','$kemu','$xingming','$subject','$s1','$s2') ";
	$conn = new ConnectDb();
    $res = $conn->Connect($sql);
    if($res){
	echo "<script>javascript:alert('添加成功!');location.href='chengji_add.php';</script>";
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>信息</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>
<p>添加信息： 当前日期：  <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.xuehao.value==""){alert("请输入编号");document.form1.xuehao.focus();return false;}if(document.form1.kemu.value==""){alert("请输入学号");document.form1.kemu.focus();return false;}if(document.form1.xingming.value==""){alert("请输入姓名");document.form1.xingming.focus();return false;}if(document.form1.Email.value==""){alert("请输入Email");document.form1.Email.focus();return false;}if(document.form1.subject.value==""){alert("请输入课程");document.form1.subject.focus();return false;}
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
	}
</script>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#6699CC" style="border-collapse:collapse">    
	<tr><td>编号：</td><td><input name='xuehao' type='text' id='xuehao' value='' />&nbsp;*</td></tr><tr><td>学号：</td><td><input name='kemu' type='text' id='kemu' value='' />&nbsp;*</td></tr><tr><td>姓名：</td><td><input name='xingming' type='text' id='xingming' value='' />&nbsp;*</td></tr><tr><td>课程：</td><td><input name='subject' type='text' id='subject' value='' />&nbsp;*</td></tr>
 <tr><td>信息：</td><td><input name='s1' type='text' id='diqu' value='' /></td></tr>
	  
	  <tr><td>分数：</td><td><input name='s2' type='text' id='diqu' value='' /></td></tr>
	
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

