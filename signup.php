<?php
header("content-type:text/html;charset=utf-8");  
$username=$_POST["username"];
$code=$_POST["password"];
$email=$_POST["email"];
include_once 'linkmysql.php';
 
 
$sql = "select * from userdb where username='".$_POST['username']."'";
$res = $conn->query($sql);
$info = mysqli_fetch_row($res);
if($info){
 echo "<script>alert('Error: Username exsisted');location.href='register.html';</script>";
 exit;
}else{
$sql2 = "INSERT INTO userdb VALUES (NULL,'{$username}','{$code}','{$email}')";
$res2 = mysqli_query($conn, $sql2);
 echo "<script>alert('Welcome!');location.href='login.html';</script>";
}
 ?>