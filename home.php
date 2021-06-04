<?php 
include('authentication.php');
include('includes/header.php');
?>
<style>
    body {
    background-image: url('Web-Landing-BG2.png');
    height: 100%;
    /* Center and scale the image nicely */
    background-position: right;
    background-repeat: no-repeat;
    background-size: contain,cover;   
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
            <h2></h2>
        </div>       
    </div>
</div>


<?php 
include('includes/footer.php');
?>