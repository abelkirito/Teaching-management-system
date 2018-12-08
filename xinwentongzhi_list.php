<?php 
include_once 'ConnectDb.php';
$lb=@$_GET["lb"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $lb;?></title>
<link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>已有<?php echo $lb;?>列表：</p>
<form id="form1" name="form1" method="post" action="">
  搜索: 标题：<input name="biaoti" type="text" id="biaoti" />
  <input type="submit" name="Submit" value="查找" />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#FF9900" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">序号</td>
    <td bgcolor='#CCFFFF'>标题</td><td bgcolor='#CCFFFF'>类别</td><td bgcolor='#CCFFFF'>附件</td><td bgcolor='#CCFFFF'>点击率</td><td bgcolor='#CCFFFF'>添加人</td>
    <td width="120" align="center" bgcolor="#CCFFFF">添加时间</td>
    <td width="70" align="center" bgcolor="#CCFFFF">操作</td>
  </tr>
  <?php 
    $sql="select * from xinwentongzhi where leibie='".$lb."'";
  
if (@$_POST["biaoti"]!=""){
	$nreqbiaoti=@$_POST["biaoti"];$sql=$sql." and biaoti like '%$nreqbiaoti%'";}
if($lb!=""){
	$sql=$sql." and leibie='$lb'";
 }
  $sql=$sql." order by id desc";
  $con = new ConnectDb();
  $result=$con->Connect($sql);
  $res=$result->fetch(PDO::FETCH_ASSOC);
 if($res['id']){
  @$page=$_GET['page']; 
  if(@$page==""){
    $page=1;
  }
  if(@$page!=""){
    $page_size=4;
    $sql1="select count(*) as total  from xinwentongzhi where leibie='$lb'";
    $result1=$con->Connect($sql1);
    $res1=$result1->fetch(PDO::FETCH_ASSOC);
    $count=$res1['total'];
    $page_count=ceil($count/$page_size);
    $offset=($page-1)*$page_size;
    $sql2=$sql." limit $offset,$page_size";
    $con2=new ConnectDb();
    $result2 =$con2->Connect($sql2);
  }

  while($res2=$result2->fetch(PDO::FETCH_ASSOC)){
  ?>
  <tr>
    <td width="25"><?php
	echo $res2['id'];
?></td>
    <td><?php echo $res2['biaoti'];?></td><td><?php echo $res2['leibie'];?></td><td width='80'>
	<?php if( $res2['shouyetupian']==null)
	{
	?>
	
	<img src='uploadfile/timg.jpg' width='80' height='88' border='0'>
	<?php
	}else{
	?>
	<a href="<?php echo $res2['shouyetupian']; ?>" target='_blank'>
	<img src='<?php echo $res2['shouyetupian']; ?>' width='80' height='88' border='0'></a>
	<?php
	}
	?>
	</td><td><?php echo $res2['dianjilv'];?></td><td><?php echo $res2['tianjiaren'];?></td>
    <td width="120" align="center"><?php
echo $res2['addtime'];
?></td>
    <td width="70" align="center"><a href="del.php?id=<?php
		echo $res2['id'];?>&tablename=xinwentongzhi" onclick="return confirm('真的要删除？')">删除</a> <a href="xinwentongzhi_updt.php?id=<?php echo $res2['id'];?>">修改</a></td>
  </tr>
  	<?php
	} 
?>
</table>
<p>以上数据共<?php
		echo $count;
	?>条,
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="打印本页" />
</p>
<p align="center"> <?php echo "<a href='xinwentongzhi_list.php?page=1&lb=$lb'>首页</a>&nbsp";     
      if($page!=1){
      $go=$page-1;
      echo "<a  href='xinwentongzhi_list.php?page=$go&lb=$lb'>上一页</a>&nbsp";
     }
     for($i=1;$i<=$page_count;$i++){
        echo "<a id='$i' href='xinwentongzhi_list.php?page=$i&lb=$lb'>$i</a>&nbsp";
     }
      $focus=@$_GET['page'];
     if($page<$page_count){
       $back=$page+1;
      echo "<a href='xinwentongzhi_list.php?page=$back&lb=$lb'>下一页</a>&nbsp";
     }
     echo "<a href='xinwentongzhi_list.php?page=$page_count&lb=$lb'>尾页</a>&nbsp";} 
     ?>
     	
     </p>

<p>&nbsp; </p>

</body>
</html>