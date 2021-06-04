
<?php 
include('authentication.php');
include('includes/header.php');
?>
<style>
body {
    
    background-image: url('Web-Clear-BG.png');
    height: 100%;
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;    
}
</style>
<body>    
    <div class="container">
        <div class="row">

            <div class="col-md-12">

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
                            User List

                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <head>
                                <tr>
                                    <th>Code No.</th>
                                    <th>Name</th>                           
                                    <th>Address</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </head>
                            <tbody> 
                                <?php
                                include('dbcon.php');
                                $users = $auth->listUsers();

                                $i=1;
                                foreach ($users as $user) 
                                {
                                    ?>
                                    <tr>
                                        <td><?=$i++?></td>
                                        <td><?=$user->displayName?></td>
                                        <td><?=$user->email?></td>
                                        <td>
                                            <a href="user-edit.php?id=<?= $user->uid;?>" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <a href="user-delete.php" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>                            
                            </tbody>                       
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 
include('includes/footer.php');
?>
</body>  
