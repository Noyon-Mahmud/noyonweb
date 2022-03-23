<?php 
session_start();
require 'db.php';
require'dashbord_parts/header.php';

$select_skill = "SELECT * FROM skill";
$select_skill_result = mysqli_query ($db_connection, $select_skill);


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
                <h3 class="text-center">Skill List</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">topic</th>
                        <th scope="col">Discription</th>
                        <th scope="col">Skill percentage</th>
                        <th scope="col">status</th>
                        <th scope="col">Action</th>
                
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($select_skill_result as $key => $skill){?>
                    <tr>
                        <td><?=$key +1?></td>
                        <td>
                            <?=$skill['topic']?>
                        </td>
                        <td>
                            <?=$skill['desp']?>
                        </td>
                        <td>
                            <?=$skill['percentage']?>
                        </td>

                        <th>
                               <?php if($skill['status'] == 1 ) {?>
                            <a href="skill_status.php?id=<?=$skill['id']?>"
                                class="btn btn-success">Active</a>
                            <?php } else { ?>
                            <a href="skill_status.php?id=<?=$skill['id']?>"
                                class="btn btn-secondary">Deactive</a>
                            <?php } ?>
                        </th>
                        <th>
                            <a href="contact_info_delete.php?id=<?=$skill['id']?>"
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