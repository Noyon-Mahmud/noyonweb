<?php 
session_start();
require 'db.php';
require'dashbord_parts/header.php';

$select_fact = "SELECT * FROM fact";
$select_fact_result = mysqli_query ($db_connection, $select_fact);


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
                <h3 class="text-center">Service List</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Icon</th>
                        <th scope="col">title</th>
                        <th scope="col">Discraption</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($select_fact_result as $key => $fact){?>
                    <tr>
                        <td><?=$key +1?></td>
                        <td>
                            <i style="font-size: 40px;" class="fa <?=$fact['icon_class']?>"></i>
                        </td>
                        <td>
                          <?=$fact['counter']?>

                        </td>
                        <td>
                       
                           <?=$fact['title']?>

                        </td>
                        <td>
                            <?php if($fact['status'] == 1 ) {?>
                            <a href="fact-_status.php?id=<?=$fact['id']?>"
                                class="btn btn-success">Active</a>
                            <?php } else { ?>
                            <a href="fact-_status.php?id=<?=$fact['id']?>"
                                class="btn btn-secondary">Deactive</a>
                            <?php } ?>
                        </td>
                        <th>
                            <a href="fact_delete.php?id=<?=$fact['id']?>"
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