<!-- customer_details.php -->
<?php
include('config/app.php'); // Include the database connection and function file

include('includes/header.php');
include('includes/navbar.php');
?>

<?php
if (isset($_GET['id'])) {
    $id= $_GET['id'];
    $customer = getCustomerDetails($id, $db->conn);

    if ($customer) {
        ?>
        
            <div>
                <h2>Customer Details</h2>
                <p>Customer ID: <?php echo $customer['id']; ?></p>
                <p>Name: <?php echo $customer['name']; ?></p>
                <p>Email: <?php echo $customer['email']; ?></p>
                <p>NIC: <?php echo $customer['nic']; ?></p>
                <!-- Add other customer details as needed -->
            </div>
        
        <?php
    } else {
        echo "<h4>No Customer Found</h4>";
    }
}
?>

<?php
include('includes/footer.php');
?>
