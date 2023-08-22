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
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            height: 100px;
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
            $pet_name = $_POST['pet_name'];
            $pet_type = $_POST['pet_type'];
            $pet_breed = $_POST['pet_breed'];
            $pet_color = $_POST['pet_color'];
            $pet_remarks = $_POST['pet_remarks'];
            $owner_name = $_POST['owner_name'];
            $owner_phone = $_POST['owner_phone'];
            $owner_email = $_POST['owner_email'];
            
            // Update the lost pet record in the database
            $query = "UPDATE lost_pet SET pet_name = '$pet_name', pet_type = '$pet_type', pet_breed = '$pet_breed', pet_color = '$pet_color', pet_remarks = '$pet_remarks', owner_name = '$owner_name', owner_phone = '$owner_phone', owner_email = '$owner_email' WHERE pet_id = '$pet_id'";
            
            if(mysqli_query($con, $query)) {
                // Update successful, redirect to the lost pets page
                header("Location: lost pet form.php");
                exit();
            } else {
                // Display an error message if the update fails
                echo "Error updating pet record: " . mysqli_error($con);
            }
        }
        
        // Get the pet record from the database
        $result = mysqli_query($con, "SELECT * FROM lost_pet WHERE pet_id = '$pet_id'");
        
        // Check if the pet record exists
        if(mysqli_num_rows($result) > 0) {
            // Display the pet record in a form for editing
            $row = mysqli_fetch_array($result);
            ?>
            
            <h2>Edit Lost Pet Record</h2>
            
            <form action="" method="post">
                <input type="hidden" name="pet_id" value="<?php echo $row['pet_id']; ?>">
                <label for="pet_name">Pet Name:</label>
                <input type="text" name="pet_name" value="<?php echo $row['pet_name']; ?>"><br>
                <label for="pet_type">Pet Type:</label>
                <input type="text" name="pet_type" value="<?php echo $row['pet_type']; ?>"><br>
                <label for="pet_breed">Pet Breed:</label>
                <input type="text" name="pet_breed" value="<?php echo $row['pet_breed']; ?>"><br>
                <label for="pet_color">Pet Color:</label>
                <input type="text" name="pet_color" value="<?php echo $row['pet_color']; ?>"><br>
                <label for="pet_remarks">Additional Remarks:</label>
                <textarea name="pet_remarks"><?php echo $row['pet_remarks']; ?></textarea><br>
                <label for="owner_name">Owner Name:</label>
                <input type="text" name="owner_name" value="<?php echo $row['owner_name']; ?>"><br>
                <label for="owner_phone">Phone Number:</label>
                <input type="text" name="owner_phone" value="<?php echo $row['owner_phone']; ?>"><br>
                <label for="owner_email">Email:</label>
                <input type="text" name="owner_email" value="<?php echo $row['owner_email']; ?>"><br>
                <input type="submit" value="Update">
            </form>
            
            <?php
        } else {
            // Display an error message if the pet record doesn't exist
            echo "Pet record not found.";
        }
        
        // Close the database connection
        mysqli_close($con);
    } else {
        // Redirect to the lost pets page if no pet ID is passed in the URL
        header("Location: lost pet form.php");
    }
?>
