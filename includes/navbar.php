<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">VENARI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        
        
        
        <li class="nav-item">
          <a class="nav-link" href="home.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Individual List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="establist.php">Establishment List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userlist.php">User List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Add User</a>
        </li>
        <?php if(!isset($_SESSION['verified_user_id'])) : ?>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <?php else: ?>

        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
        <?php endif; ?>
    </div>
  </div>
</nav>