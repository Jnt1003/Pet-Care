<!doctype html>
<html>
<head>
<title>Pet Supply Order</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
		  *{
		   box-sizing:border-box;
		   }
		   
		   /*style the body*/
		   body{
		   font-family: Arial;
		   margin:0;
		   }
		   
		   /*Header/logo title*/
		   .header{
		   padding:100px;
		   text-align: center;
		   background-image: url("Pet-Cares.jpg");
		   background-repeat: no-repeat;
		   background-position: center;
		   background-size: cover;
		   color:white;
		   font-size: 30px;
		    text-shadow: 2px 2px 5px red;
		   }

		   
		   /*Style the top bar*/
		   .nav {
    		background-color: #333;
    		display: flex;
    		justify-content: space-between;
    		padding: 10px;
  			}
		   
		   /*Style the navigation bar links*/
		   .nav a{
		   color:white;
		   padding:10px 14px;
		   text-decoration: none;
		   text-align:center;
		   }
		   
		   /*change color on hover*/
		   .nav a:hover{
		   background-color: #ddd;
		   color: black;
		   }
		/*Column container*/
		  .row{
			display: flex;
			flex-wrap:wrap;
		}
		
		/*Create two unequal columns that sits next to each other*/
		
		/*Sidebar/left column*/
		.side{
			flex: 15%;
			background-color: #f1f1f1;
			padding:20px;
		}
		
		/*main column*/
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

			
        .nav ul{
    text-align: left;
    margin:0;
    display: flex;
    padding: 5px 4px 8px 0;
    background-color: red;
    border-radius: 5px;
}

.nav ul li{
    display: inline-block;
    margin-right:-4px;
    position: relative;
    padding:10px 10px;
    color: white;
    font-weight: bold;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.2s ease-in-out;
}

.nav ul li ul li{
    background:red;
    display:block;
    color:white;
    width: 200px;
    padding: 10px;
    font-size: 14px;
    border-bottom: 1px solid white;
    transition: background-color 0.2s ease-in-out;
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

	
<!--navigation bar-->
<nav class="nav">
  <ul>
  <li><a href="test.php">Customer Details</a></li>
	<li><a href="Booking.php">Pet Supply Details</a></li>
  <li><a href="contactdetails.php">Contact Details</a></li>
    <li><a href="lost pet form.php">Lost Pet</a></li>
    <li><a href="adoption.php">Adoption</a></li>
    <li><a href="petdaycare.php">Pet Day Care</a></li>
    <li><a href="admin.php" id="logout">Logout</a></li>

  </ul>
</nav>
<!--header-->
<div class="header">
	<h1>Admin Dashboard</h1>
	</div>

	

<!--flexible grip (content)-->

		
	<div class="main">
		<h2>Pet supply booking details</h2>
		<div style="text-align:center">

            <?php
            include("conn.php");
            $sql = "SELECT * FROM user_orders";
            $result = mysqli_query ($conn, $sql);
       ?>
    <table id="user_orders" style="width: 100%; border-collapse: collapse;">
    <tr style="background-color: #f2f2f2;">
        <th style="border: 1px solid #ddd; padding: 8px;">product ID</th>
        <th style="border: 1px solid #ddd; padding: 8px;">Quantity</th>
        <th style="border: 1px solid #ddd; padding: 8px;">delivery status</th>
        <th style="border: 1px solid #ddd; padding: 8px;">Customer Address</th>
        <th style="border: 1px solid #ddd; padding: 8px;">Paid</th>
        <th style="border: 1px solid #ddd; padding: 8px;">Edit</th>
        
    </tr>

    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo '<tr class="fade-in-row">';
        echo '<td style="border: 1px solid #ddd; padding: 8px;">' . $row['product_id'] . '</td>';
        echo '<td style="border: 1px solid #ddd; padding: 8px;">' . $row['qtn'] . '</td>';
        echo '<td style="border: 1px solid #ddd; padding: 8px;">' . $row['delivery'] . '</td>';
        echo '<td style="border: 1px solid #ddd; padding: 8px;">' . $row['shipping_address'] . '</td>';
        echo '<td style="border: 1px solid #ddd; padding: 8px;">' . $row['paid'] . '</td>';
        echo '<td><a href="editbooking.php?id='.$row['id'].'" class="edit-button">Edit</a></td>';
				
        echo '</tr>';
    }
    mysqli_close($conn);
    ?>

</table>





	


	</body>

</html>