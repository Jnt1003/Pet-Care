<?php
include_once 'config.php';


$email = $_SESSION['usrAuth'];

$sql = "SELECT * FROM user_orders WHERE id='$id'";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
  $row = mysqli_fetch_assoc($result);

  $user_id = $row['user_id'];
  $product_id = $row['product_id'];
  $qtn = $row['qtn'];
  $delivery= $row['delivery'];
  $shipping_address = $row['shipping_address'];
  $paid = $row['paid'];
} else {
  echo '<div class="alert alert-danger alert-dismissable" id="flash-msg">
  <h4><i class="icon fa fa-times "></i> Error! User not found in database!</h4>
  </div>';
}
?>