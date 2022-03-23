<?php 
session_start();
require'dashbord_parts/header.php'?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Add Clints</a>
    </nav>

    <div class="sl-pagebody">
            <div class="container">
                        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="card" style="padding: 10px 10px;">
                    <div class="crad_header">
                        <h3>Add Clints</h3>
                    </div>
                    <div class="crad_body">
                        <form action="clints_post.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Upload Clints</label>
                                <input type="file" name="clints" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Add Logo</button>
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