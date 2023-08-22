<!doctype html>
<html>
<head>
    <title>Payment Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f1f1f1;
        }
        .header {
        padding: 100px;
        text-align: center;
        background-image: url("Pet-Cares.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        color: white;
        font-size: 30px;
        text-shadow: 2px 2px 5px red;
    }

        .container {
            max-width: 800px;
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

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
        .nav {
    background-color: #333;
    display: flex;
    justify-content: space-between;
    padding: 10px;
}

.nav a {
    color: white;
    padding: 10px 14px;
    text-decoration: none;
    text-align: center;
}

.nav a:hover {
    background-color: #ddd;
    color: black;
}

.row {
    display: flex;
    flex-wrap: wrap;
}


.main {
    border-radius: 5px;
    background-image: url("pei2.png");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    padding: 10px;
    width: 100%;
    height: 100%;
}

.nav ul {
    text-align: left;
    margin: 0;
    display: flex;
    padding: 5px 4px 8px 0;
    background-color: red;
    border-radius: 5px;
}

.nav ul li {
    display: inline-block;
    margin-right: -4px;
    position: relative;
    padding: 10px 10px;
    color: white;
    font-weight: bold;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.2s ease-in-out;
}

.nav ul li ul li {
    background: red;
    display: block;
    color: white;
    width: 200px;
    padding: 10px;
    font-size: 14px;
    border-bottom: 1px solid white;
    transition: background-color 0.2s ease-in-out;
}
    </style>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Get the logout button element
      var logoutButton = document.getElementById("logout");

      // Add a click event listener to the logout button
      logoutButton.addEventListener("click", function(event) {
        event.preventDefault(); // Prevent the default link behavior

        // Perform logout actions here
        // For example: redirect to a login page
        window.location.href = "admin.php"; // Replace "login.php" with your actual login page URL
      });
    });
  </script>
</head>
<body>
<div class="nav">
    <ul>
	<li><a href="test.php">Customer Details</a></li>
	<li><a href="Booking.php">Pet Supply Details</a></li>
	<li><a href="payment.php">Payment Details</a></li>
    <li><a href="lost pet form.php">Lost Pet</a></li>
    <li><a href="adoption.php">Adoption</a></li>
    <li><a href="petdaycare.php">Pet Day Care</a></li>
    <li><a href="admin.php" id="logout">Logout</a></li>
	</ul>
	</div>
    <!--header-->
    <div class="header">
	<h1>Admin Dashboard</h1>
	</div>
    <div class="container">
        <h2>Payment Details</h2>
        <?php
        include("conn.php");

        // Retrieve payment details
        $sql = "SELECT * FROM payment";
        $result = mysqli_query($conn, $sql);

        // Display payment details
        echo "<table>
                <tr>
                    <th>Customer ID</th>
                    <th>Customer Name</th>
                    <th>Total Price</th>
                    <th>Payment Status</th>
                </tr>";
                if ($result === false) {
                    echo "Query error: " . mysqli_error($conn);
                    exit; // Terminate script execution
                }

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['CustomerID']}</td>
                    <td>{$row['Customer_name']}</td>
                    <td>{$row['Total_Price']}</td>
                    <td>{$row['Payment_status']}</td>
                </tr>";
        }

        echo "</table>";

        mysqli_close($conn);
        ?>
    </div>
</body>
</html>
