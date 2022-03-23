<?php 
session_start();
require 'db.php';
require'dashbord_parts/header.php';

$select_contact_info = "SELECT * FROM contact_info";
$select_contact_info_result = mysqli_query ($db_connection, $select_contact_info);


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
                <h3 class="text-center">Contact Info</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($select_contact_info_result as $key => $contact){?>
                    <tr>
                        <td><?=$key +1?></td>
                        <td>
                            <?=$contact['address']?>
                        </td>
                        <td>
                            <?=$contact['phone']?>
                        </td>
                        <td>
                            <?=$contact['email']?>
                        </td>

                        <th>
                            <a href="contact_info_edit.php?id=<?=$contact['id']?>"
                                class="btn btn-info">Edit</a>
                        </th>
                        <th>
                            <a href="contact_info_delete.php?id=<?=$contact['id']?>"
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