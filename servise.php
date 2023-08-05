
    <?php
    include('config/app.php');
    include('includes/header.php');
    include('includes/navbar.php');
    ?>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php include('message.php'); ?>
                <h3 class="text-center">Hello</h3>
                <form action="servise.php" method="GET" class="text-center">
                    <div class="mb-3">
                        <label for="search_id" class="form-label">Search by Customer ID:</label>
                        <input type="text" id="search_id" name="id" class="form-control" placeholder="Enter Customer ID...">
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
                <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $customer = getCustomerDetails($id, $db->conn);

                    if ($customer) {
                ?>
                    <div class="mt-5">
                        <h2 class="text-center">Customer Details</h2>
                        <p>Customer ID: <?php echo $customer['id']; ?></p>
                        <p>Name: <?php echo $customer['name']; ?></p>
                        <p>Email: <?php echo $customer['email']; ?></p>
                        <p>NIC: <?php echo $customer['nic']; ?></p>
                        <!-- Add other customer details as needed -->
                    </div>
                <?php
                    } else {
                        echo "<h4 class='text-center mt-5'>No Customer Found</h4>";
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <?php
    include('includes/footer.php');
    ?>

