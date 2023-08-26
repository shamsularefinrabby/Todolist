<?php

require_once "db.php";


$select_query = "SELECT * FROM list";
$result = mysqli_query($db_connect, $select_query);
$result_assoc = mysqli_fetch_assoc($result);

$update_query = "UPDATE list SET status='read'";
$update_result=mysqli_query($db_connect, $update_query);

header('location: todolist.php');

?>