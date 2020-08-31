<!DOCTYPE html >  
<html>  
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">  
<title>php登录页面_www.jbxue.com</title>  
</head>  
<style type="text/CSS">  
    .div  
    {  
        height:1000px;  
        width:700px;  
        text-align:center;  
        margin:20px;  
          
    }  
    .text  
    {  
          
          
    }  
    .button  
    {  
        font-size:10px;  
          
    }  
  
    </style>  
<body>  
<form method="post" action="check.php">  
<div class="div">  
    用户名<input type="text" name="name" >  
    密码:<input type="password" name="password">  
    <div class="button">  
    <input type="submit" value="提交">  
    <input type="reset" value="清除">  
    <a href="register.php" >注  册</a>  
</div>  
</div>
</form>

<?php 
/**
* 登录验证
* edit www.jbxue.com
*/
require_once("ms_login.php");  
//require_once ("mysql_connect.php");  
$name=$_POST['name'];  
$password=$_POST['password'];  
if($name == "")  
{  
  echo "请填写用户名<br>";  
  echo"<script type='text/javascript'>alert('请填写用户名');location='login.php'; </script>";  
}  
elseif($password == "")  
{  
  //echo "请填写密码<br><a href='login.php'>返回</a>";  
  echo"<script type='text/javascript'>alert('请填写密码');location='login.php';</script>";      
}  
else  
{   
   $colum=collect_data();  
   if(($colum['name'] == $name) && ($colum['password'] == $password))  
   {  
     //echo "验证成功！<br>";  
     echo"<script type='text/javascript'>alert('登陆成功');location='huanying.html';</script>";  
   }  
   else  
     //echo "密码错误<br>";  
     echo"<script type='text/javascript'>alert('密码错误');location='login.php';</script>";  
     //echo "<a href='login.php'>返回</a>";
}  
?>

<?php  
// 连接服务器，并且选择test数据库  
function(){  
      
$db = mysql_connect("localhost","root","123")   
    or die("连接数据库失败！");  
  
mysql_select_db("user")  
    or die ("不能连接到user".mysql_error());  
}
?>

<?php  
//从test数据库中提取数据  
function collect_data(){  
require_once ("mysql_connect.php");  
$sql = "select * from user";  
$result = mysql_query($sql);  
  
$colum= mysql_fetch_array($result);  
 
return colum;  
}
?>


</body>  
</html>