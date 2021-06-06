<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet"> 
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
        <a href="/comerce/index.php"><svg viewBox="0 0 24 24">
    <path fill="currentColor" d="M20 15V18H23V20H20V23H18V20H15V18H18V15H20M23 10L22.96 10.29L22 13.8C21.11 13.29 20.09 13 19 13C15.69 13 13 15.69 13 19C13 19.7 13.13 20.37 13.35 21H5.5C4.72 21 4.04 20.55 3.71 19.9L1.1 10.44L1 10C1 9.45 1.45 9 2 9H6.58L11.18 2.43C11.36 2.17 11.66 2 12 2S12.65 2.17 12.83 2.44L17.42 9H22C22.55 9 23 9.45 23 10M14 15C14 13.9 13.11 13 12 13S10 13.9 10 15 10.9 17 12 17 14 16.11 14 15M15 9L12 4.74L9 9H15Z" />

        </svg></a>
        <a href="/comerce/adminpannel.php"><svg viewBox="0 0 24 24">
    <path fill="currentColor" d="M11,2A2,2 0 0,1 13,4V20A2,2 0 0,1 11,22H2V2H11M4,10V14H11V10H4M4,16V20H11V16H4M4,4V8H11V4H4M15,11H18V8H20V11H23V13H20V16H18V13H15V11Z" />
</svg></a>
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
