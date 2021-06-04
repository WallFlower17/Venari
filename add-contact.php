
<?php 
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
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Add Contacts
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                        <div class="form-group mb-3">
                            <label for="">First Name</label>
                            <Input type="text" name="first_name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Last Name</label>
                            <Input type="text" name="last_name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email Address</label>
                            <Input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Phone Number</label>
                            <Input type="number" name="phone" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Address</label>
                            <Input type="text" name="address" class="form-control">
                        </div>
                        <div class="form-group mb-3">                            
                            <button type="submit" name="save_contact" class="btn btn-primary ">Save Contact</button>
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