z<?php 
session_start();
require'dashbord_parts/header.php'
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
                <div class="col-lg-12 m-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Add Skill </h3>
                        </div>
                        <div class="card-body ">
                            <form action="skill_post.php" method="POST">
                                <div class="mt-3">
                                    <label for="" class="form-label">topic</label>
                                    <input type="text" name="topic" class="form-control">
                                </div>
                                <div class="mt-3">
                                    <label for="" class="form-label">Discription</label>
                                    <input type="text" name="desp" class="form-control">
                                </div>
                                <div class="mt-3">
                                    <label for="" class="form-label">Skill percentage</label>
                                    <input type="text" name="percentage" class="form-control">
                                </div>

                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">Add Skill</button>
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

<script>
    $('.social_icon').click(function(){
          var icon_class =  $(this).attr('name');
          $('#icon_input').attr('value', icon_class);
          $('#icon2').attr('class', 'fa '+icon_class);
       
    });

</script>

