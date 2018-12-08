<?php
class ConnectDb{
    public function Connect($sql){
    $dbms='mysql';
    $dbname='system';
    $user='root';
    $password="";
    $host="localhost";
    $dsn="$dbms:host=$host;dbname=$dbname";
    $pdo=new PDO($dsn,$user,$password);
    $pdo->exec("SET NAMES 'utf8';"); 
    $result=$pdo->prepare($sql);
    $result->execute();
    return $result;
      }
	}
?>