<?php
require_once "header.php";
require_once "db.php";
$db_query="SELECT * FROM list";
$db_result=mysqli_query($db_connect,$db_query);

$count_query1 ="SELECT COUNT(*) AS total_unread FROM list WHERE status='unread'";
$count_query2 ="SELECT COUNT(*) AS total_read FROM list WHERE status='read'";
$count1=mysqli_query($db_connect, $count_query1);
$count2=mysqli_query($db_connect, $count_query2);


?>


<div class="container" >
    <div class="row">
        <div class="col-12">
           
            <div class="card ">
              <div class="card-header text-white bg-success">
                <h3 class="card-title text-uppercase text-center">what i am gonna do</h3>
                <h5 class="card-title">Lists</h5>
                <h4 class="card-title">Total:<?=$db_result->num_rows?>, Read:<?=mysqli_fetch_assoc($count2)['total_read']?>, Unread:<?=mysqli_fetch_assoc($count1)['total_unread']?></h4>
                
            </div>
            <div class="m-2 ">
              <a type="button" class="btn btn-outline-info" href="done_all.php">Mark As All Done</a>
              <a type="button" class="btn btn-outline-danger" href="delete_all.php">Delete All</a>

              
              </div>
              
              <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>serial</th>
                            <th>MY Todo list</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php
                    $serial=1;
                    foreach($db_result as $result){
                    ?> 
                    <tr class="
                    <?=($result["status"]=='unread' ? 'table-active':'')?>
                    ">
                            <td><?=$serial++?></td>
                            <td><?=$result["my_todolist"]?></td>
                            <td>
                                
                                <a type="button" class="btn btn-info" href="read.php?link=<?=$result['id']?>">mark as done</a>
                                <a type="button" class="btn btn-danger" href="delete.php?link=<?=$result['id']?>">Delete</a>
                            </td>
                        </tr>
                        <?php
                        }?>
                    </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
</div>



<?php
require_once "footer.php"
?>