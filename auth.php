<?php
include 'conn.php';

session_start();

if (isset($_SESSION['usrAuth']) && isset($_SESSION['supAuth'])) {
  header("Location: account.php");
}
//LOGIN
if(isset($_POST['login'])) {
    $inputemail = $_POST['email'];
    $inputpassword = $_POST['password'];

    $args = "SELECT * FROM users WHERE email='$inputemail' AND password='$inputpassword'";
    $result = mysqli_query($conn, $args);
    if ($result-> num_rows > 0) {
      $row = mysqli_fetch_assoc($result);
      $_SESSION['usrAuth'] = $row['email'];
      if($row['user_type'] == 2){
        $_SESSION['supAuth'] = $row['email'];
      }elseif($row['user_type'] == 1){
        $_SESSION['isAdmin'] = true;
      }
      header("Location: account.php");
    } else {
      header('Location: login.php?id=invalid');
    }
}

//REGISTER
if(isset($_POST['register'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phonenum = $_POST['phonenum'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if($password == $password2) {
      $query1 = mysqli_query($conn,"SELECT email from users where email = '$email'");
      $query2 = mysqli_query($conn,"SELECT phonenum from users where phonenum = '$phonenum'");
      if((mysqli_num_rows($query1)) == 0 && (mysqli_num_rows($query2) == 0)){
        $args = "INSERT INTO users (firstname, lastname, phonenum, email, gender, password)
            VALUES ('$firstname', '$lastname', '$phonenum','$email', '$gender', '$password')";
        $result = mysqli_query($conn, $args);
        if ($result) {
          header( "Location: welcome.php" ); die;
        } else {
          echo 'something error';
        }
      }else{
        header( "Location: register.php?id=userexist" );
      }     
    }else {
      header( "Location: register.php?id=invalidpassword" );
    }
}
       
?>
