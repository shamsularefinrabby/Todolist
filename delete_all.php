<?php
require_once "db.php";
$db_query="DELETE FROM list";
$db_result= mysqli_query($db_connect,$db_query);
header('location: todo.php');
?>