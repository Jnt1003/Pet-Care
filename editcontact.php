<?php
session_start();
if (!isset($_SESSION['AdminID'])) {
    echo '<script>alert("Please Login!");window.location.href="login.php";</script>';
    exit();
}

include("conn.php");

if (isset($_GET['id'])) {
    $customerId = $_GET['id'];

    // Retrieve the customer details from the database
    $sql = "SELECT * FROM messages WHERE id = '$customerId'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    // Check if the customer exists
    if (!$row) {
        echo '<script>alert("Customer not found!");window.location.href="contactdetails.php";</script>';
        exit();
    }
} else {
    echo '<script>alert("Invalid request!");window.location.href="contactdetails.php";</script>';
    exit();
}

// Handle form submission
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Assign the value of $customerId to $userid
    $userid = $customerId;

    // Update the customer details in the database
    $updateSql = "UPDATE messages SET name = '$name', email = '$email', message = '$message' WHERE id = '$userid'";

    $updateResult = mysqli_query($conn, $updateSql);

    if ($updateResult) {
        echo '<script>alert("Customer details updated successfully!");window.location.href="contactdetails.php";</script>';
        exit();
    } else {
        echo '<script>alert("Failed to update customer details!");</script>';
    }
}


mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
			background-image: url("your-image.jpg");
        	background-repeat: no-repeat;
        	background-position: center;
        	background-size: cover;
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
            max-width: 400px;
            margin: 0 auto;
			background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        .btn-container {
            text-align: center;
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
        <h2>Edit Customer Details</h2>
        <form action="" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo $row['name']; ?>" required>

            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo $row['email']; ?>" required>

            <label for="message">Message:</label>
			<textarea name="message" required><?php echo $row['message']; ?></textarea>


<div class="btn-container">
<button type="submit" name="submit">Update</button>

</div>
</form>
</div>
</body>
</html>
