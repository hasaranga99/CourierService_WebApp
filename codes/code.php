<?php

// // Function to get customer details by ID
// if(isset($_GET['search_btn']))
// {
// function getCustomerDetails($id, $conn)
// {
//     $id = mysqli_real_escape_string($db->conn, $id);
//     $query = "SELECT * FROM customers WHERE id = '$id'";
//     $query_run = mysqli_query($id->conn, $query);

//     if (mysqli_num_rows($query_run) > 0) {
//         $customer = mysqli_fetch_assoc($query_run);
//         return $customer;
//     } else {
//         return null;
//     }
// }
// }

function getCustomerDetails($id, $conn)
{
    $id = mysqli_real_escape_string($conn, $id);
    $query = "SELECT * FROM customers WHERE id = '$id'";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run) > 0) {
        $customer = mysqli_fetch_assoc($query_run);
        return $customer;
    } else {
        return null;
    }
}




if(isset($_POST['delete_customer']))
{
  $id = mysqli_real_escape_string($db->conn,$_POST['delete_customer']);
  $query = "DELETE FROM customers WHERE id = '$id'";
  $query_run = mysqli_query($db->conn, $query);

  if($query_run)
    {
        // $_SESSION['message'] = "Customer Delete Successfully";
        // header("Location: customers.php");
        // exit(0);
        redirect("Customer Updated Successfully","customers.php");
    }
    else
    {
        // $_SESSION['message'] = "Customer Not Deleted";
        // header("Location: ustomer-edit.php");
        // exit(0);
        redirect("Customer Not Updated","customers.php");
    }
}



if(isset($_POST['update_customer']))
{
    $id = mysqli_real_escape_string($db->conn,$_POST['id']);

    $name = mysqli_real_escape_string($db->conn,$_POST['name']);
    $email = mysqli_real_escape_string($db->conn,$_POST['email']);
    $nic = mysqli_real_escape_string($db->conn,$_POST['nic']);
    $mobile_number  = mysqli_real_escape_string($db->conn,$_POST['mobile_number']);
    $reference = mysqli_real_escape_string($db->conn,$_POST['reference']);
    $senders_address = mysqli_real_escape_string($db->conn,$_POST['senders_address']);
    $receivers_address = mysqli_real_escape_string($db->conn,$_POST['receivers_address']);
    $items = mysqli_real_escape_string($db->conn,$_POST['items']);
    $amount = mysqli_real_escape_string($db->conn,$_POST['amount']);
    $description = mysqli_real_escape_string($db->conn,$_POST['description']);
    $status = mysqli_real_escape_string($db->conn,$_POST['status']);

    $query = "UPDATE customers SET name='$name',email='$email',nic='$nic', mobile_number ='$mobile_number',reference='$reference',senders_address='$senders_address',receivers_address='$receivers_address',items='$items',amount='$amount',description='$description',status='$status' WHERE id='$id' ";
    $query_run = mysqli_query($db->conn, $query);

    if($query_run)
    {
        // $_SESSION['message'] = "Customer Updated Successfully";
        // header("Location: customers.php");
        // exit(0);
        redirect("Customer Updated Successfully","customers.php");
    }
    else
    {
        // $_SESSION['message'] = "Customer Not Updated";
        // header("Location: ustomer-edit.php");
        // exit(0);
        redirect("Customer Not Updated","customer-edit.php");
    }
}

if(isset($_POST['save_customer']))
{
    $name = mysqli_real_escape_string($db->conn,$_POST['name']);
    $email = mysqli_real_escape_string($db->conn,$_POST['email']);
    $nic = mysqli_real_escape_string($db->conn,$_POST['nic']);
    $mobile_number  = mysqli_real_escape_string($db->conn,$_POST['mobile_number']);
    $reference = mysqli_real_escape_string($db->conn,$_POST['reference']);
    $senders_address = mysqli_real_escape_string($db->conn,$_POST['senders_address']);
    $receivers_address = mysqli_real_escape_string($db->conn,$_POST['receivers_address']);
    $items = mysqli_real_escape_string($db->conn,$_POST['items']);
    $amount = mysqli_real_escape_string($db->conn,$_POST['amount']);
    $description = mysqli_real_escape_string($db->conn,$_POST['description']);
    $status = mysqli_real_escape_string($db->conn,$_POST['status']);

    $query = "INSERT INTO customers (name,email,nic,mobile_number,reference,senders_address,receivers_address,items,amount,description,status) VALUES ('$name','$email','$nic','$mobile_number','$reference','$senders_address','$receivers_address','$items','$amount','$description','$status')";

    $query_run = mysqli_query($db->conn, $query);
    if($query_run)
    {
        // $_SESSION['message'] = "Customer created Successfully";
        // header("Location: customers.php");
        // exit(0);
        redirect("Customer created Successfully","customers.php");
    }
    else
    {
        // $_SESSION['message'] = "Student Not Created";
        // header("Location: customer-create.php");
        // exit(0);
        redirect("Customer not created ","customer-create.php");

    }
}

?>