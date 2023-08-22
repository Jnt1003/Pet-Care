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
        $adoption_id = $_GET['id'];
        
        // Connect to the database
        include("conn.php");
        
        // Check if the form is submitted
        if(isset($_POST['adoption_id'])) {
            // Retrieve the form data
            $adoption_id = $_POST['adoption_id'];
            $adoption_name = $_POST['adoption_name'];
            $adoption_breed = $_POST['adoption_breed'];
            $adoption_color = $_POST['adoption_color'];
            $adoption_remarks = $_POST['adoption_remarks'];
            
            // Update the lost pet record in the database
            $query = "UPDATE adoption_table SET  adoption_name = '$adoption_name', adoption_breed = '$adoption_breed', adoption_color = '$adoption_color', adoption_remarks = '$adoption_remarks' WHERE adoption_id = '$adoption_id'";
            
            if(mysqli_query($conn, $query)) {
                // Update successful, redirect to the lost pets page
                header("Location: adoption.php");
                exit();
            } else {
                // Display an error message if the update fails
                echo "Error updating pet record: " . mysqli_error($con);
            }
        }
        
        // Get the pet record from the database
        $result = mysqli_query($conn, "SELECT * FROM adoption_table WHERE adoption_id = '$adoption_id'");
        
        // Check if the pet record exists
        if(mysqli_num_rows($result) > 0) {
            // Display the pet record in a form for editing
            $row = mysqli_fetch_array($result);
            ?>
            
            <h2>Edit Lost Pet Record</h2>
    
    <form action="" method="post">
        <input type="hidden" name="adoption_id" value="<?php echo $row['adoption_id']; ?>">
        <label for="adoption_name">Adoption Name:</label>
        <input type="text" name="adoption_name" value="<?php echo $row['adoption_name']; ?>"><br>
        <label for="adoption_breed">Adoption Breed:</label>
        <input type="text" name="adoption_breed" value="<?php echo $row['adoption_breed']; ?>"><br>
        <label for="adoption_color">Adoption color:</label>
        <input type="text" name="adoption_color" value="<?php echo $row['adoption_color']; ?>"><br>
        <label for="adoption_remarks">Additional Remarks:</label>
        <textarea name="adoption_remarks"><?php echo $row['adoption_remarks']; ?></textarea><br>

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
        header("Location: adoption.php");
    }
?>