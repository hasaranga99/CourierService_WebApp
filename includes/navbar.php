<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #2F4F4F">
  <div class="container">
    <a class="navbar-brand" href="#"><h4 style="color: white;">Courier Pvt Ltd</h4></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url('index.php') ?>" style="color: white;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"href="<?= base_url('servise.php') ?>" style="color: white;">Servise</a>
        </li>
        <?php if(isset($_SESSION['authenticated'])) :  ?>

        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
          <?= $_SESSION['auth_user']['user_fname']." ".$_SESSION['auth_user']['user_lname'] ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?= base_url('my-profile.php') ?>" >My Profile</a></li>
            <li><a class="dropdown-item" href="<?= base_url('customers.php') ?>" > Delivery Management</a></li>
            <li>
                <form action="" method="POST">
                    <button type="submit" name="logout_btn" class="dropdown-item">Logout</button>
                </form>
            </li>
          </ul>
        </li>
        <?php else :  ?>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('login.php') ?>" style="color: white;">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('register.php') ?>" style="color: white;">Register</a>
        </li>
        <?php endif; ?>
      </ul>
      
    </div>
  </div>
</nav>