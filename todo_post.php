<?php
require_once "db.php";
// print_r($_POST['list']);
$my_todolist=$_POST['list'];
$db_query="INSERT INTO list(my_todolist) VALUES ('$my_todolist')";


if($my_todolist){
    $db_result=mysqli_query($db_connect,$db_query);
    header('location: todolist.php');
}
else{
    echo "please fill up the form properly";
}
?>