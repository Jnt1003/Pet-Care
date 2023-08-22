<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- link to swiper -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>  <!-- link to fonts -->
<link href="https://fonts.googleapis.com/css2?family=Lemon&family=Montserrat:wght@100;300;400;500;700&display=swap" rel="stylesheet">
<!-- link to icons -->
<script src="https://kit.fontawesome.com/7156552e14.js" crossorigin="anonymous"></script>    
<script src="https://kit.fontawesome.com/7156552e14.js" crossorigin="anonymous"></script>    
<script src="https://kit.fontawesome.com/1aafbbb739.js" crossorigin="anonymous"></script>
<style>
    /* Reset default margin and padding */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Set the background color and font styles */
body {
  background-color: #f5f5f5;
  font-family: 'Montserrat', sans-serif;
}

/* Set the main container styles */
.main__container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 80%;
  max-width: 1200px;
  margin: 0 auto;
}

/* Style the main title */
.main__title {
  font-size: 48px;
  font-weight: 700;
  margin-bottom: 20px;
}

.main__title span {
  color: #ff6f00;
}

/* Style the small title */
.small-title {
  font-size: 18px;
  color: #888;
  margin-bottom: 20px;
}

/* Style the image in main section */
.main__image img {
  max-width: 100%;
  height: auto;
}

/* Set the section container styles */
.adoptioninfo__container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 80%;
  max-width: 1200px;
  margin: 0 auto;
}

/* Style the adoption fees section */
.adoptioninfo__text h2 {
  font-size: 36px;
  font-weight: 700;
  margin-bottom: 20px;
}

.adoptioninfo__text span {
  color: #ff6f00;
}

/* Style the important to know section */
.adoptioninfo__text ul {
  list-style-type: none;
  margin-bottom: 20px;
}

.adoptioninfo__text li {
  margin-bottom: 10px;
}

/* Style the responsibilities section */
.adoptioninfo__text p {
  margin-bottom: 10px;
}

/* Style the icon container section */
.icon-container {
  background-color: #f5f5f5;
  padding: 40px 0;
  text-align: center;
}

.icon-box {
  display: flex;
  justify-content: space-around;
  max-width: 600px;
  margin: 0 auto;
}

.icon-icons {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-bottom: 20px;
}

.icon-icons a {
  display: block;
  font-size: 36px;
  color: #888;
  transition: color 0.3s ease;
}

.icon-icons a:hover {
  color: #ff6f00;
}

.icon-icons h3 {
  margin-top: 10px;
  font-size: 18px;
  color: #333;
}

</style>
<title>Adopt Page</title>
</head>
<body>
<?php $pageTitle = "Contact Us"; include('header.php');?>
<main class="main"><!-- main start; classes from main.css -->
  <div class="main__container space1">
    <div class="main__text-box">
      <div class="main__text-box-txt">
        <h1 class="main__title">Our <span> adoption process</span><br></h1>
        <h5 class="small-title space"> 
          Thank you for your interest in adopting a pet from us! <br><br>
          We are dedicated to bringing pets (cats, dogs and other animals) and owners together to create a humane community.<br><br>
          Browse the website or view animals in person at our facility. 
        </h5>
      </div>
    </div>
      <div class="main__image">
        <img src="images/adoption1.png" alt="Playing with Cat">
    </div> 
  </div>
</main><!-- main end --> 
<section><!-- section one "Adoption Fees"; classes from adoptinfo.css --> 
  <div class="adoptioninfo">
    <div class="adoptioninfo__container space1">
      <div class="adoptioninfo__imagebox">
        <div class="adoptioninfo__image"><img src="images/adoption2.png"></div>
      </div>
      <div class="adoptioninfo__textbox">
        <div class="adoptioninfo__text">
          <h5 class="small-title">Requirements</h5>
          <h2><span>Adoption Fees</span> and others requirements <br><br></h2>
          <h5 class="small-title">  
            You must be 18 years of age or older (or accompanied by an adult) with a current photo ID. <br><br>
            You must be able and willing to spend the time and money necessary to provide training, 
            medical treatment, and proper care for your adopted companion. <br><br>
            Contact us about fees for dogs cats and other animals!<br><br>
          </h5>
        </div>
      </div>
    </div>
  </div>
</section>
<section><!-- section one end --> 
  <div class="adoptioninfo"><!-- section two "Adoptions included" start; classes from adoptinfo.css --> 
    <div class="adoptioninfo__container space1">
      <!--<div class="adoptioninfo__imagebox">
        <div class="adoptioninfo__image"><img src="../images/adoption3.png"></div>
      </div>-->
      <div class="adoptioninfo__textbox">
        <div class="adoptioninfo__text">
          <h5 class="small-title">Important to know</h5>
          <h2><span>Adoptions</span> included <br><br></h2>
          <h5 class="small-title space2">  
            <li> FVRCP Vaccination (cats 8 weeks and older) <br><br></li>
            <li> Dewormer <br><br> </li>
            <li> One Frontline Treatment <br><br> </li>
            <li> Microchip <br><br></li>
            <li> Free 30-day Pet Health Insurance Coverage <br><br> </li>
            <li> Transition bag of premium Hill's Science Diet food at adoption <br><br></li>
            <li> DA2PP Vaccination(s) (dogs 8 weeks and older) <br><br></li>
            <li> Heartworm test (dogs 6 months and older) <br><br></li>
          </h5>
        </div>
      </div>
      <div class="adoptioninfo__imagebox">
        <div class="adoptioninfo__image"><img src="images/adoption3.png"></div>
      </div>
    </div>
  </div>
</section><!-- section two end -->
<section><!-- section three "Adoption Fees"; classes from adoptinfo.css --> 
  <div class="adoptioninfo">
    <div class="adoptioninfo__container space1">
      <div class="adoptioninfo__imagebox">
        <div class="adoptioninfo__image"><img src="images/adoption4.png"></div>
      </div>
      <div class="adoptioninfo__textbox">
        <div class="adoptioninfo__text">
          <h5 class="small-title">Responsabilities</h5>
          <h2><span>With the animal </span>in the adoption <br><br></h2>
          <h5 class="small-title">  
            <p> You will be responsible for:</p>
            <li class="space space2"> Provide nutritious food, adequate shelter, care and medical attention to the animal at all.</li>
            <li class="space space2"> Notify us immediately if the cat  becomes ill within 30 days of the adoption; is lost or stolen at any time.</li>
            <li class="space space2"> Notify us immediately if it enables to keep the cat, because we will assist in or-homing the cat or will place back 
            in foster care.</li>
          </h5>
        </div>
      </div>
    </div>
  </div>
</section><!-- section three end -->
  <div class="icon-container">
    <div class="icon-box">
      <div class="icon-icons">
      </div>
      <div class="icon-icons">
        <a href="#"><i class="fa-solid fa-house-chimney"></i></a>
        <h3>Foster</h3>
      </div>
      <div class="icon-icons">
        <a href="#"><i class="fa-solid fa-hand-holding-dollar"></i></a>
        <h3>Donate</h3>
      </div>
    </div> 
  </div>
</section>  <!-- icons section end -->

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="../script/script.js"></script> 
  <?php include('footer.php');?>
</body>
</html>