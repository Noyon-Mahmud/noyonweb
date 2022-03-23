
<?php 
session_start();
require 'session_check.php';
require 'db.php';
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
                            <div class="col-lg-6 m-auto">
                                <div class="card_haeder">
                                    <h1>Add users </h1>
                                </div>
                                <div class="card" style="padding: 20px;">
                                    <form action="register_post.php" method="POST" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="" class="form-label">User Name</label>
                                            <input type="text" class="form-control" name="name">
            
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Email address</label>
                                            <input type="email" class="form-control" name="email">
            
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password">
                                        </div>



                                          <div class="mb-3">
                                       
                                          <select name="role" class="form-control">
                                              <option value="">-- Select  --</option>
                                              <option value="2">Admin</option>
                                              <option value="3">Mod</option>
                                              <option value="4">Viewer</option>
                                          </select>
            
                                        </div>

            
                                        <div class="mb-3">
                                            <input type="file" class="form-control" name="profile_photo"oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                                            <img width="150" class="mt-4" id="pic" />
            
                                            
                                            <?php if(isset($_SESSION['extansion'])){?>
                                                        <strong class="text-danger"><?=$_SESSION['extansion']?></strong>
                                            <?php } unset($_SESSION['extansion'])?>
                                            <?php if(isset($_SESSION['site_file'])){?>
                                                        <strong class="text-danger"><?=$_SESSION['site_file']?></strong>
                                            <?php } unset($_SESSION['site_file'])?>
                                        </div>
            
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

<?php require'dashbord_parts/footer.php'?>



    <?php if (isset($_SESSION['exsit'])){?>
    <script>
        Swal.fire({
            position: 'top-center',
            icon: 'error',
            title: '<?=$_SESSION['exsit']?>',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
    <?php } unset($_SESSION['exsit'])?>

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
