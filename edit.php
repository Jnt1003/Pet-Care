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
    $sql = "SELECT * FROM users WHERE userid = '$customerId'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    // Check if the customer exists
    if (!$row) {
        echo '<script>alert("Customer not found!");window.location.href="test.php";</script>';
        exit();
    }
} else {
    echo '<script>alert("Invalid request!");window.location.href="test.php";</script>';
    exit();
}

// Handle form submission
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phonenum = $_POST['phonenum'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    // Assign the value of $customerId to $userid
    $userid = $customerId;

    // Update the customer details in the database
    $updateSql = "UPDATE users SET firstname = '$firstname', lastname = '$lastname', phonenum = '$phonenum', email = '$email', Gender = '$gender', password = '$password' WHERE userid = '$userid'";
    $updateResult = mysqli_query($conn, $updateSql);

    if ($updateResult) {
        echo '<script>alert("Customer details updated successfully!");window.location.href="test.php";</script>';
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
            <label for="firstname">FirstName:</label>
            <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>" required>

            <label for="lastname">LastName:</label>
            <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>" required>

            <label for="phonenum">Phone Number:</label>
            <input type="text" name="phonenum" value="<?php echo $row['phonenum']; ?>" required>

            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo $row['email']; ?>" required>

            <label for="password">Password:</label>
			<textarea name="password" required><?php echo $row['password']; ?></textarea>

            <label for="gender">Gender:</label>
<input type="radio" name="gender" value="Male" <?php if ($row['gender'] == 'Male') echo 'checked'; ?>> Male
<input type="radio" name="gender" value="Female" <?php if ($row['gender'] == 'Female') echo 'checked'; ?>> Female


<div class="btn-container">
	<button type="submit" name="submit">Update</button>
</div>
</form>
</div>
</body>
</html>
