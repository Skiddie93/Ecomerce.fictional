<?php
session_start();
$connect = new mysqli('localhost','root','','test');
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}




function quantity($id){
$quantity = 0;
foreach ($_SESSION['cart'] as $value) {
  if($value==$id)
  $quantity++;
}
return $quantity;
};



$total = 0;




if(!empty($_SESSION['cart'])){
  $unique_products = array_unique($_SESSION['cart']);

foreach ($unique_products as $value) {
  $sql = "SELECT * FROM items WHERE id = $value";
  $result = $connect->query($sql);
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc() ) {
        $total += $row['price']*quantity($value);
        echo "<tr>";
        echo '<td> <img src="data:image/jpeg;base64,'.base64_encode( $row['picture'] ).'"/> </td>';
        echo "<td>".$row['name']."</td>";
        echo "<td>".quantity($value)."</td>";
        echo "<td>".$row['price']*quantity($value)."€</td>";
        echo "<td><a href='remove_from_cart.php?id=".$value."'>x</a></td>";
        echo "</tr>";
}
}
}
}

echo "<tr>";
echo '<td></td>';
echo "<td></td>";
echo "<td>Toal price</td>";
echo "<td>".$total."€</td>";
echo "</tr>";


 ?>
