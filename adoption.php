

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
	<h1>Pet Adoption</h1>
	</div>


<div class="main">
		<div style="text-align:center">
            <?php
            include("conn.php");
            $sql = "SELECT * FROM adoption_table";
            $result = mysqli_query ($conn, $sql);
       ?>	
<h1>Pet Adoption</h1>

<h2>Post Pet Adoption Information</h2>

<form method="post">
   <label for="adoption_id">Pet Id:</label>
  <input type="text" id="adoption_id" name="adoption_id"><br><br>

  <label for="adoption_name">Pet Name:</label>
  <input type="text" id="adoption_name" name="adoption_name"><br><br>

  <label for="adoption_breed">Pet Breed:</label>
  <input type="text" id="adoption_breed" name="adoption_breed"><br><br>

  <label for="adoption_color">Pet Color:</label>
  <input type="text" id="adoption_color" name="adoption_color"><br><br>

  <label for="adoption_remarks">Additional Remarks:</label>
  <textarea id="adoption_remarks" name="adoption_remarks"></textarea><br><br>

  <input type="submit" name="submit" value="Submit">
  <?php
if (isset($_POST['submit'])) {
    // Check if all fields are filled
    if (empty($_POST['adoption_id']) || empty($_POST['adoption_name']) || empty($_POST['adoption_breed']) || empty($_POST['adoption_color']) || empty($_POST['adoption_remarks'])) {
        echo '<script>alert("Please fill all fields!");window.location.href="adoption_table.php";</script>';
        exit();
    } else {
        // Include database connection file
        include("conn.php");

        // Prepare and execute SQL query
        $sql = "INSERT INTO adoption_table (adoption_id, adoption_name, adoption_breed, adoption_color, adoption_remarks) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sssss", $_POST['adoption_id'], $_POST['adoption_name'], $_POST['adoption_breed'], $_POST['adoption_color'], $_POST['adoption_remarks']);
        if(mysqli_stmt_execute($stmt)){
            echo '<script>alert("Successfully Entered!");window.location.href="adoption";</script>';
        } else {
            die("Error: " . mysqli_error($conn));
        }

        // Close database connection
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
}
?>
</form>



<table id="adoption">
        <table border= 5px>
        <table style="width:100%; border-collapse: collapse;">
  <tr style="background-color: #f2f2f2;">
    <th style="border: 1px solid #ddd; padding: 8px;">Adoption ID</th>
    <th style="border: 1px solid #ddd; padding: 8px;">Adoption Name</th>
    <th style="border: 1px solid #ddd; padding: 8px;">Adoption Breed</th>
    <th style="border: 1px solid #ddd; padding: 8px;">Adoption Color</th>
    <th style="border: 1px solid #ddd; padding: 8px;">Remarks</th>
    <th style="border: 1px solid #ddd; padding: 8px;">Edit</th>
    <th style="border: 1px solid #ddd; padding: 8px;">Delete</th>
  </tr>
  
             <?php
                while ($row = mysqli_fetch_array($result))
                { echo '<td style="border: 1px solid #ddd; padding: 8px;">'.$row['adoption_id'].'</td>';
                    echo '<td style="border: 1px solid #ddd; padding: 8px;">'.$row['adoption_name'].'</td>';
                    echo '<td style="border: 1px solid #ddd; padding: 8px;">'.$row['adoption_breed'].'</td>';
                    echo '<td style="border: 1px solid #ddd; padding: 8px;">'.$row['adoption_color'].'</td>';
                    echo '<td style="border: 1px solid #ddd; padding: 8px;">'.$row['adoption_remarks'].'</td>';
                    echo '<td style="border: 1px solid #ddd; padding: 8px;"><a href="edit_adopt.php?id='.$row['adoption_id'].'">Edit</a></td>';
			        echo '<td style="border: 1px solid #ddd; padding: 8px;"><a href="delete_adopt.php?id='.$row['adoption_id'].'">Delete</a></td>';
                    echo '</tr>';             
                }
                mysqli_close($conn);
            ?>
                  </table>



</body>
</html>