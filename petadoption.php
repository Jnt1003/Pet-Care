<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link to swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <!-- link to fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lemon&family=Montserrat:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <!-- link to icons -->
    <script src="https://kit.fontawesome.com/7156552e14.js" crossorigin="anonymous"></script>    
    <!-- link to normalize -->
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

/* Center the main content */
.main {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.main__container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 80%;
  max-width: 1200px;
}

.main__text-box {
  width: 50%;
}

.main__text-box-txt {
  margin-bottom: 20px;
}

.small-title {
  font-size: 18px;
  color: #888;
}

.main__title {
  font-size: 48px;
  font-weight: 700;
}

.main__title span {
  color: #ff6f00;
}

.main__title br {
  display: none;
}

.main__image img {
  max-width: 100%;
  height: auto;
}

/* Style the buttons */
button {
  display: inline-block;
  padding: 10px 20px;
  margin-right: 10px;
  font-family: 'Montserrat', sans-serif;
  font-size: 16px;
  font-weight: 500;
  text-decoration: none;
  color: #fff;
  background-color: #ff6f00;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #e65100;
}

/* Style the adoption info section */
.adoptioninfo {
  background-color: #fff;
  padding: 40px 0;
}

.adoptioninfo__container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 80%;
  max-width: 1200px;
  margin: 0 auto;
}

.adoptioninfo__imagebox {
  width: 50%;
}

.adoptioninfo__image img {
  max-width: 100%;
  height: auto;
}

.adoptioninfo__textbox {
  width: 50%;
}

.adoptioninfo__text {
  margin-bottom: 20px;
}

.adoptioninfo__text h2 {
  font-size: 36px;
  font-weight: 700;
}

.adoptioninfo__text span {
  color: #ff6f00;
}

.adoptioninfo__text p {
  color: #888;
}

.adoptioninfo__text button {
  margin-top: 20px;
}

/* Style the icon container section */
.icon-container {
  background-color: #f5f5f5;
  padding: 40px 0;
  text-align: center;
}

.icon-icons {
  display: inline-block;
  margin: 10px;
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
    <title>Pet adoption</title>
</head>
<body>
<?php $pageTitle = "Pet Adoption"; include('header.php');?>

    <!-- main start -->
    <main class="main">
        <div class="main__container">
        <div class="main__text-box">
            <div class="main__text-box-txt">
                <h5 class="small-title">Saving animals.<br>Changing lives.</h5>
                <h1 class="main__title">Your <span>best friend</span><br>is waiting!</h1>
                <a href="adopt.php"><button>Adopt</button></a>
                <a href="cats.php"><button>Cats</button></a>
                <a href="dogs.php"><button>Dogs</button></a>
                <a href="other.php"><button>Other</button></a>
            </div>
        </div>
        <div class="main__image">
            <img src="images/maindog.png">
        </div>
    </div>
    </main>
    <!-- main end -->
    <!-- carousel start -->

  
    <!-- adoption info start -->
    <div class="adoptioninfo">
    <div class="adoptioninfo__container">
        <div class="adoptioninfo__imagebox">
            <div class="adoptioninfo__image">
                <img src="images/adoptioninfo-cat.png">
            </div>
        </div>
        <div class="adoptioninfo__textbox">
            <div class="adoptioninfo__text">
                <h5 class="small-title">More than</h5>
                <h2><span>157k.</span> adoptions</h2>
                <p>Experience the joy of over 157,000 hearts united! Our pet adoption community has reached an incredible milestone, connecting loving homes with furry companions in a celebration of compassion and companionship. Join the movement, be part of the extraordinary bond that has transformed lives and brought immeasurable happiness to pets and their adoring families. Discover the magic of adoption and embark on a journey that will fill your heart with love and leave a lasting pawprint on your soul. Together, let's continue this incredible legacy of over 157,000 fulfilled dreams and countless wagging tails!</p>
                <a href="/pages/adopt.html"><button>Learn More</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="icon-container">
        <div class=>         
            <div class="icon-icons">
            </div>
            <div class="icon-icons">
                <a ><i class="fa-solid fa-house-chimney"></i></a>
                <h3></h3>
            </div>
            <div class="icon-icons">
                <h3></h3>
            </div>
            <icon-text>
            </icon-text>
        </div> 
    </div>
    <!-- adoptioninfo end -->

          
      <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="script/script.js"></script> 
    <?php include('footer.php');?>
</body>
</html>

