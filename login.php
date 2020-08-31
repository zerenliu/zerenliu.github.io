<?php
header("content-type:text/html;charset=utf-8"); 
//引入链接数据库文件
 include_once 'linkmysql.php';
 //发送数据到数据库表
$sql = "select * from userdb where username='".$_POST['username']."' and pwd='".$_POST['password']."'";
$res = $conn->query($sql);
$info = mysqli_fetch_row($res);
if($info){
    session_start();
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['id'] = $info['0'];
    echo "<script>alert('Hello again！');location.href='./login.php';</script>";
    exit;
}else{
    echo "<script>alert('incorrect username or password');history.go(-1);</script>";
    exit;
}
?> 