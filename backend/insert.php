<?php

$connect = new mysqli('localhost','root','','test');

if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
 }

if(isset($_POST['submit'])){
  $picture = addslashes(file_get_contents($_FILES['picture']['tmp_name']));
  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $sql = "INSERT INTO items(name, description, price, picture)
  VALUES ('$name','$description',$price,'{$picture}')";


if ($connect->query($sql) === TRUE) {
  echo "<script> alert('Item was added succesfully');window.location.href='http://localhost/comerce/adminpannel.php';</script>";

} else {
  echo "Error: " . $sql . "<br>" . $connect->error;
}
$_POST= array();
}


if(isset($_POST['remove'])){
  $id=$_POST["id"];
  $sql = "DELETE FROM items WHERE id = '$id'";


  if ($connect->query($sql) === TRUE) {
    echo "<script> alert('Item was added succesfully');window.location.href='http://localhost/comerce/adminpannel.php';</script>";

  } else {
    echo "Error: " . $sql . "<br>" . $connect->error;
  }
  $_POST= array();
  }
