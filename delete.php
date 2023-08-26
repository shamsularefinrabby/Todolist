<?php
require_once "db.php";
$id=$_GET['link'] ;
$db_query="DELETE FROM list WHERE id=$id";
$db_result= mysqli_query($db_connect,$db_query);
header('location: todolist.php');
?>