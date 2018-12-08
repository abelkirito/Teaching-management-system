<?php
   session_start();
   $file = $_FILES['file'];
   $id = @$_SESSION['id'];
   //图片存放目录
   $uploaddir = "uploadfile/";
   //获取文件后缀
   $fileinfo = pathinfo($file['name']);
   //文件重命名
   $newName = date('YmdHis').mt_rand(100,999).'.'.$fileinfo['extension'];
   $result = move_uploaded_file($file['tmp_name'], $uploaddir.$newName);
   //存入数据库文件名
   $temp = $uploaddir.$newName;
   include_once 'ConnectDb.php';
   //更新数据库中图片路径
   $conn = new ConnectDb();
   $dirname = $uploaddir.$newName;
   $sql = "update kechengxinxi set tupian='$dirname' where id='$id'";

   $res=$conn->Connect($sql);
   return $dirname;
?>