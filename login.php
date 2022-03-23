
<?php 

session_start();


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card_haeder"><h3>Login Form</h3></div>
                    <div class="card">
                        <form action="login_post.php" method="POST">
                            <div class="mb-3">
                                <label for="" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if (isset($_SESSION['email_exist'])){?>
 <script>
        Swal.fire({
            position: 'top-center',
            icon: 'error',
            title: '<?=$_SESSION['email_exist']?>',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
<?php } unset($_SESSION['email_exist'])?>

<?php if (isset($_SESSION['password_wrong'])){?>
 <script>
        Swal.fire({
            position: 'top-center',
            icon: 'error',
            title: '<?=$_SESSION['password_wrong']?>',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
<?php } unset($_SESSION['password_wrong'])?>

</body>

</html>