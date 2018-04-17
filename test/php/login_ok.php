<?php
include("configure.php");
include("connect.php");
include("password.php");


//echo $_POST['InputId'];
//echo $_POST['InputPassword'];

//session_start(); //세션 시작

//$_POST['InputId'] = 'kkk';
//$_POST['InputPassword'] = '111';

if($_POST['InputId'] != ""){
$connect=connect_db($host, $dbid, $dbpw, $dbname);

  $myuserid=$_POST['InputId'];
  $mypassword=$_POST['InputPassword'];

  $query="select * from USER_INFO where user_id='".$myuserid."' and password='".$mypassword."'";  //아이디 비밀번호 대조.
  $result=mysqli_query($connect,$query);
  $count=mysqli_num_rows($result);


 if($count==1){
    //session_register("myuserid");
      $myusername="select user_name from USER_INFO where user_id='".$myuserid."' and password='".$mypassword."'";
    session_start();
    echo "확인";
    $_SESSION['user_id']=$myuserid;
    $_SESSION['user_name']=$_myusername;
//
  //  header("location:welcome.php"); //welcom.php 페이지로 넘김

}else{
    $error="Your Login Id or Password is invalid!!";
    echo $error;
  }
//$_SESSION['user_id']=$myuserid;
//$_SESSION['user_name']=$my

mysqli_close($connect);
}


?>
<meta http-equiv="refresh" content="0;url=loginMain.php"/>
