<?php
include('config/app.php');


include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container mt-5">
<?php include('message.php'); ?>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4>Customer Add
            <a href="customers.php"class="btn btn-danger float-end">BACK</a> 
          </h4>
        </div>
        <div class="card-body">
          <form action="" method="POST">
            <div class="mb-3">
            <label>Customer Name</label>
            <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
            <label>Customer Email</label>
            <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
            <label>Customer NIC</label>
            <input type="text" name="nic" class="form-control" required>
            </div>
            <div class="mb-3">
            <label>Customer Phone Number</label>
            <input type="text" name="mobile_number" class="form-control" required>
            </div>
            <div class="mb-3">
            <label>Customer Reference</label>
            <input type="text" name="reference" class="form-control" required>
            </div>
            <div class="mb-3">
            <label>Senders Address</label>
            <input type="text" name="senders_address" class="form-control" required>
            </div>
            <div class="mb-3">
            <label>Receivers Address</label>
            <input type="text" name="receivers_address" class="form-control" required>
            </div>
            <div class="mb-3">
            <label>Customers Items</label>
            <input type="text" name="items" class="form-control" required>
            </div>
            <div class="mb-3">
            <label>Customers Amount</label>
            <input type="text" name="amount" class="form-control" required>
            </div>
            <div class="mb-3">
            <label>Description about the parcel</label>
            <input type="text" name="description" class="form-control" required>
            </div>
            <div class="mb-3">
            <label>Customers Status</label>
            <input type="text" name="status" class="form-control" required>
            </div>
            <div class="mb-3">
              <button type="submit" name="save_customer" class="btn btn-primary">Save Customer</button>
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