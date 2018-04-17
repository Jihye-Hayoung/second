<?php
include("configure.php");
include("connect.php");

session_start();
$user_check=$_SESSION['login_user'];

$ses_sql=mysql_query("select* from ci_session where session_id='".$user_check."'");
$row=mysql_fetch_array($ses_sql);
$login_session=$row['session_id'];

if(!isset($login_session)){ // 세션값에 있는 ID값이 Db에 없으면 다시 login.
  header("Location:login.php");
}

 ?>
