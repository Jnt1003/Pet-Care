<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mutt-Icure</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');
	body{
    background-image: url('https://th.bing.com/th/id/R.16449039368fabe4cdba3918256a414c?rik=D%2ffoj2jIY%2f0JPQ&riu=http%3a%2f%2fsnjreentry.com%2fwp-content%2fuploads%2f2016%2f05%2fcontact.jpg&ehk=pJacMZ2jrmr2C7ykd9Y%2fiROZaEzAcGQhbnYQKhgJ0Gc%3d&risl=&pid=ImgRaw&r=0');
    background-repeat: no-repeat;
    background-size: cover;
	}
	.header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #f5f5f5;
      margin-top: 30px;
    }

    .header .logo {
      font-size: 25px;
      font-family: 'Sriracha', cursive;
      color: #000;
      text-decoration: none;
      margin-left: 30px;
    }

    .nav-items {
      display: flex;
      justify-content: space-around;
      align-items: center;
      background-color: #f5f5f5;
      margin-right: 20px;
    }

	.nav-items a {
      text-decoration: none;
      color: #000;
      padding: 35px 20px;
    }
	
	form {
      width: 50%;
      margin: auto;
      margin-top: 50px;
      padding: 100px;
      background-color: #fff;
      border-radius: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .field {
      margin-bottom: 10px;
    }

    label {
      display: inline-block;
      width: 150px;
      font-weight: bold;
    }

    input[type="text"],
    select {
      padding: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
      width: 300px;
      box-sizing: border-box;
    }

    input[type="radio"] {
      margin-right: 10px;
    }

    input[type="submit"],
    input[type="reset"] {
      background-color: #007bff;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-right: 10px;
    }

    input[type="submit"]:hover,
    input[type="reset"]:hover {
      background-color: #0069d9;
    }

    .footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #818183;
      padding: 30px 80px;
      margin-top: 100px;
    }

    .footer .copy {
      color: #fff;
    }

    .bottom-links {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 40px 0;
    }

    .bottom-links .links {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 0 40px;
    }

    .bottom-links .links span {
      font-size: 20px;
      color: #fff;
      text-transform: uppercase;
      margin: 30px 0;
    }

    .bottom-links .links a {
      text-decoration: none;
      color: #a1a1a1;
      padding: 10px 20px;
    }
    *{
    margin: 0;
    padding: 0;
}



</style>
<?php $pageTitle = "My Account"; include('header.php');?>
<?php

if (isset($_POST['reg'])){
		include("conn.php");
 
		 $sql = "INSERT INTO contact_us (customerName, Gender, Race, Customer_Subject,PhoneNumber) 
		 
		 VALUES
		 
		 ('$_POST[customerName]','$_POST[Gender]','$_POST[Race]','$_POST[Customer_Subject]','$_POST[PhoneNumber]')";
		 
		 if(!mysqli_query($con, $sql)){
			 die("Error: ".mysqli_error($con));
		 }
		 else {
			 echo '<script>alert("Successfully Submit	!");window.location.href="Home.html";</script>';
		 }
		 mysqli_close($con); 
}

?>
<body>


	<form action="" method="post">
		<div class="field">
			<div><label for="login">Username</label></div>
			<div><input name="customerName" type="text" required="required"></div>
		</div>	
	<div class="field">
		<div><label for="Phone">Phone Number</label></div>
		<div><input name="PhoneNumber" type="text" required="required" ></div>
	</div>
	<div class="field" style="padding-top:10px;">
			<input type="radio" name="Gender" value="Male" required="required"> &nbsp;&nbsp;Male &nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="Gender" value="Female" required="required"> &nbsp;&nbsp;Female 
	</div>
	<div class="field">
		<div><label for="AppointmentDate">Race</label></div>
		<div><select id = "race" name= "Race"></div>
		<option value="Malay">Malay</option>
            <option value="Indian">Indian</option>
            <option value="Chinese">Chinese</option>
            <option value="Others">Others</option>
	</select>
	</div>
    <div class="field">
		<div><label for="Address">CustomerSubject</label></div>
		<div><input name="Customer_Subject" type="text" required="required"></div>
	</div>
	<div class="field">
		<div><input type="submit" name="reg" value="Submit"> <input type="reset" value="Reset"></div>
	</div>

</form>
</div>
<footer class="footer">
    <div class="copy">&copy; 2023 Mutt-Icure</div>
    <div class="bottom-links">
      <div class="links">
        <span>More Info</span>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
      </div>
      <div class="links">
        <span>Social Links</span>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </footer>
</body>