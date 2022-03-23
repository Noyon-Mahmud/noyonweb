<?php 
session_start();
require 'db.php';
require'dashbord_parts/header.php';

$select_social_clints = "SELECT * FROM clints";
$select_social_clints_result = mysqli_query ($db_connection, $select_social_clints);


?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Add clints</a>
    </nav>

    <div class="sl-pagebody">
        <div class="card">
            <div class="card_haeder">
                <h3 class="text-center">Clints</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Clints images</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($select_social_clints_result as $key => $clints){?>
                    <tr>
                        <td><?=$key +1?></td>
                        <td>
                           <img width="120px" src="uploads/clints/<?=$clints['clints']?>" alt="">
                        </td>
                    
                        <td>
                                <a href="status_clints.php?id=<?=$clints['id']?>" class="btn <?=($clints['status']== 1?'btn-success': 'btn-secondary')?>"> <?=($clints['status'] == 1?'active': 'deactive')?></a>
                        </td>

                        <th>
                            <a href="clints_view.php?id=<?=$clints['id']?>"
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