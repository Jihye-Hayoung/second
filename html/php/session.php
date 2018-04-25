<?php
session_start();
$_SESSION['user_id'];
$id=session_id();
echo "$id<br/>";

 ?>
