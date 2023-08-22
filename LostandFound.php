<!DOCTYPE html>
<html>
<head>
    <title>Lost and Found | Pet Care System</title>
    <meta property="og:title" content="Mutt-Icure"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    
    <style>
        
        h1 {
            margin: 0;
        }
        
        section {
            margin-bottom: 20px;
        }
        
        h2 {
            font-size: 30px;
            margin-bottom: 10px;
        }
        
        form {
            max-width: 500px;
            margin: 0 auto;
        }
        
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        input[type="text"],
        input[type="tel"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        
        ul {
            list-style-type: none;
            padding: 0;
        }
        
        li {
            margin-bottom: 10px;
        }
        
        h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

    </style>
</head>
<?php
 if (isset($_POST['report'])){
    include("conn.php");
  
    $sql = "INSERT INTO lostpet (petname, petbreed, ownername, contactinfo, lastseenlocation, datelost, additionalinfo)
  
    VALUES
    
    ('$_POST[petname]', '$_POST[petbreed]','$_POST[ownername]','$_POST[contactinfo]','$_POST[lastseenlocation]','$_POST[datelost]', '$_POST[additionalinfo]')";
  
    if (!mysqli_query($conn, $sql)){
      die("Error: ".mysqli_error($conn));
    }
    else{
      echo '<script>alert("Successfully submit! ");window.location.href = "LostandFound.php"; </script>';
    }
    mysqli_close($conn);
  }
?>
<body>
<?php $pageTitle = "LostandFound"; include('header.php');?>
<h1>Lost and Found</h1>
<main>
    <section>
        <h2>Report a Lost Pet</h2>
        <form method ="post">
            <br>
            <label for="pet-type">Pet Type:</label>
            <select id="pet-type" name="pet-type">
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
                <option value="rabbit">Rabbit</option>
                <option value="other">Other</option>
            </select>
            <br><br>
            <label for="pet-name">Pet Name:</label>
            <input type="text" id="pet-name" name="petname" required>
            <br><br>
            <label for="pet-breed">Pet Breed:</label>
            <input type="text" id="pet-breed" name="pet-breed" required>
            <br><br>
            <label for="owner-name">Owner's Name:</label>
            <input type="text" id="owner-name" name="ownername" required>
            <br><br>
            <label for="contact-info">Contact Information:</label>
            <input type="tel" id="contact-info" name="contact-info" required>
            <br><br>
            <label for="location">Last Seen Location:</label>
            <input type="text" id="location" name="lastseenlocation" required>
            <br><br>
            <label for="date-lost">Date Lost:</label>
            <input type="date" id="date-lost" name="datelost" required>
            <br><br>
            <label for="additional-info">Additional Information:</label>
            <br><br><textarea id="additional-info" name="additional-info"></textarea>
            <br><br>
            <p><input type="submit" value="Report Lost Pet" name= "report"></p>
        </form>
    </section>
    <br>
    <br>
    <section>
        <h2>Found Pets</h2>
        <ul>
            <li>
                <h3>Found Dog</h3>
                <img src="rottweiler.jpg" alt="Rottweiler" width="300" height="300">
                <p>Breed: Rottweiler</p>
                <p>Found on 05/10/2023 near Central Park. Black and Tan, big-sized.</p>
                <p>Contact: Johnson Tan (johnson@mutticure.com)</p>
            </li>
            <li>
                <h3>Found Cat</h3>
                <img src="mainecoon.webp" alt="Maine Coon" width="300" height="200">
                <p>Breed: Maine Coon</p>
                <p>Found on 05/08/2023 near Taman Lambak. Snow white, medium-sized.</p>
                <p>Contact: Jane (jane333@mutticure.com)</p>
            </li>
        </ul>
    </section>
</main>

<?php include('footer.php');?>
</body>
</html>
