<?php
    // Check if a pet ID was provided
    if (isset($_GET['id'])) {
        $adoption_id = $_GET['id'];

        // Connect to the database
       include("conn.php");

        // Build the SQL query to delete the pet record
        $query = "DELETE FROM adoption_table WHERE adoption_id='$adoption_id'";

        if(mysqli_query($con, $query)) {
            // Update successful, redirect to the lost pets page
            header("Location: adoption.php");
            exit();
        } else {
            echo "Error deleting record: " . mysqli_error($con);
        }

        // Close the database connection
        mysqli_close($con);
    } else {
        echo "No pet ID provided";
    }
?>