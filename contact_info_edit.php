<?php 
session_start();
require 'session_check.php';
require 'db.php';

$id = $_GET['id'];

$select_contact_info = "SELECT * FROM contact_info WHERE id=$id";
$select_contact_info_result = mysqli_query($db_connection, $select_contact_info);
$after_assoc = mysqli_fetch_assoc($select_contact_info_result);
 

?>

<?php require 'dashbord_parts/header.php'?>


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
                    <div class="card_haeder" style=" margin-top: 79px;">
                        <h1>Contact Edit </h1>
                    </div>
                    <div class="card" style="padding: 0 20px;">
                        <form action="update_contact_info.php" method="POST">
                            <div class="mb-3">

                                <label for="" class="form-label">User Name</label>
                                <input type="hidden" value="<?=$after_assoc['id']?>" class="form-control" name="id">
                                <input type="text" value="<?=$after_assoc['address']?>" class="form-control" name="address">

                            </div>
                                  <div class="mb-3">
                                <label for="" class="form-label">phone</label>
                                <input type="phone" class="form-control" name="phone">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Email address</label>
                                <input type="email" value="<?=$after_assoc['email']?>" class="form-control"
                                    name="email">

                            </div>
                      
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>

        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

<?php require 'dashbord_parts/footer.php'?>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php if (isset($_SESSION['success'])){?>
 <script>
        Swal.fire({
            position: 'top-center',
            icon: 'success',
            title: '<?=$_SESSION['success']?>',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
<?php } unset($_SESSION['success'])?>

