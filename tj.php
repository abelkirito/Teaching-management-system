 <?php
//验证登陆信息

include_once 'conn.php';
//if($_POST['submit']){
	$id=$_GET["id"];
	
	$sql="update yuanchuangshipu set istop='是' where id=$id";
	
	 	mysql_query($sql);
	$sql="update yuanchuangshipu set istop='否' where id<>$id";
	
	 	mysql_query($sql);

		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('操作成功！');location.href='$comewhere';</script>";
	
//}
?>