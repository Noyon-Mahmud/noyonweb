<?php 
session_start();
require 'db.php';
require'dashbord_parts/header.php';

$select_bennar_contant = "SELECT * FROM banners_contants";
$select_bennar_contant_result = mysqli_query ($db_connection, $select_bennar_contant);


$select_bennar_image = "SELECT * FROM banner_image";
$select_bennar_image_result = mysqli_query ($db_connection, $select_bennar_image);



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
                <h3 class="text-center">Banner Contant</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Sub Title</th>
                        <th scope="col">Title</th>
                        <th scope="col">Discraption</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($select_bennar_contant_result as $key => $banners_contants){?>
                    <tr>
                        <td><?=$key +1?></td>
                        <td><?=$banners_contants['sub_title']?></td>
                        <td><?=$banners_contants['title']?></td>
                        <td><?=$banners_contants['desp']?></td>
                        <td>
                            <?php if($banners_contants['status'] == 1 ) {?>
                            <a href="banner_conatnt_status.php?id=<?=$banners_contants['id']?>"
                                class="btn btn-success">Active</a>
                            <?php } else { ?>
                            <a href="banner_conatnt_status.php?id=<?=$banners_contants['id']?>"
                                class="btn btn-secondary">Deactive</a>
                            <?php } ?>
                        </td>
                        <th>
                            <a href="banner_contant_delete.php?id=<?=$banners_contants['id']?>"
                                class="btn btn-danger">Delete</a>
                        </th>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <!-- ======================================================================================= -->
        <div class="card">
            <div class="card_haeder">
                <h3 class="text-center">Banner Images</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($select_bennar_image_result as $key => $banner_image){?>
                    <tr>
                        <td><?=$key +1?></td>
                        <td>
                            <img width="100" src="uploads/banner/<?=$banner_image['banner_image']?>" alt="">

                        </td>
                        <td>
                            <?php if($banner_image['status'] == 1 ) {?>
                            <a href="banner_conatnt_status.php?id=<?=$banner_image['id']?>"
                                class="btn btn-success">Active</a>
                            <?php } else { ?>
                            <a href="banner_image_status.php?id=<?=$banner_image['id']?>"
                                class="btn btn-secondary">Deactive</a>
                            <?php } ?>
                        </td>
                        <th>
                            <a href="banner_img_delete.php?id= <?= $banner_image['id']?>"
                                class="btn btn-danger">Delete</a>
                        </th>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>

    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<?php require'dashbord_parts/footer.php'?>