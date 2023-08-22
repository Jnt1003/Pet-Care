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
<style>
    /* CSS for adoptpage.php */

/* General Styles */
body {
  font-family: 'Montserrat', sans-serif;
  margin: 0;
  padding: 0;
}

h1, h2, h3, h4, h5, p {
  margin: 0;
  padding: 0;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

/* Main Section */
.main {
  background-color: #f5f5f5;
  padding: 40px 0;
  text-align: center;
}

.main__container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.main__text-box {
  margin-bottom: 40px;
}

.main__text-box-txt {
  max-width: 600px;
  margin: 0 auto;
}

.main__title {
  font-family: 'Lemon', cursive;
  font-size: 30px;
  line-height: 1.2;
  margin-bottom: 20px;
}

.main__title span {
  color: #ff6b6b;
}

.small-title {
  font-weight: 300;
  font-size: 14px;
  margin-bottom: 10px;
}

.button {
  margin-top: 30px;
}

.aboutMe {
  background-color: #ff6b6b;
  color: white;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}

.aboutMe:hover {
  background-color: #d45a5a;
}

/* Carousel Title */
.carousel-title {
  text-align: center;
  margin: 30px 0;
}

/* Card Section */
.container_adp {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.card_adp {
  flex-basis: calc(25% - 20px);
  margin: 10px;
  background-color: white;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
  overflow: hidden;
  transition: transform 0.3s;
}

.card-content {
  padding: 20px;
}

.card_img {
  text-align: center;
  margin-bottom: 20px;
}

.img_effect {
  width: 100%;
  height: auto;
  border-radius: 5px;
}

.card-icon {
  text-align: center;
  margin-bottom: 10px;
}

.card-name {
  font-size: 18px;
  font-weight: 500;
  margin-bottom: 5px;
}

.card__info {
  font-size: 14px;
  color: #888;
  margin-bottom: 20px;
}

/* Adoption Info Section */
.adoptioninfo {
  background-color: #f5f5f5;
  padding: 40px 0;
}

.adoptioninfo__container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
}

.adoptioninfo__imagebox {
  flex-basis: calc(50% - 20px);
  max-width: 500px;
}

.adoptioninfo__image {
  text-align: center;
  margin-bottom: 20px;
}

.adoptioninfo__textbox {
  flex-basis: calc(50% - 20px);
  max-width: 500px;
}

.adoptioninfo__text {
  margin-bottom: 20px;
}

.adoptioninfo h2 {
  font-size: 30px;
  font-weight: 500;
  margin-bottom: 10px;
}

.adoptioninfo p {
  font-size: 14px;
  line-height: 1.5;
  color: #555;
  margin-bottom: 10px;
}

.adoptioninfo button {
  background-color: #ff6b6b;
  color: white;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}

.adoptioninfo button:hover {
  background-color: #d45a5a;
}

/* Icons Section */
.icon-container {
  background-color: #f5f5f5;
  padding: 40px 0;
}

.icon-box {
  display: flex;
  justify-content: center;
}

.icon-icons {
  text-align: center;
  margin: 0 20px;
}

.fa-house-chimney {
  font-size: 40px;
}

.icon-icons h3 {
  font-size: 16px;
  margin-top: 10px;
}

</style>
<title>Adopt Page - Dogs </title>
</head>
<body>
<?php $pageTitle = "Contact Us"; include('header.php');?>
<main class="main"><!-- main start; classes from main -->
  <div class="main__container">
    <div class="main__text-box">
      <div class="main__text-box-txt">
        <h1 class="main__title"> &quot In my daily activities <span> he is a great company &quot</span></h1>
        <hr/><hr/><br>
        <h5 class="small-title space space"><i>Stefan</i></h5>
        <div class="button"><a href="adopt.php" > <button class="aboutMe">Adopt</button></a></div>
      </div>
    </div>
    <div class="main__image"><img src="images/dogcare.png" alt="Mand and Dog"></div>
  </div>
</main> <!-- main end -->
  <div class="carousel-title"> <!--title; class from carousel.css -->
    <h4>See some of our available dogs below!</h4>
  </div><!--end title-->
<section> <!--section cards one; classes from adoptpage.css --> 
  <div class="container_adp">
    <div class="card_adp">
      <div class="card-content">
        <div class="card_img"><img src="images/pets/ace2.png" alt="Black Dog" class="img_effect"></div>
          <h2 class="card-name">Ace</h2>
          <p class="card__info"> Male, 1 year </p>
          <div class="button"><a href="ace.php"><button class="aboutMe"> About me </button></a>
</div>

        </div>
      </div>
    <div class="card_adp">
      <div class="card-content">
        <div class="card_img"><img src="images/pets/apollo2.png" alt="Three Colors Dog" class="img_effect"></div>

        <h2 class="card-name">Apolo</h2>
        <p class="card__info"> Male, 1 year</p>
        <div class="button"><a href="apollo.php"><button class="aboutMe"> About me </button></a></div>
        
      </div>
    </div>
    <div class="card_adp">
      <div class="card-content">
        <div class="card_img"><img src="images/pets/chip2.png" alt="Ginger Dog" class="img_effect"></div>
        <h2 class="card-name">Chip</h2>
        <p class="card__info">Female, 2 years</p>
        <div class="button"><a href="chip.php"> <button class="aboutMe"> About me </button></a></div>
      </div>
    </div>
    <div class="card_adp">
      <div class="card-content">
        <div class="card_img"><img src="images/pets/echo2.png" alt="Echo" class="img_effect"></div>

        <h2 class="card-name">Echo</h2>
        <p class="card__info">Male, 8 months</p>
        <div class="button"><a href="echo.php" > <button class="aboutMe"> About me </button></a></div>
      </div>
    </div>
  </div>
</section><!--end section one--> 
<section><!--section card two; classes from adoptpage.css --> 
  <div class="container_adp">
    <div class="card_adp">
      <div class="card-content">
        <div class="card_img"><img src="images/pets/lucky2.png" alt="White Dog" class="img_effect"></div>

          <h2 class="card-name">Lucky</h2>
          <p class="card__info"> Male, 2 years </p>
          <div class="button"><a href="lucky.php" > <button class="aboutMe"> About me </button></a></div>
        </div>
    </div>
    <div class="card_adp">
      <div class="card-content">
        <div class="card_img"><img src="images/pets/max2.png" alt="Ginger Dog" class="img_effect"></div>
 
        <h2 class="card-name">Max</h2>
        <p class="card__info">Male, 11 months</p>
        <div class="button"><a href="max.php" > <button class="aboutMe"> About me </button></a></div>
      </div>
    </div>
    <div class="card_adp">
      <div class="card-content">
        <div class="card_img"><img src="images/pets/oreo2.png" alt="White and Ginger Dog" class="img_effect"></div>

        <h2 class="card-name">Oreo</h2>
        <p class="card__info"> Male, 9 months</p>
        <div class="button"><a href="oreo.php" > <button class="aboutMe"> About me </button></a></div>
      </div>
    </div>
    <div class="card_adp">
      <div class="card-content">
        <div class="card_img"><img src="images/pets/echo2.png" alt="Ginger Cat" class="img_effect"></div>

        <h2 class="card-name">Lucy</h2>
        <p class="card__info">Female, 8 months</p>
        <div class="button"><a href="lucy.php" > <button class="aboutMe"> About me </button></a></div>
      </div>
    </div>
  </div>
</section><!--end section two--> 
<section><!-- adoption info start; classes from adoptioninfo.css --> 
  <div class="adoptioninfo">
    <div class="adoptioninfo__container space3">
      <div class="adoptioninfo__imagebox">
        <div class="adoptioninfo__image"><img src="images/dogcare2.png"></div>
      </div>
      <div class="adoptioninfo__textbox">
        <div class="adoptioninfo__text">
          <h5 class="small-title">Adoptions</h5>
          <h2><span> 8 Dogs</span> available</h2>
          <p class="space space2">  
            All of our animals are spayed or neutered, 
            up to date on vaccinations, microchipped, and have been examined by a veterinarian.  </p>
          <p class="space space2">
            In adopting dogs, you should consider establishing household rules, routines and 
            taking a dog training class. 
          </p>
          <p class="space space2">
            Also is very important maniging the situations so your dog makes “good” choices and to have time 
            and play with your dog.🐕
          </p>  
          <div> <a href="https://www.lifestylepets.org/Adopt-a-Shelter-Dog-LifestylePets.pdf" target="_blank"> <button> Learn More </button> </a> </div><!--Free ebook-->
        </div>
      </div>
    </div>
  </div>


<!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="script/script.js"></script> 
  <?php include('footer.php');?>
</body>
</html>
