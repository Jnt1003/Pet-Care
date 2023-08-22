<!DOCTYPE html>
<html>
<head>
    <title>Delete Booking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f1f1f1;
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

        p {
            text-align: center;
            margin-bottom: 20px;
        }

        .btn-container {
            text-align: center;
        }

        .btn-container button {
            padding: 10px 20px;
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Delete Booking</h2>
        <?php
        // Include the database connection file
        include("conn.php");

        // Check if the ID parameter is present in the URL
        if (isset($_GET['id'])) {
            $customerID = $_GET['id'];

            // Delete the record from the database
            $sql = "DELETE FROM users WHERE userid ='$customerID'";
            if (mysqli_query($conn, $sql)) {
                echo "<p style='color: green;'>Record deleted successfully.</p>";
            } else {
                echo "<p style='color: red;'>Error deleting record: " . mysqli_error($conn) . "</p>";
            }
        } else {
            echo "<p style='color: red;'>Invalid request. Please provide a valid ID.</p>";
        }

        // Close the database connection
        mysqli_close($conn);
        ?>

        <div class="btn-container">
            <button onclick="window.location.href = 'test.php';">Go Back</button>
        </div>
    </div>
</body>
</html>
