<?php
    // Check if a pet ID was provided
    if (isset($_GET['id'])) {
        $pet_id = $_GET['id'];

        // Connect to the database
       include("conn.php");

        // Build the SQL query to delete the pet record
        $query = "DELETE FROM lostpet WHERE pet_id='$pet_id'";

        if(mysqli_query($conn, $query)) {
            // Update successful, redirect to the lost pets page
            header("Location: lost pet form.php");
            exit();
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }

        // Close the database connection
        mysqli_close($conn);
    } else {
        echo "No pet ID provided";
    }
?>