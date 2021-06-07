<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <link rel="stylesheet" href="styles.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body onload= toggler()>
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
        <a href="/comerce/index.php"><svg viewBox="0 0 24 24">
    <path fill="currentColor" d="M20 15V18H23V20H20V23H18V20H15V18H18V15H20M23 10L22.96 10.29L22 13.8C21.11 13.29 20.09 13 19 13C15.69 13 13 15.69 13 19C13 19.7 13.13 20.37 13.35 21H5.5C4.72 21 4.04 20.55 3.71 19.9L1.1 10.44L1 10C1 9.45 1.45 9 2 9H6.58L11.18 2.43C11.36 2.17 11.66 2 12 2S12.65 2.17 12.83 2.44L17.42 9H22C22.55 9 23 9.45 23 10M14 15C14 13.9 13.11 13 12 13S10 13.9 10 15 10.9 17 12 17 14 16.11 14 15M15 9L12 4.74L9 9H15Z" />
</svg></a>
      </div>
    </nav>

    <label class="switch" id="switch">
         <input type="checkbox" class="checkbox" id="check">
         <span class="toggle-thumb">
         </span>
         <p>Add/Remove</p>
    </label>


<div class="panel">

  <div class="additem" id="additem">
    <form class="" action="backend/insert.php" method="post" enctype="multipart/form-data">
      <h1>Add items</h1>
      <h3>Name:</h3>
      <input type="text" name="name" value="" required='required'>
      <h3>Price</h3>
      <input type="number" step=".01" name="price" value="" required='required'>
      <h3>Product Image</h3>
      <input type="file" name="picture" value="" required='required'>
      <h3>Description</h3>
      <textarea name="description" rows="8" cols="80" required='required'></textarea>
      <input type="submit" name="submit" value="submit">
    </form>
  </div>

  <div class="removeitem" id="removeitem">

    <form class="" action="backend/insert.php" method="post">
      <h1>Remove Items</h1>
      <h3>Item ID to be removed</h3>
      <input type="number" name="id" value="" required='required'>
      <input type="submit" name="remove" value="Remove">

    </form>
  </div>

  </div>

  </body>
  <script src="./js/toggle.js"></script>
</html>
