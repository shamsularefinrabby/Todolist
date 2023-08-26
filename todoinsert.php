<?php
require "todo.php";
require_once "db.php";
print_r($_POST['my_todolist']);

$db_insert_query="INSERT INTO `list`(`id`, `my_todolist`) VALUES ('[value-1]','[value-2]')"

?>