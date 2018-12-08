 <?php 
$id=@$_GET["id"];
include_once 'ConnectDb.php';
$ndate =date("Y-m-d");
$addnew=@$_POST["addnew"];
if ($addnew=="1" )
{

  $xuehao=$_POST["xuehao"];$kemu=$_POST["kemu"];$xingming=$_POST["xingming"];$xingbie=$_POST["xingbie"];$diqu=$_POST["diqu"];$Email=$_POST["Email"];$banji=$_POST["banji"];$s1=$_POST["s1"];$s2=$_POST["s2"];
  $sql="update chengji set xuehao='$xuehao',s2='$s2',s1='$s1',kemu='$kemu',xingming='$xingming',banji='$banji' where id= ".$id;
  $conn = new ConnectDb();
  $res = $conn->Connect($sql);
  if($res){
  echo "<script>javascript:alert('修改成功!');location.href='chengji_list.php';</script>";
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改信息</title><link rel="stylesheet" href="css.css" type="text/css"><script language="javascript" src="js/Calendar.js"></script>
</head>

<body>
<p>修改信息： 当前日期：  <?php echo $ndate; ?></p>
 <?php
  $sql="select * from chengji where id=".$id;
  $conn = new ConnectDb();
  $result = $conn->Connect($sql);
  $res=$result->fetch(PDO::FETCH_ASSOC);
if($res['id'])   
{
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#6699CC" style="border-collapse:collapse"> 

      <tr><td>编号：</td><td><input name='xuehao' type='text' id='xuehao' value='<?php echo $res['xuehao'];?>' /></td></tr><tr><td>学号：</td><td><input name='kemu' type='text' id='kemu' value='<?php echo $res['kemu'];?>' /></td></tr><tr><td>姓名：</td><td><input name='xingming' type='text' id='xingming' value='<?php echo $res['xingming'];?>' /></td></tr><tr><td>课程：</td><td><input name='banji' type='text' id='banji' size='50' value='<?php echo $res['banji'];?>' /></td></tr>
   
    <tr><td>信息：</td><td><input name='s1' type='text' id='diqu' value='<?php echo $res['s1'];?>' /></td></tr>
    
    <tr><td>分数：</td><td><input name='s2' type='text' id='diqu' value='<?php echo $res['s2'];?>' /></td></tr>
  
   
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

