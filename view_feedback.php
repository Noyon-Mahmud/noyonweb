<?php 
session_start();
require 'db.php';
require'dashbord_parts/header.php';

$select_feedbacks = "SELECT * FROM feedbacks";
$select_feedbacks_result = mysqli_query ($db_connection, $select_feedbacks);




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
                        <th scope="col">name</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Discraption</th>
                        <th scope="col">image</th>
                        <th scope="col">Action</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($select_feedbacks_result as $key => $feedback){?>
                    <tr>
                        <td><?=$key +1?></td>
                        <td><?=$feedback['name']?></td>
                        <td><?=$feedback['dsignation']?></td>
                        <td><?=$feedback['desp']?></td>
                        <td><img width="100" src="uploads/feed/<?=$feedback['image']?>" alt=""></td>


                        <td>
                            <?php if($feedback['status'] == 1 ) {?>
                            <a href="about_status_info.php?id=<?=$feedback['id']?>"
                                class="btn btn-success">Active</a>
                            <?php } else { ?>
                            <a href="about_status_info.php?id=<?=$feedback['id']?>"
                                class="btn btn-secondary">Deactive</a>
                            <?php } ?>
                        </td>


                        <th>
                            <a href="about_info_delete.php?id=<?=$feedback['id']?>"
                                class="btn btn-danger">Delete</a>
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