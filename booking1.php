<!DOCTYPE html>
<html>
  <head>
    <title>Booking</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <style>
    body {
    font-family: 'Raleway', sans-serif;
    font-weight: 400;
    color: #ffffff;
    letter-spacing: 1px;
  }
  
  .container-form {
    padding: 20px 0;
    margin: 0 auto;
    max-width: 500px;
    color: black;
  }
  
  .heading {
    font-size: 36px;
    margin-bottom: 20px;
    color:#ffc107 ;
  }
   
  form {
    display: grid;
    grid-row-gap: 20px;
  }
  
  form p {
    font-weight: 600;
  }
  
  .form-field {
    display: grid;
    grid-template-columns: 150px 1fr;
    align-items: center;
  }
  
  input,
  select {
    padding: 10px 15px;
    font-size: 16px;
    border-radius: 5px;
    border: none;
    background-color: #f2f2f2;
  }
  
  .btn {
    background-color: #ffc107;
    color: #fff;
    padding: 10px 20px;
    border: none;
    font-size: 18px;
    border-radius: 100px;
    box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
    cursor: pointer;
    transition: all 0.3s ease-in-out;
  }
  
  .btn:hover {
    background-color: #ffca2c;
    transform: translateY(-2px);
  }
  
  </style>
<?php
 if (isset($_POST['schedule'])){
    include("conn.php");
  
    $sql = "INSERT INTO reservations (customername, petname, email, phonenumber, pet, bookingdate, bookingtime)
  
    VALUES
    
    ('$_POST[customername]', '$_POST[petname]','$_POST[email]','$_POST[phonenumber]','$_POST[pet]','$_POST[bookingdate]', '$_POST[bookingtime]')";
  
    if (!mysqli_query($conn, $sql)){
      die("Error: ".mysqli_error($conn));
    }
    else{
      echo '<script>alert("Successfully submit! ");window.location.href = "booking.php"; </script>';
    }
    mysqli_close($con);
  }
?>
  <body>
    <div class="container-form">
      <h2 class="heading">Online Reservation</h2>
      <form method="post">
        <div class="form-field">
          <p>Your Name</p>
          <input type="text" placeholder="Your Name" name="customername">
        </div>
        <div class="form-field">
          <p>Pet Name</p>
          <input type="text" placeholder="Pet Name" name="petname">
        </div>
        <div class="form-field">
          <p>Email</p>
          <input type="email" placeholder="Email" name="email">
        </div>
        <div class="form-field">
          <p>Phone</p>
          <input type="tel" placeholder="Phone" name="phonenumber">
        </div>
        <div class="form-field">
          <p>Pet Type</p>
          <select id="pet" name="pet">
            <option value="Dog">Dog</option>
            <option value="Cat">Cat</option>
            <option value="Bird">Bird</option>
            <option value="Large Animal">Large Animal</option>
            <option value="Small Animal">Small Animal</option>
            <option value="Reptile">Reptile</option>
            <option value="Horse">Horse</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div class="form-field">
          <p>Date</p>
          <input type="date" name="bookingdate">
        </div>
        <div class="form-field">
          <p>Time</p>
          <input type="time" name="bookingtime">
        </div>
        <div class="form-field">
          <p><button input type= "submit" class="btn" name="schedule" value="Submit">Schedule Now</button></p>
        </div>
      </form>
    </div>
  </body>
 
</html>

