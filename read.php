<?php

require_once "db.php";

$id = $_GET['link'];
$select_query = "SELECT * FROM list WHERE id=$id";
$result = mysqli_query($db_connect, $select_query);
$result_assoc = mysqli_fetch_assoc($result);

$update_query = "UPDATE list SET status='read' WHERE id=$id";
mysqli_query($db_connect, $update_query);
header('location: todolist.php');

?>