<?php 
session_start();
require 'db.php';
require'dashbord_parts/header.php';

$select_about_contant = "SELECT * FROM about_contant";
$select_about_contant_result = mysqli_query ($db_connection, $select_about_contant);




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
                        <th scope="col">Sub Title</th>
                        <th scope="col">Title</th>
                        <th scope="col">Discraption</th>
                        <th scope="col">image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($select_about_contant_result as $key => $about_contant){?>
                    <tr>
                        <td><?=$key +1?></td>
                        <td><?=$about_contant['sub_title']?></td>
                        <td><?=$about_contant['title']?></td>
                        <td><?=$about_contant['desp']?></td>
                        <td><img width="100" src="uploads/about/<?=$about_contant['image']?>" alt=""></td>


                        <td>
                            <?php if($about_contant['status'] == 1 ) {?>
                            <a href="about_status_info.php?id=<?=$about_contant['id']?>"
                                class="btn btn-success">Active</a>
                            <?php } else { ?>
                            <a href="about_status_info.php?id=<?=$about_contant['id']?>"
                                class="btn btn-secondary">Deactive</a>
                            <?php } ?>
                        </td>


                        <th>
                            <a href="about_info_delete.php?id=<?=$about_contant['id']?>"
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