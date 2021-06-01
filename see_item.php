<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <nav>

      <div class="logo">
        <p>Ecomerce</p>
      </div>
      <div class="cart">
        <a href="/comerce/cart.php" type="button" name="Cart"> Cart</a>
        <a href="/comerce/adminpannel.php">adminpannel</a>
      </div>
    </nav>
    <div class="itemDescription">

          <?php
          session_start();
          $_SESSION['page'] = $_SERVER['REQUEST_URI'];
          $id = $_GET['id'];
          $connect = new mysqli('localhost','root','','test');

          if ($connect->connect_error) {
            die("Connection failed: " . $connect->connect_error);
          }
        $sql = "SELECT * FROM items WHERE id = $id";

          $result = $connect->query($sql);

          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc() ) {
               echo "<div class='itempic'>";
               echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['picture'] ).'"/> <br>';
               echo "</div>";
          }
           }

           $sql = "SELECT * FROM items WHERE id = $id";

             $result = $connect->query($sql);


           if ($result->num_rows > 0) {
               while($row = $result->fetch_assoc() ) {
                echo "<div class='iteminfo'>";
                echo "<h1>".$row['name']."</h1>";
                echo "<div class='centerDescription'>";
                echo "<h1>Description</h1>";
                echo "<p>".$row['description']."</p>";
                echo '<a href="add-to-cart.php?id='.$row['id'].'">add to cart</a>';
                echo "</div>";
                echo "<h2>".$row['price']."€</h2>";
                echo "</div>";
           }
            }


           ?>


    </div>

  </body>
</html>
