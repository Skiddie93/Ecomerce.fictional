<?php
session_start();

foreach ($_SESSION['cart'] as $key => $value) {
if ($value==$_GET['id']) {
  unset($_SESSION['cart'][$key]);
}


}
header("Location: cart.php")
 ?>
