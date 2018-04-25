<?php
include("configure.php");
include("connect.php");

$idch =$_GET['inputID'];
$connect=connect_db($host,$dbid,$dbpw,$dbname);

if(!$connect){
  echo " YOU CANT CONNECT DB!!";
}
$sql="SELECT * FROM USER_INFO WHERE ID='".$idch."'";
$result= mysqli_query($connect, $sql);
$row=mysqli_fetch_array($result);
$count=mysqli_num_rows($row);

if($idch==''){
  ?>

<div> 아이디를 입력하세요. <div>
  <?php
}else{
  if($count==0){
   ?>
   <div style="color:green">
     <div>
       <?=$idch?>는 사용가능한 아이디입니다.
       <input type="button" value="사용하기" onclick="parent('<?=$idch?>')">
     </div>
   </div>

   <form action="checkid_2.php" method="get">
     <div> 다른아이디를 검색하시겠습니까? </div>
     <div><input type="text" name="id" value="" placeholder="아이디를 입력해주세요."></div>
     <div><input type="submit" value="중복확인" onclick=""></div>

   </form>
   <?php
 }else{
   ?>
   <div style="color:red">
     <?=$idch?> 와 같은 아이디가 존재합니다.

    <form action="checkid_2.php" method="get">
      <div><input type="text" name="id" value="<?=$idch?>"><div>
        <div><input type="submit" value="중복확인"></div>
      </form>
    </div>
    <?php
  }
}
?>
