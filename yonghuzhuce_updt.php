 <?php 
$id=@$_GET["id"];
include_once 'ConnectDb.php';
$ndate =date("Y-m-d");
$addnew=@$_POST["addnew"];
if ($addnew=="1" )
{

  $zhanghao=$_POST["zhanghao"];$mima=$_POST["mima"];$xingming=$_POST["xingming"];$xingbie=$_POST["xingbie"];$diqu=$_POST["diqu"];$Email=$_POST["Email"];$quanxian=$_POST["quanxian"];$s1=$_POST["s1"];$s2=$_POST["s2"];
  $sql="update yonghuzhuce set zhanghao='$zhanghao',s2='$s2',s1='$s1',mima='$mima',xingming='$xingming',xingbie='$xingbie',diqu='$diqu',Email='$Email',quanxian='$quanxian' where id= ".$id;
  $conn = new ConnectDb();
  $res = $conn->Connect($sql);
  if($res){
       echo "<script>javascript:alert('修改成功!');location.href='yonghuzhuce_list.php';</script>";
  }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改用户注册</title><link rel="stylesheet" href="css.css" type="text/css"><script language="javascript" src="js/Calendar.js"></script>
</head>

<body>
<p>修改用户注册： 当前日期：  <?php echo $ndate; ?></p>
 <?php
  $sql="select * from yonghuzhuce where id=".$id;
  $conn = new ConnectDb();
  $result = $conn->Connect($sql);
  $res=$result->fetch(PDO::FETCH_ASSOC);
if($res['id'])
{
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#6699CC" style="border-collapse:collapse"> 

      <tr><td>账号：</td><td><input name='zhanghao' type='text'id='zhanghao' value='<?php echo $res['zhanghao'];?>' /></td></tr><tr><td>密码：</td><td><input name='mima' type='text' id='mima' value='<?php echo $res['mima'];?>' /></td></tr><tr><td>姓名：</td><td><input name='xingming' type='text' id='xingming' value='<?php echo $res['xingming'];?>' /></td></tr><tr><td>性别：</td><td><input name='xingbie' type='text' id='xingbie' value='<?php echo $res['xingbie'];?>' /></td></tr><tr><td>地区：</td><td><input name='diqu' type='text' id='diqu' value='<?php echo $res['diqu'];?>' /></td></tr><tr><td>Email：</td><td><input name='Email' type='text' id='Email' value='<?php echo $res['Email'];?>' /></td></tr><tr><td>权限：</td><td><input name='quanxian' type='text' id='quanxian' size='50' value='<?php echo $res['quanxian'];?>' /></td></tr>
   
    <tr><td>电话：</td><td><input name='s1' type='text' id='diqu' value='<?php echo $res['s1'];?>' /></td></tr>
    
    <tr><td>班级：</td><td><input name='s2' type='text' id='diqu' value='<?php echo $res['s2'];?>' /></td></tr>
  
   
    <tr>
      <td>&nbsp;</td>
      <td><input name="addnew" type="hidden" id="addnew" value="1" />
      <input type="submit" name="Submit" value="修改" />
      <input type="reset" name="Submit2" value="重置" /></td>
    </tr>
  </table>
</form>
 <?php
  }
?>
<p>&nbsp;</p>
</body>
</html>

