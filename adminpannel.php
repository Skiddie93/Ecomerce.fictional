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
        <button type="button" name="Cart"> Cart</button>
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
      <input type="number" name="price" value="" required='required'>
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
