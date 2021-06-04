
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

            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="class-body">
                        <h4>&nbsp Total No. of Record:
                            <?php
                                include('dbcon.php');
                                $ref_table = 'contacts';
                                $total_count = $database->getReference($ref_table)->getSnapshot()->numChildren();
                                echo $total_count;
                            ?>
                        </h4>
                    </div>    
                </div>
            </div>
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
                            PHP Firebase CRUD - Realtime Database
                            <a href="add-contact.php" class="btn btn-primary float-end">Add Contacts</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <head>
                                <tr>
                                    <th>Code No.</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone No.</th>
                                    <th>Address</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </head>
                            <tbody>
                                <?php
                                    include('dbcon.php');
                                    $ref_table = 'contacts';
                                    $fetchdata = $database->getReference($ref_table)->getValue();

                                    if($fetchdata > 0)
                                    {
                                        $i=1;
                                        
                                        foreach($fetchdata as $key => $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= 'PH'.str_pad($i++, 7, 0, STR_PAD_LEFT) ?></td>
                                                <td><?=$row['fname']?></td>
                                                <td><?=$row['lname']?></td>
                                                <td><?=$row['email']?></td>
                                                <td><?=$row['phone']?></td>
                                                <td><?=$row['address']?></td>
                                                <td>
                                                    <a href="edit-contact.php?id=<?=$key?>" class="btn btn-primary btn-sm">Edit</a>
                                                </td>
                                                <td>
                                                    <!--<a href="delete-contact.php" class="btn btn-danger btn-sm">Delete</a>-->
                                                    <form action="code.php" method="POST">
                                                        <button type="submit" name = "delete_btn" value="<?=$key?>" class="btn btn-danger btn-sm">Delete</button>
                                                </td>
                                            </tr> 
                                            <?php    
                                        }
                                        
                                    }
                                    else
                                    {
                                        ?>
                                            <tr>
                                                <td colspan="8">No Record Found</td>
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
