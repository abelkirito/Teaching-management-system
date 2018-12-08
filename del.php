 <?php
//验证登陆信息

        include_once 'ConnectDb.php';
//if($_POST['submit']){
	    $id=@$_GET["id"];
	    $tablename=@$_GET['tablename'];
	
	//$userpass=md5($userpass);
	    $sql="delete from $tablename where id=$id";
	//echo $sql;
	    $conn = new ConnectDb();
	    $res = $conn->Connect($sql);
		$comewhere=$_SERVER['HTTP_REFERER'];
		if($res){
		echo "<script language='javascript'>alert('删除成功！');location.href='$comewhere';</script>";
	}
	
//}
?>