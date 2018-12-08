 <?php 
  session_start();
  $_SESSION['ready'] = '';
  if(!isset($_SESSION['status'])){
      echo "<script>alert('请通过合法途径登录!');window.location.href='start.php';</script>";
  }
include_once 'ConnectDb.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>菜品信息</title><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>已有课程信息列表：</p>
<form id="form1" name="form1" method="post" action="">
  搜索:编号:
  <input name="bh" type="text" id="bh" />
  名称:
  <input name="mc" type="text" id="mc" />
  <input type="submit" name="Submit" value="查找" />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#6699CC" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#EBE2FE">序号</td>
    <td bgcolor='#EBE2FE'>编号</td><td bgcolor='#EBE2FE'>名称</td><td bgcolor='#EBE2FE'>老师</td><td bgcolor='#EBE2FE'>图片</td><td bgcolor='#EBE2FE'>电话</td><td bgcolor='#EBE2FE'>发布人</td>
    <td width="120" align="center" bgcolor="#EBE2FE">添加时间</td>
    <td width="70" align="center" bgcolor="#EBE2FE">操作</td>
  </tr>
   <?php 
    $sql="select * from kechengxinxi where 1=1";
  if (@$_POST["bh"]!="")
{
    $nreqbh=@$_POST["bh"];
    $sql=$sql." and bianhao like '%$nreqbh%'";
}
     if (@$_POST["mc"]!="")
{
    $nreqmc=@$_POST["mc"];
    $sql=$sql." and mingcheng like '%$nreqmc%'";
}
  $sql=$sql." order by id desc";
  
$con=new ConnectDb();
  @$page=$_GET['page']; 
  if(@$page==""){
    $page=1;
  }
  if(@$page!=""){
    $page_size=4;
    $sql1="select count(*) as total from kechengxinxi ";
    $result=$con->Connect($sql1);
    $res=$result->fetch(PDO::FETCH_ASSOC);
    $count=$res['total'];
    $page_count=ceil($count/$page_size);
    $offset=($page-1)*$page_size;
    $sql2=$sql." limit $offset,$page_size";
    $con2=new ConnectDb();
    $result2=$con2->Connect($sql2);
  }

  while($res2=$result2->fetch(PDO::FETCH_ASSOC)){
  ?>
  <tr>
    <td width="25"> <?php
  echo $res2['id'];
?></td>
    <td> <?php echo $res2['bianhao'];?></td><td> <?php echo $res2['mingcheng'];?></td><td> <?php echo $res2['leibie'];?></td><td width='80'><a href="<?php echo $res2['tupian'] ?>" target='_blank'><img src="<?php echo $res2['tupian']?>" width='80' height='88' border='0'></a></td><td> <?php echo $res2['dianhua'];?></td><td> <?php echo $res2['faburen'];?></td>
    <td width="120" align="center"> <?php
echo$res2['addtime'];
?></td>
    <td width="70" align="center"><a href="del.php?id= <?php
    echo $res2['id'];
  ?>&tablename=kechengxinxi" onclick="return confirm('真的要删除？')">删除</a> <a href="kechengxinxi_updt.php?id= <?php
    echo $res2['id'];
  ?>">修改</a></td>
  </tr>
     <?php
}
?>
</table>
<p>以上数据共 <?php
    echo $count;?>条,
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="打印本页" />
</p>
<p align="center"> <?php echo "<a href='kechengxinxi_list.php?page=1'>首页</a>&nbsp";     
      if($page!=1){
      $go=$page-1;
      echo "<a  href='kechengxinxi_list.php?page=$go'>上一页</a>&nbsp";
     }
     for($i=1;$i<=$page_count;$i++){
        echo "<a id='$i' href='kechengxinxi_list.php?page=$i' value='$i'>$i</a>&nbsp";
     }
      $focus=@$_GET['page'];
     if($page<$page_count){
       $back=$page+1;
      echo "<a href='kechengxinxi_list.php?page=$back'>下一页</a>&nbsp";
     }
     echo "<a href='kechengxinxi_list.php?page=$page_count'>尾页</a>&nbsp";?></p>

<p>&nbsp; </p>

</body>
</html>

