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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>PHP FIREBASE</title>
  </head>
  <body>
    <style>
    body, html {
    height: 120%;
    margin: 0;   
    }
    </style>
   
<style>
body {
    background-image: url('Web-Login-BG1.png');
    height: 100%;
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    //position: relative;
    
}
</style>
<html>
  <style>
    .section {
        border-radius: 1em;
        padding: 1em;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%) }
  </style>

<body>
    <div class="container section ">
        <div class="row justify-content-center">
            <div class="col-md-4">

                <?php
                if(isset($_SESSION['status']))
                {
                    echo "<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
                    unset($_SESSION['status']);
                }
                ?>  
                <div class="card ">
                    <div class="card-header text-center">
                        <h1>
                            Login                       
                        </h1>
                    </div>
                    <div class="card-body ">
                        <p class="login-box-msg text-center">Sign in to start your session</p>
                        <form action="logincode.php" method="POST">
                        <div class="form-group mb-3">
                            <label for="">Email Address</label>
                            <Input type="text" name="email" class="form-control" required />
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Password</label>
                            <Input type="text" name="password" class="form-control" required />
                        </div>
                        <div class="form-group mb-3">                            
                            <button type="submit" name="login_btn" class="btn btn-primary">Login</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 
include('includes/footer.php');
?>