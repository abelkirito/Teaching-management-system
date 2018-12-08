 <?php 
session_start();
$id=@$_GET["id"];
include_once 'ConnectDb.php';
$ndate =date("Y-m-d");
$addnew=@$_POST["addnew"];
if ($addnew=="1" )
{

  $zhanghao=$_POST["zhanghao"];$mima=$_POST["mima"];$xingming=$_POST["xingming"];$xingbie=$_POST["xingbie"];$diqu=$_POST["diqu"];$Email=$_POST["Email"];$s1=$_POST["s1"];$s2=$_POST["s2"];
  if($id){
  $sql="update yonghuzhuce set zhanghao='$zhanghao',mima='$mima',xingming='$xingming',s2='$s2',s1='$s1',xingbie='$xingbie',diqu='$diqu',Email='$Email',quanxian='老师' where id='$id'";}else{
         $temp_name = $_SESSION['username'];;
         $sql="update yonghuzhuce set zhanghao='$zhanghao',mima='$mima',xingming='$xingming',s2='$s2',s1='$s1',xingbie='$xingbie',diqu='$diqu',Email='$Email',quanxian='老师' where zhanghao='$temp_name'";
  }
  $conn = new ConnectDb();
  $res = $conn->Connect($sql);
  if($res){
       echo "<script>javascript:alert('修改成功!');location.href='yonghuzhuce_updt2.php';</script>";
  }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改用户注册</title><link rel="stylesheet" href="css.css" type="text/css"><script language="javascript" src="js/Calendar.js"></script>
</head>
<script language="javascript">
  
  
  function OpenScript(url,width,height)
{
  var win = window.open(url,"SelectToSort",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=yes,menubar=no,status=yes' );
}
  function OpenDialog(sURL, iWidth, iHeight)
{
   var oDialog = window.open(sURL, "_EditorDialog", "width=" + iWidth.toString() + ",height=" + iHeight.toString() + ",resizable=no,left=0,top=0,scrollbars=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no");
   oDialog.focus();
}
</script>
<body>
<p>修改个人资料： 当前日期：  <?php echo $ndate; ?></p>
 <?php
  if($id){
     $sql1="select * from yonghuzhuce where id='$id'";
   }else{
     $name = $_SESSION['username'];
     $sql1="select * from yonghuzhuce where zhanghao='$name'";
  }
  $conn1 = new ConnectDb();
  $result = $conn1->Connect($sql1);
  $res=$result->fetch(PDO::FETCH_ASSOC);
if($res['id'])
{
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#6699CC" style="border-collapse:collapse"> 

      <tr><td>账号：</td><td><input name='zhanghao' type='text' id='zhanghao' value='<?php echo $res['zhanghao'];?>' readonly="readonly" />
      *此项不得修改</td>
      </tr><tr><td>密码：</td><td><input name='mima' type='text' id='mima' value='<?php echo $res['mima'];?>' /></td></tr><tr><td>姓名：</td><td><input name='xingming' type='text' id='xingming' value='<?php echo $res['xingming'];?>' /></td></tr><tr><td>性别：</td>
        <td><select name="xingbie" id="xingbie">
          <option value="男">男</option>
      <option value="女">女</option>
        </select>
        </td>
      </tr>
    <script language="javascript">document.form1.xingbie.value='<?php echo $res['xingbie'];?>';</script>
    <tr><td>地区：</td><td><input name='diqu' type='text' id='diqu' value='<?php echo $res['diqu'];?>' /></td></tr>
    
    <tr><td>电话：</td><td><input name='s1' type='text' id='diqu' value='<?php echo $res['s1'];?>' /></td></tr>
    
    <tr><td>班级：</td><td><input name='s2' type='text' id='diqu' value='<?php echo $res['s2'];?>' /></td></tr>
    
    
    <tr><td>Email：</td><td><input name='Email' type='text' id='Email' value='<?php echo $res['Email'];?>' /></td></tr>
   
   
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

