<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "apurbo";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title></title>
  </head>
  <body>

  <h1 class="text-center display-1 fw-bolder text-muted pt-5">Admin Log In</h1>
  <form action="#" method="POST" enctype="multipart/form-data" accept-charset="utf-8" class="container p-5" style="max-width: 35%;">
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="s_exampleInputEmail1">
        <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating mb-4">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="s_exampleInputPassword1">
        <label for="floatingPassword">Password</label>
    </div>
    <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="s_submit">Sign In</button>
  </form>

    
<?php

    if(isset($_POST['s_submit'])) {
        $ck_id = $_POST['s_exampleInputEmail1'];
        $ck_pass = $_POST['s_exampleInputPassword1'];

        if ("ashik@test.com" === $ck_id && "1234" === $ck_pass) {
            header('location: home_admin.php');
            exit();
        }
        
        header('location: admin.php');
        exit();
    }
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>