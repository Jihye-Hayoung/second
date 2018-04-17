<!DOCTYPE html>
<meta charset= "utf-8" />
<?php
//session_start();
echo "hello world";
if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])){
echo "boo";
  //echo "<meta http-equiv='refresh' content'url=/login.html'>";
  exit;
}
echo "second";
$user_id=$_SESSION['user_id'];
$user_name=$_SESSION['user_name'];
echo "third";
echo "<p>안녕하세요. $user_name($user_id)님</p>";
echo "<p><a href='logout.php'>로그아웃</a></p>";
?>
