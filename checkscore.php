 <?php 
  session_start();
  //获取当前登录学生
  $name = $_SESSION['personal'];
  if(!isset($_SESSION['status'])){
      echo "<script>alert('请通过合法途径登录!');window.location.href='start.php';</script>";
  }
include_once 'ConnectDb.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>信息</title><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>已有信息列表：</p>
<form id="form1" name="form1" method="post" action="">
  搜索:编号:
  <input name="bh" type="text" id="bh" />
  姓名:
  <input name="mc" type="text" id="mc" />
  <input type="submit" name="Submit" value="查找" />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#6699CC" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#EBE2FE">序号</td>
    <td width="94" bgcolor='#EBE2FE'>编号</td>
    <td width="94" bgcolor='#EBE2FE'>学号</td>
    <td width="94" bgcolor='#EBE2FE'>姓名</td>
    <td width="94" bgcolor='#EBE2FE'>信息</td>
    <td width="167" bgcolor='#EBE2FE'>分数</td>
    <td width="86" bgcolor='#EBE2FE'>课程</td>
  </tr>
<?php 
  $con=new ConnectDb();
  @$page=$_GET['page']; 
  if(@$page==""){
    $page=1;
  }
  if(@$page!=""){
    $page_size=10;
    $sql1="select count(*) as total from chengji where xingming='$name'";
    $result=$con->Connect($sql1);
    $res=$result->fetch(PDO::FETCH_ASSOC);
    $count=$res['total'];
    $page_count=ceil($count/$page_size);
    $offset=($page-1)*$page_size;
    $sql2 = "select * from chengji where xingming='$name'";
    $result2=$con->Connect($sql2);
  }

  while($res2=$result2->fetch(PDO::FETCH_ASSOC)){
  ?>
  <tr>
    <td width="25"> <?php
  echo $res2['id'];
?></td>
    <td> <?php echo $res2['xuehao'];?></td><td> <?php echo $res2['kemu'];?></td><td> <?php echo $res2['xingming'];?></td><td> <?php echo $res2['s1'];?></td><td> <?php echo $res2['s2'];?></td><td align="center"> <?php echo $res2['subject'];?></td>
  </tr>
     <?php
  }
?>
</table>
<p>以上数据共 <?php
    echo $count;
  ?>条,
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="打印本页" />
</p>
<p align="center"> <?php echo "<a href='chengji_list2.php?page=1'>首页</a>&nbsp";     
      if($page!=1){
      $go=$page-1;
      echo "<a  href='chengji_list2.php?page=$go'>上一页</a>&nbsp";
     }
     for($i=1;$i<=$page_count;$i++){
        echo "<a id='$i' href='chengji_list2.php?page=$i' value='$i'>$i</a>&nbsp";
     }
      $focus=@$_GET['page'];
     if($page<$page_count){
       $back=$page+1;
      echo "<a href='chengji_list2.php?page=$back'>下一页</a>&nbsp";
     }
     echo "<a href='chengji_list2.php?page=$page_count'>尾页</a>&nbsp";?></p>

</body>
</html>

