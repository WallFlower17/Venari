<?php 
session_start();
include('includes/header.php');
if(isset($_SESSION['verified_user_id']))
{
    $_SESSION['status'] = "You are already logged in";
    header('Location: home.php');
    exit();
    
}

?>
<style>
body {
    background-image: url('Web-Clear-BG.png');
    height: 100%;
    /* Center and scale the image nicely */
    //background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
}
</style>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <?php
                if(isset($_SESSION['status']))
                {
                    echo "<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
                    unset($_SESSION['status']);
                }
                ?>  
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Add New User
                            <a href="home.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                        <div class="form-group mb-3">
                            <label for="">Full Name</label>
                            <Input type="text" name="full_name" class="form-control">
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="">Email Address</label>
                            <Input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Password</label>
                            <Input type="text" name="password" class="form-control">
                        </div>
                        <div class="form-group mb-3">                            
                            <button type="submit" name="reg_btn" class="btn btn-primary ">Registered</button>
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