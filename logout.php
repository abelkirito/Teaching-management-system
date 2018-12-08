 <?php
//注销登录
session_start();
$_SESSION['username']="";
$_SESSION['cx']="";
unset($_SESSION['status']);
unset($_SESSION['ready']);
echo "<script language='javascript'>alert('注销登录成功！');location='start.php';</script>";
?>