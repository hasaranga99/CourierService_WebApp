<?php
include('config/app.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container mt-4">
    <?php include('message.php'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Customer Details
                        <a href="customer-create.php" class="btn btn-primary float-end">Add Customers</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Customer Name</th>
                                <th>Email</th>
                                <th>NIC</th>
                                <th>Phone Number</th>
                                <th>Reference</th>
                                <th>Senders Address</th>
                                <th>Receivers Address</th>
                                <th>Items</th>
                                <th>Amount</th>
                                <th>Description</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM customers";
                            $query_run = mysqli_query($db->conn, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $customer) {
                            ?>
                                    <tr>
                                        <td><?= $customer['id']; ?></td>
                                        <td><?= $customer['name']; ?></td>
                                        <td><?= $customer['email']; ?></td>
                                        <td><?= $customer['nic']; ?></td>
                                        <td><?= $customer['mobile_number']; ?></td>
                                        <td><?= $customer['reference']; ?></td>
                                        <td><?= $customer['senders_address']; ?></td>
                                        <td><?= $customer['receivers_address']; ?></td>
                                        <td><?= $customer['items']; ?></td>
                                        <td><?= $customer['amount']; ?></td>
                                        <td><?= $customer['description']; ?></td>
                                        <td><?= $customer['status']; ?></td>
                                        <td>
                                            <a href="customer-view.php?id=<?= $customer['id']; ?>" class="btn btn-info btn-sm">Print</a>
                                            <a href="customer-edit.php?id=<?= $customer['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                            <form action="" method="POST" class="d-inline">
                                                <button type="submit" name="delete_customer" value="<?= $customer['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "<h5> No Record Found </h5>";
                            }
                            ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
?>
