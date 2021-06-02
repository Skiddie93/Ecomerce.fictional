<?php
session_start();

if(empty($_SESSION['cart'])){
  $_SESSION['cart'] = array();
}

if(isset($_POST['submit'])){
  for ($i=0; $i < $_POST['quantity'] ; $i++) {
  array_push($_SESSION['cart'], $_GET['id']);
 }
 }
 else{
   array_push($_SESSION['cart'], $_GET['id']);
 }

header("Location:".$_SESSION['page']);
die();
 ?>
