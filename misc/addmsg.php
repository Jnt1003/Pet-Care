<?php
include 'config.php';
session_start();

// debugging
if(isset($_POST['addbook'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $args= "SELECT IsChecked FROM messages WHERE email='$email'";
    $result = mysqli_query($conn, $args);
    
    if (!$result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        if($row['IsChecked'] == "1"){
            $args = "INSERT INTO messages (name, email, message)
                            VALUES ('$name','$email', '$bookdesc', '$message')";
            $result = mysqli_query($conn, $args); 
            if ($result) {
                header( "Location: contact.php?id=submitted" ); die;
                }

            } else {
                header( "Location: contact.php?id=error" ); die;
            }
        } else {
        header( "Location: contact.php?id=pending" ); die;
        }
    
}

?>