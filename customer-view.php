<?php
include('config/app.php');

include('includes/printheader.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<style>
    /* Hide the buttons when the page is printed */
    @media print {
        .print-button, .download-pdf-button {
            display: none;
        }
    }
</style>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Customer Bill Details</h4>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_GET['id'])) {
                        $id = mysqli_real_escape_string($db->conn, $_GET['id']);
                        $query = "SELECT * FROM customers WHERE id = '$id'";
                        $query_run = mysqli_query($db->conn, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                            $customer = mysqli_fetch_array($query_run);
                    ?>
                            <div class="invoice-header">
                                <img class="invoice-logo" src="assets/images/logo.jpg" alt="Company Logo">
                                <div class="invoice-info">
                                    <p>Courier Pvt Ltd</p>
                                    <p>Customer Address : <?= $customer['receivers_address']; ?></p>
                                    <p>Senders Address<?= $customer['senders_address']; ?></p>
                                    <p>Customer Contact: <?= $customer['mobile_number']; ?> / Customer Email: <?= $customer['email']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="bill-info">
                                        <div class="mb-3">
                                            <label class="form-label">Customer Name : <?= $customer['name']; ?></label>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Item : <?= $customer['items']; ?></label>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Product Description : <?= $customer['description']; ?></label>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Price : <?= $customer['amount']; ?></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="billing-footer text-center mt-5">
                                <p>Thank you for choosing our services!</p>
                                <!-- Add the Print button -->
                                <button class="print-button" onclick="window.print()">Print</button>
                                <!-- Add the Download PDF button -->
                                <!-- <button class="download-pdf-button" onclick="downloadInvoiceAsPDF()">Download PDF</button> -->
                            </div>
                    <?php
                        } else {
                            echo "<h4>No Such Id Found</h4>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>


