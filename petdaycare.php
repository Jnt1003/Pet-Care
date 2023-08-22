<!DOCTYPE html>
<html>
<head>
  <title>Pet Adoption Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		  * {
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    margin: 0;
}

.header {
    padding: 100px;
    text-align: center;
    background-image: url("download.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    color: white;
    font-size: 30px;
    text-shadow: 2px 2px 5px red;
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

.side {
    flex: 15%;
    background-color: #f1f1f1;
    padding: 20px;
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
.edit-button {
  display: inline-block;
  padding: 8px 12px;
  background-color: grey;
  color: white;
  text-decoration: none;
  border-radius: 4px;
}

.edit-button:hover {
  background-color: #45a049;
}
.delete-button {
  display: inline-block;
  padding: 8px 12px;
  background-color: #f44336;
  color: white;
  text-decoration: none;
  border-radius: 4px;
}

.delete-button:hover {
  background-color: #d32f2f;
}



table {
    background-color: white;
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

.fade-in-row {
    animation: fadeIn 0.5s ease-in-out;
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
</head>
<body>
    <!--navigation bar-->
<div class="nav">
    <ul>
	<li><a href="test.php">Customer Details</a></li>
	<li><a href="Booking.php">Pet Supply Details</a></li>
  <li><a href="contactdetails.php">Contact Details</a></li>
    <li><a href="lost pet form.php">Lost Pet</a></li>
    <li><a href="adoption.php">Adoption</a></li>
    <li><a href="petdaycare.php">Pet Day Care</a></li>
    <li><a href="admin.php" id="logout">Logout</a></li>

	</ul>
	</div>
        <!--header-->
<div class="header">
	<h1>Pet Day Care</h1>
	</div>


<div class="main">
		<div style="text-align:center">
            <?php
            include("conn.php");
            $sql = "SELECT * FROM reservations";
            $result = mysqli_query ($conn, $sql);
       ?>	

<h1>Pet Day Care Information</h2>
<!DOCTYPE html>
<html>
<head>
    <title>Pet Daycare Form</title>
    <!-- Add your CSS styling and any necessary scripts here -->
</head>
<body>
    <h1>Pet Daycare Form</h1>
    <form method="post">
        <label for="pet_ID">Pet ID:</label>
        <input type="text" id="pet_id" name="pet_id" required><br><br>

        <label for="customername">Customer Name:</label>
        <input type="text" id="customername" name="customername" required><br><br>

        <label for="petname">Pet Name:</label>
        <input type="text" id="petname" name="petname" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phonenumber">Owner Phone:</label>
        <input type="text" id="phonenumber" name="phonenumber" required><br><br>

        <label for="owner_email">pet:</label>
        <input type="text" id="pet" name="pet" required><br><br>

        <label for="bookingdate">Booking Date:</label>
        <input type="date" id="bookingdate" name="bookingdate" required><br><br>

        <label for="bookingtime">Booking Time:</label>
        <input type="time" id="bookingtime" name="bookingtime" required><br><br>

        <input type="submit" name="submit" value="Submit">
        <?php
if (isset($_POST['submit'])) {
    // Check if all fields are filled
    if (empty($_POST['pet_id']) || empty($_POST['customername']) || empty($_POST['petname'])  || empty($_POST['email']) || empty($_POST['phonenumber']) || empty($_POST['pet']|| empty($_POST['bookingdate']) || empty($_POST['bookingtime']) )) {
        echo '<script>alert("Please fill all fields!");window.location.href="petdaycare_table.php";</script>';
        exit();
    } else {
        // Include database connection file
        include("conn.php");

        // Prepare and execute SQL query
        $sql = "INSERT INTO petdaycare_table (pet_id, customername, petname, email, phonenumber, pet,bookingdate,bookingtime) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt, "ssssssss", $_POST['pet_id'], $_POST['customername'], $_POST['petname'], $_POST['email'], $_POST['phonenumber'], $_POST['pet'], $_POST['bookingdate'], $_POST['bookingtime']);
        if(mysqli_stmt_execute($stmt)){
            echo '<script>alert("Successfully Entered!");window.location.href="petdaycare";</script>';
        } else {
            die("Error: " . mysqli_error($con));
        }

        // Close database connection
        mysqli_stmt_close($stmt);
        mysqli_close($con);
    }
}
?>
    </form>
    <h2>Pet Day Care</h2>
<table id="customer_login">
        <table style="width:100%; border-collapse: collapse;">
  <tr style="background-color: #f2f2f2;">
    <th style="border: 1px solid #ddd; padding: 8px;">Pet ID</th>
    <th style="border: 1px solid #ddd; padding: 8px;">Customer Name</th>
    <th style="border: 1px solid #ddd; padding: 8px;">Pet Name</th>
    <th style="border: 1px solid #ddd; padding: 8px;">Email</th>
    <th style="border: 1px solid #ddd; padding: 8px;">Phone No</th>
    <th style="border: 1px solid #ddd; padding: 8px;">Pet</th>
    <th style="border: 1px solid #ddd; padding: 8px;">Booking Date</th>
    <th style="border: 1px solid #ddd; padding: 8px;">Booking Time</th> 

  <?php
                while ($row = mysqli_fetch_array($result))
                {
                    echo '<tr>';
                    echo '<td style="border: 1px solid #ddd; padding: 8px;">'.$row['pet_id'].'</td>';
                    echo '<td style="border: 1px solid #ddd; padding: 8px;">'.$row['customername'].'</td>';
                    echo '<td style="border: 1px solid #ddd; padding: 8px;">'.$row['petname'].'</td>';
                    echo '<td style="border: 1px solid #ddd; padding: 8px;">'.$row['email'].'</td>';
                    echo '<td style="border: 1px solid #ddd; padding: 8px;">'.$row['phonenumber'].'</td>';
                    echo '<td style="border: 1px solid #ddd; padding: 8px;">'.$row['pet'].'</td>';
                    echo '<td style="border: 1px solid #ddd; padding: 8px;">'.$row['bookingdate'].'</td>';
                    echo '<td style="border: 1px solid #ddd; padding: 8px;">'.$row['bookingtime'].'</td>';
                    echo '<td style="border: 1px solid #ddd; padding: 8px;"><a href="edit_daycare.php?id='.$row['pet_id'].'">Edit</a></td>';
			  echo '<td style="border: 1px solid #ddd; padding: 8px;"><a href="delete_daycare.php?id='.$row['pet_id'].'">Delete</a></td>';
              echo '</tr>';
                                    
                }
                mysqli_close($conn);
            ?>

</body>
</html>
