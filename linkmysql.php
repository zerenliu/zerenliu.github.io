<?php

$host="localhost";
$db_user="zliu27";//用户名
$db_pass="zliu27";//密码
$db_name="zliu27";//数据库

$conn = new mysqli($host, $db_user,$db_pass,$db_name);
$conn->query("set names utf8");
?>