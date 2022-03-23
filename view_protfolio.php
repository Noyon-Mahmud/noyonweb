<?php 
session_start();
require 'db.php';
require'dashbord_parts/header.php';

$select_works = "SELECT * FROM works";
$select_works_result = mysqli_query ($db_connection, $select_works);




?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Pages</a>
        <span class="breadcrumb-item active">Blank Page</span>
    </nav>

    <div class="sl-pagebody">
        <div class="card">
            <div class="card_haeder">
                <h3 class="text-center">About Contant</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">user id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Cetagory</th>
                        <th scope="col">Discraption</th>
                        <th scope="col">image</th>
                        <th scope="col">Action</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($select_works_result as $key => $work){?>
                    <tr>
                        <td><?=$key +1?></td>
                        <td>
                         <?php 
                         $user_id = $work['user_id'];
                         $user = "SELECT * FROM users WHERE id=$user_id";
                         $select_result = mysqli_query($db_connection, $user);
                        $after_assoc = mysqli_fetch_assoc($select_result);
                        echo $after_assoc['name'];
                         ?>
                        </td>
                        <td><?=$work['title']?></td>
                        <td><?=$work['category']?></td>
                        <td><?=$work['desp']?></td>
                        <td><img width="100" src="uploads/protfolio/<?=$work['image']?>" alt=""></td>


                        <td>
                            <?php if($work['status'] == 1 ) {?>
                            <a href="protfolio_status_.php?id=<?=$work['id']?>" class="btn btn-success">Active</a>
                            <?php } else { ?>
                            <a href="protfolio_status_.php?id=<?=$work['id']?>" class="btn btn-secondary">Deactive</a>
                            <?php } ?>
                        </td>


                        <th>
                            <a href="protfolio_delete.php?id=<?=$work['id']?>" class="btn btn-danger">Delete</a>
                        </th>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <!-- ======================================================================================= -->

    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<?php require'dashbord_parts/footer.php'?>