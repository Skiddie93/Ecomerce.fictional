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
        <a href="/comerce/cart.php" type="button" name="Cart">
          <svg viewBox="0 0 24 24">
            <path fill="currentColor" d="M17,18C15.89,18 15,18.89 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20C19,18.89 18.1,18 17,18M1,2V4H3L6.6,11.59L5.24,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42A0.25,0.25 0 0,1 7.17,14.75C7.17,14.7 7.18,14.66 7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.58 17.3,11.97L20.88,5.5C20.95,5.34 21,5.17 21,5A1,1 0 0,0 20,4H5.21L4.27,2M7,18C5.89,18 5,18.89 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20C9,18.89 8.1,18 7,18Z" />

            <?php
              session_start();
              if(empty($_SESSION['cart'])){
                $_SESSION['cart'] = array();
              };

              $countItems = count($_SESSION['cart']);
              if($countItems>0){
                echo "::after";
                echo "<span>".$countItems."</span>";
                 }
             ?>
        </svg></a>
        <a href="/comerce/adminpannel.php"><svg viewBox="0 0 24 24">
    <path fill="currentColor" d="M11,2A2,2 0 0,1 13,4V20A2,2 0 0,1 11,22H2V2H11M4,10V14H11V10H4M4,16V20H11V16H4M4,4V8H11V4H4M15,11H18V8H20V11H23V13H20V16H18V13H15V11Z" />
</svg></a>
      </div>
    </nav>

    <div class="itemDescription">

          <?php
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
                echo '<form class="" action="add-to-cart.php?id='.$_GET['id'].'" method="post">';
                echo '<input class="itemAddToCart" type="submit" name="submit" value="Add to cart">';
                echo '<input class="quantityCount" type="number" name="quantity" value="1">';
                echo "</form>";
                echo "</div>";
                echo "<h2>".$row['price']."€</h2>";
                echo "</div>";
           }
            }



           ?>


    </div>



  </body>
</html>
