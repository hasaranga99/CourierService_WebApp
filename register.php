<?php
include('config/app.php');
$auth->isLoggedIn();

include('includes/header.php');
include('includes/navbar.php');


?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                 
                <?php include('message.php'); ?>

                <div class="card">
                    <div class="card-header">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">

                    <form action="" method="POST">
                        <div class="form-group mb-3">
                                <label>First Name</label>
                                <input type="text" Name="fname" placeholder="Enter First Name" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Last Name</label>
                                <input type="text" Name="lname" placeholder="Enter Last Name" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Email Id</label>
                                <input type="email" Name="email" placeholder="Enter Email Address" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Password</label>
                                <input type="password" Name="password" placeholder="Enter Password" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Confirm Password</label>
                                <input type="password" Name="confirm_password" placeholder="Enter Password Again" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" Name="register_btn" class="btn-primary">Submit Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<?php
include('includes/footer.php');
?>