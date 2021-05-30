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
          <a href="/comerce/index.php" type="button" name="Cart"> Store</a>
          <a href="/comerce/adminpannel.php">adminpannel</a>
        </div>

    </nav>
      <div class="cartitems">
        <table>
  <tr>
    <th></th>
    <th>Product</th>
    <th>quantity</th>
    <th>price</th>
  </tr>
  <?php
  include 'backend/checkout.php'
   ?>
</table>



      </div>
  </body>
</html>
