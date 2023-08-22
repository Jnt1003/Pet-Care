

<!DOCTYPE html>
<html>
<head>
  <title>Lost Pet Finder</title>
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

      logoutButton.addEventListener("click", function(event) {
        event.preventDefault(); 

        window.location.href = "admin.php"; 
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
	<h1>Lost Pet</h1>
	</div>


<div class="main">
		<div style="text-align:center">
            <?php
            include("conn.php");
            $sql = "SELECT * FROM lostpet";
            $result = mysqli_query ($conn, $sql);
       ?>	
<h1>Lost Pet Finder</h1>

<h2>Report a Lost Pet</h2>

<form method="post">
   <label for="pet_id">Pet Id:</label>
  <input type="text" id="pet_id" name="pet_id"><br><br>

  <label for="petname">Pet Name:</label>
  <input type="text" id="petname" name="petname"><br><br>

  <label for="petbreed">Pet Breed:</label>
  <input type="text" id="petbreed" name="petbreed"><br><br>

  <label for="ownername">Owner Name:</label>
  <input type="text" id="ownername" name="ownername"><br><br>

  <label for="contactinfo">Contact Info:</label>
  <input type="text" id="contactinfo" name="contactinfo"><br><br>

  <label for="lastseenlocation">Last Seen Location:</label>
  <textarea id="lastseenlocation" name="lastseenlocation"></textarea><br><br>

  <label for="datelost">Date lost:</label>
  <input type="date" id="datelost" name="datelost"><br><br>

  <label for="additionalinfo">Additional info:</label>
  <input type="text" id="additionalinfo" name="additionalinfo"><br><br>


  <input type="submit" name="submit" value="Submit">
  <?php
if (isset($_POST['submit'])) {
    // Check if all fields are filled
    if (empty($_POST['pet_id']) || empty($_POST['petname']) || empty($_POST['petbreed']) || empty($_POST['ownername']) || empty($_POST['contactinfo'])|| empty($_POST['lastseenlocation']) || empty($_POST['datelost']) || empty($_POST['additionalinfo'])) {
        echo '<script>alert("Please fill all fields!");window.location.href="lost_pet2.php";</script>';
        exit();
    } else {
        // Include database connection file
        include("conn.php");

        // Prepare and execute SQL query
        $sql = "INSERT INTO lostpet (pet_id, petname, petbreed, ownername, contactinfo, lastseenlocation, datelost, additionalinfo) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssssssss", $_POST['pet_id'], $_POST['petname'], $_POST['petbreed'], $_POST['ownername'], $_POST['contactinfo'], $_POST['lastseenlocation'], $_POST['datelost'], $_POST['additionalinfo']);
        if(mysqli_stmt_execute($stmt)){
            echo '<script>alert("Successfully Entered!");window.location.href="lost pet form.php";</script>';
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


<h2>Lost Pets</h2>
<table id="customer_login">
        <table style="width:100%; border-collapse: collapse;">
  <tr style="background-color: #f2f2f2;">
    <th style="border: 1px solid #ddd; padding: 8px;">Pet ID</th>
    <th style="border: 1px solid #ddd; padding: 8px;">Pet Name</th>
    <th style="border: 1px solid #ddd; padding: 8px;">Pet Breed</th>
    <th style="border: 1px solid #ddd; padding: 8px;">Owner Name</th>
    <th style="border: 1px solid #ddd; padding: 8px;">Contact info</th>
    <th style="border: 1px solid #ddd; padding: 8px;">Last Seen</th>
    <th style="border: 1px solid #ddd; padding: 8px;">Date Lost</th>
    <th style="border: 1px solid #ddd; padding: 8px;">Additional Info</th>
    <th style="border: 1px solid #ddd; padding: 8px;">Edit</th>
    <th style="border: 1px solid #ddd; padding: 8px;">Delete</th>
  </tr>


             <?php
                while ($row = mysqli_fetch_array($result))
                {

                    echo '<td style="border: 1px solid #ddd; padding: 8px;">'.$row['pet_id'].'</td>';
                    echo '<td style="border: 1px solid #ddd; padding: 8px;">'.$row['petname'].'</td>';
                    echo '<td style="border: 1px solid #ddd; padding: 8px;">'.$row['petbreed'].'</td>';
                    echo '<td style="border: 1px solid #ddd; padding: 8px;">'.$row['ownername'].'</td>';
                    echo '<td style="border: 1px solid #ddd; padding: 8px;">'.$row['contactinfo'].'</td>';
                    echo '<td style="border: 1px solid #ddd; padding: 8px;">'.$row['lastseenlocation'].'</td>';
                    echo '<td style="border: 1px solid #ddd; padding: 8px;">'.$row['datelost'].'</td>';
                    echo '<td style="border: 1px solid #ddd; padding: 8px;">'.$row['additionalinfo'].'</td>';
                    echo '<td style="border: 1px solid #ddd; padding: 8px;"><a href="edit_lostpet.php?id='.$row['pet_id'].'">Edit</a></td>';
			  echo '<td style="border: 1px solid #ddd; padding: 8px;"><a href="delete_lostpet.php?id='.$row['pet_id'].'">Delete</a></td>';
              echo '</tr>';
                                    
                }
                mysqli_close($conn);
            ?>
                  </table>



</body>
</html>