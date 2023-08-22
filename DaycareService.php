<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mutt-Icure</title>
  <meta property="og:title" content="Mutt-Icure"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />

  <style>

    /* Content */
    .content {
      margin: 30px;
    }

    .heading {
      font-size: 26px;
      font-weight: bold;
      color: #333;
    }

    .content p {
      font-size: 19px;
      line-height: 1.5;
      color: #666;
      margin-bottom: 20px;
    }

    /* Learn More */
    .learn-more-container {
      margin: 40px 0;
      padding: 20px;
      background-color: #f5f5f5;
    }

    .learn-more-features {
      text-align: center;
    }

    .learn-more-text {
      font-size: 24px;
      font-weight: bold;
      color: #333;
      margin-bottom: 20px;
    }

    .learn-more-text span {
      font-size: 26px;
      line-height: 1.5;
      color: #666;
    }

    .learn-more-features p{
      font-size: 19px;
      line-height: 1.5;
    }

    .learn-more-container1 {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin-top: 30px;
    }

    .feature-card {
      width: 280px;
      margin: 20px;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .feature-card img {
      width: 200px;
      height: 133px;
      margin-bottom: 20px;
    }

    .feature-card h2 {
      font-size: 20px;
      color: #333;
      margin-bottom: 10px;
    }

    .feature-card span {
      font-size: 16px;
      color: #666;
    }

    /* Button Group */
    .button-group {
      display: flex;
      justify-content: center;
      margin-top: 30px;
      margin-bottom: 30px
    }

    .button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s ease;
      margin-right: 10px;
    }

    .button:hover {
      background-color: #0056b3;
    }

</style>
</head>
<body>
<?php $pageTitle = "Daycare Service"; include('header.php');?>

  <div class="content">
    <h1 class="heading">Unleash the Joy: Exceptional Pet Daycare Services</h1>
    <p>
      Welcome to our pet care system daycare service, where we provide a safe and nurturing environment for your pets.
      Our experienced and caring staff offer flexible daycare options, ensuring your pets receive the attention,
      exercise, and socialization they need. Trust us to provide exceptional care for your furry friends while you're
      away. 
    </p>
    <p>Contact us today to learn more about our services !</p>
  </div>

  <div class="learn-more-container">
    <div class="learn-more-features">
      <h1 class="learn-more-text">
        <span>Explore our services</span>
      </h1>
      <p>
        At our daycare facility, we offer a range of services to meet the
        unique needs of your furry friends. Whether you have a dog, cat,
        or other small animals, our experienced and caring staff are
        trained to provide exceptional care and attention to each pet.
      </p>
      <p>
        Our facility is designed to provide a comfortable and stimulating
        environment for your pets. They will have access to spacious play
        areas, both indoors and outdoors, where they can socialize,
        exercise, and engage in stimulating activities. We prioritize
        their safety and security, with trained staff members supervising
        all interactions and ensuring a positive and controlled
        environment.
      </p>
      <div class="learn-more-container1">
        <div class="feature-card">
          <img src="playtime.jpg" alt="Playtime Paradise" />
          <h2>Playtime Paradise</h2>
          <span>
            Our daycare offers engaging playtime sessions where your furry
            friends can socialize, exercise, and have a blast in a safe
            and supervised environment.
          </span>
        </div>
        <div class="feature-card">
          <img src="petgromming.jpg" alt="Pawsome Pampering" />
          <h2>Pawsome Pampering</h2>
          <span>
            Treat your pets to luxurious grooming and spa services,
            including refreshing baths, stylish haircuts, nail trims,
            and more, ensuring they look and feel their best.
          </span>
        </div>
        <div class="feature-card">
          <img src="petwalking.jpg" alt="Tail-Wagging Walks" />
          <h2>Tail-Wagging Walks</h2>
          <span>
            Our experienced staff takes your dogs on energizing walks,
            allowing them to explore the outdoors, stretch their legs,
            and enjoy some fresh air and exercise.
          </span>
        </div>
        <div class="feature-card">
          <img src="petsitting.jpg" alt="Pet Sitting on a Regular Basis" />
          <h2>Pet Sitting on a Regular Basis</h2>
          <span>
            Our Pet Sitting service normally entails one of our
            neighborhood pet sitters visiting by once or many times each
            day to attend to your pet's requirements. Along with food
            and water, this could involve playing fetch with your dog,
            attempting to catch the laser pointer with your cat.
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="button-group">
    <a href="booking1.php" class="button">Schedule Reservation</a>
  </div>

  <?php include('footer.php');?>
</body>
</html>
