<?php

require_once "header.php";
require_once "db.php";

?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="todo_post.php">Form</a></li>
                    <li class="breadcrumb-item active">Form</li>
                </ol>
                <div class="card-header text-white bg-secondary">
                    <h2 class="card-title text-center text-uppercase text-warning">What i am gonna do</h2>
                </div>


                <div class="card-body">
                    <form  method="POST" action="todo_post.php">
                        <div class="mb-3">
                            <label class="form-label">List of the activities</label>
                            <input type="text" class="form-control" name="list"  >
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






<?php

require_once "footer.php";

?>