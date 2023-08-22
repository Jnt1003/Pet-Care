<?php

session_start();
include 'conn.php';

if(isset($_POST['submitask'])) {
  $name = $_POST['uname'];
  $email = $_POST['uemail'];
  $message = $_POST['message'];

  $args = "INSERT INTO messages (name, email, message, IsChecked)
      VALUES ('$name', '$email', '$message','0')";

  $result = mysqli_query($conn, $args);
  if ($result) {
    echo '<div class="alert alert-success" id="flash-msg">
    <h4><i class="icon fa fa-check "></i> Succesfully submitted!</h4>
    </div>';
  } else {
    echo '<div class="alert alert-danger" id="flash-msg">
    <h4><i class="icon fa fa-times "></i> Error!</h4>
    </div>';
  }
  
}

if (isset($_GET['id'])){
  $id = $_GET["id"];
  if ($id == 'updated'){
    echo '<div class="alert alert-success" id="flash-msg">
    <h4><i class="icon fa fa-check "></i> Details succesfully updated! Please login again!</h4>
    </div>';
  }
}

?>

<!doctype html>
<html lang="en">

<?php $pageTitle = "Home"; include('header.php');?>

<body>
  <section class="home text-dark p-5 text-left">

    <div class="container">
      <div class="d-sm-flex align-items-center justify-content-between">
        <div>
          <h1>A PET CARE SYSTEM</h1>
          <p class="lead my-4">We Provide A Good Service For Furry Friends</p>
          <p>We have everything you need for Furry Friends!</p>
          <a href="catologue.php"><button class="btn btn-outline-dark btn-lg"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Browse <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button></a>         
        </div>
        <img class="img-fluid w-50 d-none d-sm-block" src="https://www.vslpackaging.com/wp-content/uploads/2020/09/pet-care.jpg">

      </div>
    </div>
  </section>



  <section class="bg-dark pt-5 pb-5">  
  <div class="container text-center" id="whyus">
    <div id="h1">
      <h1>Why Us?</h1>
    </div>

    <div class="row d-flex justify-content-around">

      <div class="col">
        <div class="card" style="width: 24rem; height: 14rem;">
          <div class="card-body">
            <h1 class="card-title"><i class="fa fa-paw" aria-hidden="true"></i></h1>
            <h5 class="card-title">Pet Supply </h5>
            <p class="card-text">We have provide different kinds of pet for our customer. One of them will be your choice.</p>
          </div>
        </div>
      </div>

      <div class="col">
      <div class="card" style="width: 24rem; height: 14rem;">
          <div class="card-body">
            <h1 class="card-title"><i class="fa fa-home" aria-hidden="true"></i></h1>
            <h5 class="card-title">Day-Care-Service</h5>
            <p class="card-text">We provide day-care-service to take care Furry Friends. This service can helps those are busy at daytime.</p>
          </div>
        </div>
      </div>

      <div class="col">
      <div class="card" style="width: 24rem; height: 14rem;">
          <div class="card-body">
            <h1 class="card-title"><i class="fa fa-medkit" aria-hidden="true"></i></h1>
            <h5 class="card-title">Medical Services</h5>
            <p class="card-text">We provide medical services. Our veterinary have years of experience treating different kinds of animals.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
  </section>  

</body>


<!-- Footer -->
<?php include('footer.php');?>
</html>
