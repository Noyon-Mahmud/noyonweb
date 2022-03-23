<?php 
session_start();
require 'db.php';
require'dashbord_parts/header.php';

$select_social_logo = "SELECT * FROM logo";
$select_social_logo_result = mysqli_query ($db_connection, $select_social_logo);


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
                        <th scope="col">Logo</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($select_social_logo_result as $key => $logo){?>
                    <tr>
                        <td><?=$key +1?></td>
                        <td>
                           <img width="120px" src="uploads/logo/<?=$logo['logo']?>" alt="">
                        </td>
                    
                        <td>
                                <a href="status_logo.php?id=<?=$logo['id']?>" class="btn <?=($logo['status']== 1?'btn-success': 'btn-secondary')?>"> <?=($logo['status'] == 1?'active': 'deactive')?></a>
                        </td>

                        <th>
                            <a href="banner_contant_delete.php?id=<?=$logo['id']?>"
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