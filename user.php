<?php 
session_start();
require 'session_check.php';
require 'db.php';


$select = "SELECT * FROM users WHERE status=0";
$select_result = mysqli_query($db_connection,$select);


$select_trash_user = "SELECT * FROM users WHERE status=1";
$select_trash_result = mysqli_query($db_connection, $select_trash_user);

?>


<?php require'dashbord_parts/header.php'?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Pages</a>
        <span class="breadcrumb-item active">Blank Page</span>
    </nav>

    <div class="sl-pagebody">

        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="card">
                    <div class="card-header" style="margin-top: 4pc;">
                        <h3>Users Informations</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered ">
                            <thead class="bg-info">
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Photo</th>
                                    <?php if($after_assoc_info['role'] == 1 ||$after_assoc_info['role'] == 2 ){?>
                                    <th>Action</th>
                                    <?php }?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($select_result as $key => $user) { ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $user['name'] ?></td>
                                    <td><?= $user['email'] ?></td>
                                    <td>
                                        <img width="50" src="uploads/user/<?= $user['profile_photo'] ?>" alt="">
                                    </td>
                                    <td>
                                          <?php if($after_assoc_info['role'] == 1 || $after_assoc_info['role'] == 2){?>
                                        <a href="user_edit.php?id=<?= $user['id'] ?>" class="btn btn-info">Edit</a>
                                        <?php } ?>
                                        <?php if($after_assoc_info['role'] == 1){?>
                                        <button name="user_status.php?id=<?= $user['id'] ?>" type=""
                                            class="btn btn-danger delete">Delete</button>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <?php if (mysqli_num_rows($select_result) == 0) { ?>
                            <tr>
                                <td colspan="4" class="text-center">No Data Found</td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>


                <div class="card mt-5">
                    <div class="card-header">
                        <h3>Trashed Users Informations</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="bg-info">
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php foreach ($select_trash_result as $key => $user) { ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $user['name'] ?></td>
                                <td><?= $user['email'] ?></td>
                                <td>
                                    <img width="50" src="uploads/user/<?=$user['profile_photo']?>?>" alt="">
                                </td>
                                <td>
                                    <a href="user_status.php?id=<?=$user['id']?>" class="btn btn-success">Restore</a>
                                    <button name="user_delete.php?id=<?=$user['id']?>" type="button"
                                        class="btn btn-danger delete">Delete</button>
                                </td>
                            </tr>
                            <?php } ?>
                            <?php if (mysqli_num_rows($select_trash_result) == 0) { ?>
                            <tr>
                                <td colspan="4" class="text-center">No Data Found</td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>

            </div>
        </div>



    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<?php require'dashbord_parts/footer.php'?>

<script>
    $('.delete').click(function() {
   Swal.fire({
            title: 'Are you sure?',
            text: "This user will be deleted permanently.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                let link = $(this).attr('name');
                document.location.href = link;
            }
        })
});
</script>

<?php if(isset($_SESSION['success'])){?>
<script>
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: '<?=$_SESSION['success']?>',
        showConfirmButton: false,
        timer: 1500
    })
</script>
<?php } unset($_SESSION['success'])?>