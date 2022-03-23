<?php 
session_start();
require'dashbord_parts/header.php'?>

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
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Add Baneer Contant</h3>
                        </div>
                        <div class="card-body ">
                            <form action="banner_conatnt_post.php" method="POST">
                                <div class="mt-3">
                                    <label for="" class="form-label"> Sub Title</label>
                                    <input type="text" name="sub_title" class="form-control">
                                </div>
                                <div class="mt-3">
                                    <label for="" class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                                <div class="mt-3">
                                    <label for="" class="form-label">Discraption</label>
                                    <input type="text" name="desp" class="form-control">
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">Add Contant</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Add Baneer Images</h3>
                        </div>
                        <div class="card-body ">
                            <form action="banner_image_post.php" method="POST" enctype="multipart/form-data">
                                <div class="mt-3">
                                    <label for="" class="form-label">Banner Image</label>
                                    <input type="file" name="banner_image" class="form-control" oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                                     <img width="150" class="mt-4" id="pic" />
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">Add Contant</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<?php require'dashbord_parts/footer.php'?>