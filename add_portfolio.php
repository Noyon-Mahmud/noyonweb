<?php 
session_start();
require'dashbord_parts/header.php'?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Add Protfolio</a>

    </nav>

    <div class="sl-pagebody">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Add Protfolio</h3>
                        </div>
                        <div class="card-body ">
                            <form action="protfolio_post.php" method="POST" enctype="multipart/form-data">
                                <div class="mt-3">
                                    <label for="" class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                                <div class="mt-3">
                                    <label for="" class="form-label">Category</label>
                                    <input type="text" name="category" class="form-control">
                                </div>
                                <div class="mt-3">
                                    <label for="" class="form-label">Discraption</label>
                                    <input type="text" name="desp" class="form-control">
                                </div>
                                 <div class="mt-3">
                                    <label for="" class="form-label">Image</label>
                                    <input type="file" name="image" class="form-control" oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                                     <img width="150" class="mt-4" id="pic" />
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">Add Protfolio</button>
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

<?php require'dashbord_parts/footer.php'?>zz