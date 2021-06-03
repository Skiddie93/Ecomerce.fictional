<?php




$connect = new mysqli('localhost','root','','test');

if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}

global $page;
global $results_per_page;
$results_per_page = 12;
if (isset($_GET["page"])) {
  $page  = $_GET["page"]; }
else {
  $page=1; };

  $_SESSION['page'] = $_SERVER['REQUEST_URI'];
$start_from = ($page-1) * $results_per_page;

$sql = "SELECT * FROM items LIMIT $start_from,$results_per_page ";

$result = $connect->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc() ) {
      echo '<div class="item">';
     echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['picture'] ).'"/> <br>';
     echo '<h1><a href="see_item.php?id='.$row['id'].'">'.$row['name'].'</h1></a>';
     echo '<h2>'.$row['price'].'€</h2>';
     echo '<a href="add-to-cart.php?id='.$row['id'].'">add to cart</a>';
     echo '</div>';
}
 }

 ?>
