<?php
    if(isset($_SESSION['admin_name'])){
        header("Location: /admins");
        die();
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css" >

    <title>Dashboard | Login</title>
  </head>
  <body>

        <div class="cont-login d-flex align-items-center justify-content-around">

            <form action="/login" method="POST" class="border p-5" >
                <div class="row">

                    <?php if(isset($errors['login'])): ?>
                    <div class="col-sm-6 offset-sm-3 border p-3 mt-3">
                        <h3 class="alert alert-danger text-center"> <?php foreach ($errors as $error):echo $error; endforeach; ?>  </h3>
                    </div>
                    <?php endif;?>


                    <?php if(isset($success_message) && $success_message !=''):  ?>
                    <div class="col-sm-6 offset-sm-3 border p-3 mt-3">
                        <h3 class="alert alert-success text-center"> <?php echo $success_message; ?>  </h3>
                    </div>
                    <?php endif;?>


                    <div class="col-sm-12  ">
                        <h3 class="text-center p-3 text-white">Login</h3>
                    </div>
                    <div class="col-sm-6 offset-sm-3 ">
                        <div class="form-group">
                            <label >Email </label>
                            <input type="text" name="email" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label >Password </label>
                            <input type="password" name="password" class="form-control" >
                        </div>

                        <div class="form-group">

                            <input type="submit" name="login" class="form-control btn btn-success"   >
                        </div>
                    </div>
                </div>

            </form>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.4.1.min.js" ></script>
    <script src="assets/js/popper.min.js" ></script>
    <script src="assets/js/bootstrap.min.js" ></script>




  </body>
</html>
