
<?php
session_start();
require 'dashbord_parts/header.php' 

?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">Starlight</a>
            <a class="breadcrumb-item" href="index.html">Pages</a>
            <span class="breadcrumb-item active">Blank Page</span>
        </nav>

        <div class="sl-pagebody">
          <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="card_header">
                        <h3>User Edit Profile</h3>
                    </div>
                    <div class="card" style="padding: 0 20px;" >
                        <form action="user_profile_update.php" method="POST">
                            <div class="mt-3">
                                <label for="">Name</label>
                                <input type="hidden" name="id" value="<?=$after_assoc_info['id']?>" class="form-control">
                                <input type="text" name="name" value="<?=$after_assoc_info['name']?>" class="form-control">
                            </div>
                            <div class="mt-3">
                                <label for="">Email</label>
                                <input type="email" name="email" value="<?=$after_assoc_info['email']?>" class="form-control">
                            </div>
                            <div class="mt-3">
                                <label for="">Password</label>
                                <input type="password" name="password" value="" class="form-control">
                            </div>
                            <div class="mt-3">
                                <label for="">profile Image</label>
                                <input type="file" name="profile_photo" value="<?=$after_assoc_info['profile_photo']?>" class="form-control"   oninput="pic.src=window.URL.createObjectURL(this.files[0])">  
                                 <img width="150" class="my-3" id="pic"
                                    src="uploads/user/<?=$after_assoc_info['profile_photo']?>" />
                                
                            </div>
                            <div class="mt-3">
                                <button type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

<?php require 'dashbord_parts/footer.php'?>