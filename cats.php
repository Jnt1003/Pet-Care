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
    /* Main styles */
body {
  font-family: 'Montserrat', sans-serif;
  margin: 0;
  padding: 0;
}

.main__container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 50px;
}

.main__text-box {
  width: 50%;
}

.main__text-box-txt {
  text-align: center;
}

.main__title {
  font-family: 'Lemon', cursive;
  font-size: 36px;
  margin: 0;
}

.small-title {
  font-weight: 400;
  font-size: 18px;
}

.button {
  margin-top: 20px;
  text-align: center;
}

.aboutMe {
  background-color: #ff9900;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}

/* Carousel title */
.carousel-title {
  text-align: center;
  margin-top: 50px;
}

/* Card section */
.container_adp {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  margin-top: 50px;
}

.card_adp {
  background-color: #f3f3f3;
  margin: 10px;
  width: 250px;
  padding: 20px;
  text-align: center;
}

.card-content {
  position: relative;
}

.card-name {
  font-size: 24px;
  margin: 10px 0;
}

.card__info {
  font-size: 16px;
  margin: 0;
}

.img_effect {
  width: 100%;
  height: auto;
  border-radius: 50%;
}

.card-icon {
  position: absolute;
  top: 10px;
  right: 10px;
  color: red;
}

/* Adoption info section */
.adoptioninfo {
  background-color: #f3f3f3;
  padding: 50px;
}

.adoptioninfo__container {
  display: flex;
  align-items: center;
}

.adoptioninfo__imagebox {
  flex-basis: 50%;
}

.adoptioninfo__textbox {
  flex-basis: 50%;
}

.adoptioninfo__text {
  text-align: center;
}

.adoptioninfo__text h2 {
  font-size: 36px;
  margin: 0;
}

.adoptioninfo__text p {
  margin-top: 20px;
  line-height: 1.5;
}

.adoptioninfo__text button {
  background-color: #ff9900;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}

/* Icon section */
.icon-container {
  background-color: #f3f3f3;
  padding: 50px;
  text-align: center;
}

.icon-box {
  display: flex;
  justify-content: space-around;
  max-width: 300px;
  margin: 0 auto;
}

.icon-icons {
  margin-bottom: 20px;
}

.icon-icons i {
  color: #ff9900;
  font-size: 36px;
}

.icon-icons h3 {
  font-size: 16px;
  margin-top: 10px;
}

/* Responsive styles */
@media (max-width: 768px) {
  .main__container {
    flex-direction: column;
    text-align: center;
  }

  .main__text-box {
    width: 100%;
    margin-bottom: 20px;
  }

  .carousel-title {
    margin-top: 30px;
  }

  .container_adp {
    justify-content: flex-start;
  }
  
  .card_adp {
    width: 100%;
    margin: 10px 0;
  }

  .adoptioninfo__container {
    flex-direction: column;
  }

  .adoptioninfo__imagebox,
  .adoptioninfo__textbox {
    flex-basis: 100%;
    margin-bottom: 30px;
  }

  .icon-box {
    max-width: 100%;
  }
}

</style>
<title>Adopt Page - Cats </title>
</head>
<body>
<?php $pageTitle = "Contact Us"; include('header.php');?>
<main class="main"><!-- main start; classes from main -->
  <div class="main__container">
    <div class="main__text-box">
      <div class="main__text-box-txt">
        <h1 class="main__title"> &quot I am very happy with <span>my new friend &quot</span></h1>
        <hr/><hr/><br>
        <h5 class="small-title space space"><i>Peter</i></h5>
        <div class="button"><a href="adopt.php"> <button class="aboutMe">Adopt</button></a></div>
      </div>
    </div>
    <div class="main__image"><img src="images/catcare.png" alt="Playing with Cat"></div>
  </div>
</main><!-- main end -->
  <div class="carousel-title"> <!--title; class from carousel.css -->
    <h4>See some of our available cats below!</h4>
  </div><!--end title-->
<section> <!--section cards one; classes from adoptpage.css --> 
  <div class="container_adp">
    <div class="card_adp">
      <div class="card-content">
        <div class="card_img"><img src="images/pets/charlie2.png" alt="Charlie" class="img_effect"></div>
          <div class="card-icon"><i class="fa-solid fa-heart"></i></div>
          <div class="card-icon"><i class="fa-solid fa-heart"></i></div>
          <h2 class="card-name">Charlie</h2>
          <p class="card__info"> Male, 1 year </p>
          <div class="button"><a href="charlie.php"> <button class="aboutMe"> About me </button></a></div>
        </div>
      </div>
    <div class="card_adp">
      <div class="card-content">
        <div class="card_img"><img src="images/pets/chelsey2.png" alt="Ginger Cat" class="img_effect"></div>
        <div class="card-icon"><i class="fa-solid fa-heart"></i></div>
        <div class="card-icon"><i class="fa-solid fa-heart"></i></div>
        <h2 class="card-name">Chelsey</h2>
        <p class="card__info"> Male, 1 year</p>
        <div class="button"><a href="chelsey.php"><button class="aboutMe"> About me </button></a></div>
      </div>
    </div>
    <div class="card_adp">
      <div class="card-content">
        <div class="card_img"><img src="images/pets/leo2.png" alt="Ginger Cat" class="img_effect"></div>
        <div class="card-icon"><i class="fa-solid fa-heart"></i></div>
        <div class="card-icon"><i class="fa-solid fa-heart"></i></div>
        <h2 class="card-name">Leo</h2>
        <p class="card__info"> Male, 2 years</p>
        <div class="button"><a href="leo.php" > <button class="aboutMe"> About me </button></a></div>
      </div>
    </div>
    <div class="card_adp">
      <div class="card-content">
        <div class="card_img"><img src="images/pets/lucy2.png" alt="Ginger Cat" class="img_effect"></div>
        <div class="card-icon"><i class="fa-solid fa-heart"></i></div>
        <div class="card-icon"><i class="fa-solid fa-heart"></i></div>
        <h2 class="card-name">Lucy</h2>
        <p class="card__info">Female, 8 months</p>
        <div class="button"><a href="lucy.php" > <button class="aboutMe"> About me </button></a></div>
      </div>
    </div>
  </div>
</section><!-- second one end -->
<section><!--section cards two; classes from adoptpage.css --> 
  <div class="container_adp">
    <div class="card_adp">
      <div class="card-content">
        <div class="card_img"><img src="images/pets/milo2.png" alt="Milo" class="img_effect"></div>
          <div class="card-icon"><i class="fa-solid fa-heart"></i></div>
          <div class="card-icon"><i class="fa-solid fa-heart"></i></div>
          <h2 class="card-name">Milo</h2>
          <p class="card__info"> Male, 3 years </p>
          <div class="button"><a href="milo.php" > <button class="aboutMe"> About me </button></a></div>
        </div>
    </div>
    <div class="card_adp">
      <div class="card-content">
        <div class="card_img"><img src="images/pets/puffect2.png" alt="Ginger Cat" class="img_effect"></div>
        <div class="card-icon"><i class="fa-solid fa-heart"></i></div>
        <div class="card-icon"><i class="fa-solid fa-heart"></i></div>
        <h2 class="card-name">Mr. Purrfect</h2>
        <p class="card__info"> Male, 1 year</p>
        <div class="button"><a href="mr-puffect.php" > <button class="aboutMe"> About me </button></a></div>
      </div>
    </div>
    <div class="card_adp">
      <div class="card-content">
        <div class="card_img"><img src="images/pets/snowhite2.png" alt="Ginger Cat" class="img_effect"></div>
        <div class="card-icon"><i class="fa-solid fa-heart"></i></div>
        <div class="card-icon"><i class="fa-solid fa-heart"></i></div>
        <h2 class="card-name">Snowthite</h2>
        <p class="card__info"> Male, 2 years</p>
        <div class="button"><a href="snowhite.php" > <button class="aboutMe"> About me </button></a></div>
      </div>
    </div>
    <div class="card_adp">
      <div class="card-content">
        <div class="card_img"><img src="images/pets/lucy2.png" alt="Ginger Cat" class="img_effect"></div>
        <div class="card-icon"><i class="fa-solid fa-heart"></i></div>
        <div class="card-icon"><i class="fa-solid fa-heart"></i></div>
        <h2 class="card-name">Lucy</h2>
        <p class="card__info">Female, 8 months</p>
        <div class="button"><a href="lucy.php" > <button class="aboutMe"> About me </button></a></div>
      </div>
    </div>
  </div>
</section><!-- second two end -->
<section><!-- adoption info start; classes from adoptioninfo.css --> 
  <div class="adoptioninfo">
    <div class="adoptioninfo__container space3">
      <div class="adoptioninfo__imagebox">
        <div class="adoptioninfo__image"><img src="images/catcare2.png"></div>
      </div>
      <div class="adoptioninfo__textbox">
        <div class="adoptioninfo__text">
          <h5 class="small-title">Adoptions</h5>
          <h2><span> 8 Cats</span> available</h2>
          <p class="space space2">  
            All of our animals are spayed or neutered, 
             up to date on vaccinations, microchipped, and have been examined by a veterinarian.  </p>
          <p class="space space2">
            In adopting cats, you should consider to purchase objects that can help the cat to have a healthy life, such as:
            cat toys, scratching post or cat and others. 
          </p>
          <p class="space space2">
             Also is very important to have time and play with your cat.🐕
          </p>
          <div> <a href="about" target="_blank"> <button> Learn More </button> </a></div>
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
