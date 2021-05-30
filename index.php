<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
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

    <div class="store">

      <?php
          include 'backend/getitems.php'
       ?>

    </div>
    <div class="pages" id="pages">
      <?php
          include 'backend/pages.php'

       ?>
    </div>

  </body>
</html>
