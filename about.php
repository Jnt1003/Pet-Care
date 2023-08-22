<?php

session_start();

if (isset($_SESSION['usrAuth'])) {
  session_abort();
  include 'usrinfo.php';
}
if(isset($_POST['submitform'])) {
  if(empty($firstname) && empty($email)){
    include 'config.php';
    $name = $_POST['uname'];
    $email = $_POST['uemail'];
  }else{
    $name = $firstname . " " . $lastname;
  }
  $message = $_POST['message'];

  $args = "INSERT INTO messages (name, email, message, IsChecked)
      VALUES ('$name', '$email', '$message','0')";

  $result = mysqli_query($conn, $args);
  if ($result) {
    header( "Location: contact.php?id=success" ); die;
  } else {
    echo 'something error';
  }
  
}

if (isset($_GET['id'])){
  $id = $_GET["id"];
  if ($id == 'success'){
    echo '<div class="alert alert-success" id="flash-msg">
    <h4><i class="icon fa fa-check "></i> Inquiry succesfully submitted!</h4>
    </div>';
  }elseif($id == 'updated'){
    echo '<div class="alert alert-success" id="flash-msg">
    <h4><i class="icon fa fa-check "></i> User data succesfully updated!</h4>
    </div>';
  }elseif($id == 'deleted'){
  echo '<div class="alert alert-success" id="flash-msg">
  <h4><i class="icon fa fa-check "></i> User succesfully removed from system!</h4>
  </div>';
  }
}


?>
<!doctype html>
<html lang="en">
  
<?php $pageTitle = "Login"; include('header.php');?>

    <section>
        <div class="container p-5">
            <h1>About Us</h1>
            <p><?php echo $siteName; ?> are passionate about creating a welcoming environment where pet owners can feel confident in their purchases and confident in the care their pets receive.</p>

            <p>At Mutt-Icure we are proud to have earned the trust of countless pet owners in the community. Our commitment to excellence, professionalism, and compassionate care has made us a leading name in the pet care industry.</p>

            <p>When you choose <?php echo $siteName; ?> you can rest assured that your pet will receive the love, attention, and expert care they deserve. We are honored to be a part of your pet's journey, and we look forward to serving you and your furry friend with dedication and care.</p>

            <p>With this vision in mind, <?php echo $siteName; ?> strives to:</p>

            <p>a. Offer regular veterinary check-ups and vaccinations to ensure your pet's overall health and well-being.</p>
            <p>b. Create a safe and comfortable environment for your pet during their stay with us.</p>
            <p>c. Foster a loving and compassionate atmosphere to make your pet feel at ease and cared for.</p>
            <p>d. Customize care plans to meet the specific needs and preferences of each individual pet.</p>
            <p>e. Utilize advanced grooming techniques and high-quality products for optimal results.</p>
            <p>f. Continuously improve and expand our services to meet the evolving needs of our clients.</p>

            </p>
        </div>
      </div>
    </section>
    <?php include('footer.php');?>
  </body>
  


</html>
