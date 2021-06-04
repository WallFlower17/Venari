<?php 
include('authentication.php');
include('includes/header.php');
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
                            Edit & Update User Data
                            <a href="user-list.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <?php
                                include('dbcon.php');
                                if(isset($_GET['id']))
                                {
                                    $uid = $_GET['id'];
                                    try {
                                        $user = $auth->getUser($uid);
                                        ?>
                                            <input type="hidden" name ="user_id" value="<?=$uid?>">
                                            <div class="form-group mb-3">
                                                <label for="">Display Name</label>
                                                <Input type="text" name="display_name" value="<?= $user->displayName;?>" class="form-control">
                                            </div>
                                            
                                            <div class="form-group mb-3">
                                                <label for="">Email Address</label>
                                                <Input type="email" name="email" value="<?= $user->email;?>" class="form-control">
                                            </div>
                                            
                                            <div class="form-group mb-3">                            
                                                <button type="submit" name="upd_user_btn" class="btn btn-primary ">Updated User</button>
                                            </div>
                                        <?php
                                    } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
                                        echo $e->getMessage();
                                    }
                                }                               

                                
                            ?>

                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 
include('includes/footer.php');
?>