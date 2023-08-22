<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        h2 {
            color: #333;
            text-align: center;
            margin-top: 0;
            padding-top: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
<?php
    // Check if a pet ID is passed in the URL
    if(isset($_GET['id'])) {
        // Get the pet ID from the URL
        $pet_id = $_GET['id'];
        
        // Connect to the database
        include("conn.php");
        
        // Check if the form is submitted
        if(isset($_POST['pet_id'])) {
            // Retrieve the form data
            $pet_id = $_POST['pet_id'];
            $customername = $_POST['customername'];
            $petname = $_POST['petname'];
            $email = $_POST['email'];
            $phonenumber = $_POST['phonenumber'];
            $pet = $_POST['pet'];
            $bookingdate = $_POST['bookingdate'];
            $bookingtime = $_POST['bookingtime'];
            
            // Update the lost pet record in the database
            $query = "UPDATE reservations SET customername = '$customername', petname = '$petname', email = '$email', phonenumber = '$phonenumber', pet = '$pet', bookingdate = '$bookingdate', bookingtime = '$bookingtime' WHERE pet_id = '$pet_id'";
            
            if(mysqli_query($conn, $query)) {
                // Update successful, redirect to the lost pets page
                header("Location: petdaycare.php");
                exit();
            } else {
                // Display an error message if the update fails
                echo "Error updating pet record: " . mysqli_error($con);
            }
        }
        
        // Get the pet record from the database
        $result = mysqli_query($conn, "SELECT * FROM reservations WHERE pet_id = '$pet_id'");
        
        // Check if the pet record exists
        if(mysqli_num_rows($result) > 0) {
            // Display the pet record in a form for editing
            $row = mysqli_fetch_array($result);
            ?>
            
            <h2>Edit daycare Record</h2>
            
            <form action="" method="post">
            <input type="hidden" name="pet_id" value="<?php echo $row['pet_id']; ?>">


        <label for="customername">Customer Name:</label>
        <input type="text" id="customername" name="customername" required><br>

        <label for="petname">Pet Name:</label>
        <input type="text" id="petname" name="petname" required><br>

        <label for="email">Owner Mail:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="phonenumber">Owner Phone:</label>
        <input type="text" id="phonenumber" name="phonenumber" required><br>

        <label for="pet">Pet:</label>
        <input type="text" id="pet" name="pet" required><br>

        <label for="bookingdate">Booking Date:</label>
        <input type="date" id="bookingdate" name="bookingdate" required><br>

        <label for="bookingtime">Booking Time:</label>
        <input type="time" id="bookingtime" name="bookingtime" required><br>

        <input type="submit" name="submit" value="Submit">
            </form>
            
            <?php
        } else {
            // Display an error message if the pet record doesn't exist
            echo "Pet record not found.";
        }
        
        // Close the database connection
        mysqli_close($conn);
    } else {
        // Redirect to the lost pets page if no pet ID is passed in the URL
        header("Location: petdaycare.php");
    }
?>