<?php
include('config/app.php');


include('includes/header.php');
include('includes/navbar.php');
?>

    
<div class="container mt-5">
<?php include('message.php');?>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4>Customer Edit
            <a href="customers.php"class="btn btn-danger float-end">BACK</a> 
          </h4>
        </div>
        <div class="card-body">
          <?php
          if(isset($_GET['id']))
          {
            $id =mysqli_real_escape_string($db->conn, $_GET['id']);
            $query = "SELECT * FROM customers WHERE id = '$id'";
            $query_run = mysqli_query($db->conn, $query);

            if(mysqli_num_rows($query_run) > 0)
            {
              $customer = mysqli_fetch_array($query_run);
              ?>

          <form action="" method="POST">
              <input type="hidden" name="id" value="<?= $customer['id']?>">

            <div class="mb-3">
            <label>Customer Name</label>
            <input type="text" name="name" value="<?=$customer['name'];?>" class="form-control">
            </div>
            <div class="mb-3">
            <label>Customer Email</label>
            <input type="email" name="email" value="<?=$customer['email'];?>" class="form-control">
            </div>
            <div class="mb-3">
            <label>Customer NIC</label>
            <input type="text" name="nic" value="<?=$customer['nic'];?>" class="form-control">
            </div>
            <div class="mb-3">
            <label>Customer Phone Number</label>
            <input type="text" name="mobile_number" value="<?=$customer['mobile_number'];?>" class="form-control">
            </div>
            <div class="mb-3">
            <label>Customer Reference</label>
            <input type="text" name="reference" value="<?=$customer['reference'];?>" class="form-control">
            </div>
            <div class="mb-3">
            <label>Senders Addres</label>
            <input type="text" name="senders_address" value="<?=$customer['senders_address'];?>" class="form-control">
            </div>
            <div class="mb-3">
            <label>Receivers Address</label>
            <input type="text" name="receivers_address" value="<?=$customer['receivers_address'];?>" class="form-control">
            </div>
            <div class="mb-3">
            <label>Customers Items</label>
            <input type="text" name="items" value="<?=$customer['items'];?>" class="form-control">
            </div>
            <div class="mb-3">
            <label>Customers Amount</label>
            <input type="text" name="amount" value="<?=$customer['amount'];?>" class="form-control">
            </div>
            <div class="mb-3">
            <label>Description about the parcel</label>
            <input type="text" name="description" value="<?=$customer['description'];?>" class="form-control">
            </div>
            <div class="mb-3">
            <label>Customers Status</label>
            <input type="text" name="status" value="<?=$customer['status'];?>" class="form-control">
            </div>
            <div class="mb-3">
              <button type="submit" name="update_customer" class="btn btn-primary">Update Student</button>
            </div>
          </form>
          <?php
            }else
            {
              echo "<h4>No Such Id Found<h4>";
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
    
<?php include('includes/footer.php');?>
