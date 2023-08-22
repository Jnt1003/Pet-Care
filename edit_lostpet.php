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
            $petname = $_POST['petname'];
            $petbreed = $_POST['petbreed'];
            $ownername = $_POST['ownername'];
            $contactinfo = $_POST['contactinfo'];
            $lastseenlocation = $_POST['lastseenlocation'];
            $datelost = $_POST['datelost'];
            $additionalinfo = $_POST['additionalinfo'];
            
            // Update the lost pet record in the database
            $query = "UPDATE lostpet SET petname = '$petname', petbreed = '$petbreed', ownername = '$ownername', contactinfo = '$contactinfo', lastseenlocation = '$lastseenlocation', datelost = '$datelost', additionalinfo = '$additionalinfo' WHERE pet_id = '$pet_id'";
            
            if(mysqli_query($conn, $query)) {
                // Update successful, redirect to the lost pets page
                header("Location: lost pet form.php");
                exit();
            } else {
                // Display an error message if the update fails
                echo "Error updating pet record: " . mysqli_error($conn);
            }
        }
        
        // Get the pet record from the database
        $result = mysqli_query($conn, "SELECT * FROM lostpet WHERE pet_id = '$pet_id'");
        
        // Check if the pet record exists
        if(mysqli_num_rows($result) > 0) {
            // Display the pet record in a form for editing
            $row = mysqli_fetch_array($result);
            ?>
            
            <h2>Edit Lost Pet Record</h2>
            
            <form action="" method="post">
                <input type="hidden" name="pet_id" value="<?php echo $row['pet_id']; ?>">
                <label for="petname">Pet Name:</label>
                <input type="text" name="petname" value="<?php echo $row['petname']; ?>"><br>
                <label for="petbreed">Pet Breed:</label>
                <input type="text" name="petbreed" value="<?php echo $row['petbreed']; ?>"><br>
                <label for="ownername">Owner Name:</label>
                <input type="text" name="ownername" value="<?php echo $row['ownername']; ?>"><br>
                <label for="contactinfo">Contact info:</label>
                <input type="text" name="contactinfo" value="<?php echo $row['contactinfo']; ?>"><br>
                <label for="lastseenlocation">Last Seen:</label>
                <textarea name="lastseenlocation"><?php echo $row['lastseenlocation']; ?></textarea><br>
                <label for="datelost">Date Lost:</label>
                <input type="text" name="datelost" value="<?php echo $row['datelost']; ?>"><br>
                <label for="additionalinfo">Additional Info:</label>
                <input type="text" name="additionalinfo" value="<?php echo $row['additionalinfo']; ?>"><br>
                <input type="submit" value="Update">
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
        header("Location: lost pet form.php");
    }
?>
