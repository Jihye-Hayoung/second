<?
include("configure.php");
include("connect.php");

$id = $_GET('user_id');

$query="select count(*) from USER_INFO where user_id='".$id."'";
$result=mysqli_query($query, $connect);
$row = mysql_fetch_array($result);

mysqli_close($connect);
?>

<script>
var row="<?=$row[0]?>";
if(row==1){
  parent.document.getElementByID("chk_id2").value="0";
  parent.alert("이미 사용중인 아이디입니다.");
}else{
  parent.document.getElementByID("chk_id2").value="1";
  parent.alert("사용가능한 아이디입니다.");
}
</script>
