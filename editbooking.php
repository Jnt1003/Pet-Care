<!doctype html>
<html>
<head>
    <title>Edit Pet Supply Booking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f1f1f1;
        }
        #video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }

        .btn-container button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<video id="video-background" autoplay loop muted>
        <source src="movie.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="container">
        <h2>Edit Pet Supply Booking</h2>

        <?php
include("conn.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $product_id = $_POST['product_id'];
    $qtn = $_POST['qtn'];
    $delivery = $_POST['delivery'];
    $shipping_address = $_POST['shipping_address'];
    $paid = $_POST['paid'];

    // Update the database record
    $customerID = $_POST['id']; // Retrieve the customer ID from the form

    $sql = "UPDATE user_orders SET product_id='$product_id', qtn='$qtn', 
            delivery='$delivery', shipping_address='$shipping_address', paid='$paid' 
            WHERE id ='$customerID'";

    if (mysqli_query($conn, $sql)) {
        echo "<p style='color: green;'>Record updated successfully.</p>";
        echo "<script>setTimeout(function() { window.location.href = 'Booking.php'; }, 2000);</script>";
    } else {
        echo "<p style='color: red;'>Error updating record: " . mysqli_error($conn) . "</p>";
    }

    mysqli_close($conn);
} else {
    // Retrieve the customer ID from the query parameter
    if (isset($_GET['id'])) {
        $customerID = $_GET['id'];

    // Retrieve the record from the database
    $sql = "SELECT * FROM user_orders WHERE id ='$customerID'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    // Display the edit form
    ?>
    <form action="" method="post">
        <label for="product_id">Product ID:</label>
        <input type="text" name="product_id" value="<?php echo $row['product_id']; ?>">

        <label for="qtn">Quantity:</label>
        <input type="number" name="qtn" value="<?php echo $row['qtn']; ?>" required>

        <label for="delivery">Delivery status:</label>
        <input type="text" name="delivery" value="<?php echo $row['delivery']; ?>" required>

        <label for="shipping_address">Customer Address:</label>
        <input type="text" name="shipping_address" value="<?php echo $row['shipping_address']; ?>" required>

        <label for="paid">Total Price:</label>
        <input type="text" name="paid" value="<?php echo $row['paid']; ?>" required>

        <input type="hidden" name="id" value="<?php echo $customerID; ?>"> <!-- Add hidden input for customer ID -->

        <div class="btn-container">
            <button type="submit">Update</button>
        </div>
    </form>
    <?php
}
}
?>

</div>
</body>
</html>

