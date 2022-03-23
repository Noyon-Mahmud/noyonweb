<?php 
session_start();
require 'db.php';
require'dashbord_parts/header.php';

$select_social_icon = "SELECT * FROM social_icon";
$select_social_icon_result = mysqli_query ($db_connection, $select_social_icon);


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
                <h3 class="text-center">Social Icon</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Link</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($select_social_icon_result as $key => $icon){?>
                    <tr>
                        <td><?=$key +1?></td>
                        <td>
                            <i style="font-size: 40px;" class="fa <?=$icon['icon_class']?>"></i>
                        </td>
                        <td>
                            <a href="<?=$icon['link']?>"><?=$icon['link']?></a>
                        </td>
                        <td>
                            <?php if($icon['status'] == 1 ) {?>
                            <a href="icon_status.php?id=<?=$icon['id']?>"
                                class="btn btn-success">Active</a>
                            <?php } else { ?>
                            <a href="icon_status.php?id=<?=$icon['id']?>"
                                class="btn btn-secondary">Deactive</a>
                            <?php } ?>
                        </td>
                        <th>
                            <a href="banner_contant_delete.php?id=<?=$icon['id']?>"
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
<?php if (isset($_SESSION['icon_err'])){?>
        <script>
                 Swal.fire({
                                position: 'top-end',
                                icon: 'error',
                                title: '<?=$_SESSION['icon_err']?>',
                                showConfirmButton: false,
                                timer: 1500
                  })
        </script>    
<?php unset($_SESSION['icon_err']); }?>