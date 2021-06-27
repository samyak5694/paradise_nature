<!DOCTYPE html>
<!-- document_head.html -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
	<link rel="icon" href="images/Paradise.jpg">
    <link rel="stylesheet" href="css/desktop.css">
    <link rel="stylesheet" href="css/estore.css">
    <script src="scripts/rotate.js"></script>
    <script src="scripts/menus.js"></script>
    <script src="scripts/bmiFormValidate.js"></script>
    <script src="scripts/registrationFormValidate.js"></script>
    <script src="scripts/loginFormValidate.js"></script>
    <script src="scripts/shoppingCartAddItemFormValidate.js"></script>
    <title>Paradise Nutrition</title>
  </head>
  <body bgcolor="#F0F8FF">
    <header>
            <div id="logo">
          <img src="images/Paradise.jpg"
               alt="Nature's Source"
               width="150" height="100">
      </div>

	  
  <menus.html>
    <nav onmouseout="hide()">
      <ul class="Links">
        <li><a href="https://www.myclone.page/Dev5/index.php" onmouseover="show('m1')">About Us</a></li>
        <li><a href="https://www.myclone.page/Dev5/pages/soon.php" Span onmouseover="show('m2')">Vision</a></li>
        <li>
          <span onmouseover="show('m3')">Products+Services</span> 
          <div id="m3" onmouseover="show('m3')">
            <a href="catalog.php">Product Catalog</a>
            <a href="https://www.myclone.page/Dev5/pages/soon.php">Featured Products</a>
          </div>
        </li>
        <li>
          <span onmouseover="show('m4')">Accessories</span> 
          <div id="m4" onmouseover="show('m4')">
            <a href="https://www.myclone.page/Dev5/pages/soon.php">Shakers</a>
            <a href="https://www.myclone.page/Dev5/pages/soon.php">Scoops and Tubs</a>
            <a href="https://www.myclone.page/Dev5/pages/soon.php">Dumbells</a>
            <a href="https://www.myclone.page/Dev5/pages/soon.php">Training Gears</a>
          </div>
        </li>
        <li>
          <span onmouseover="show('m5')">Clothing</span> 
          <div id="m5" onmouseover="show('m5')">
            <a href="https://www.myclone.page/Dev5/pages/soon.php">Mens</a>
            <a href="https://www.myclone.page/Dev5/pages/soon.php">Womens</a>
            <a href="https://www.myclone.page/Dev5/pages/soon.php">Clearance</a>
            <a href="https://www.myclone.page/Dev5/pages/soon.php">First Time sale</a>
          </div>
        </li>
        <li>
          <span onmouseover="show('m6')">Dietary Needs</span> 
          <div id="m6" onmouseover="show('m6')">
            <a href="https://www.myclone.page/Dev5/pages/soon.php">Vegan</a>
            <a href="https://www.myclone.page/Dev5/pages/soon.php">Gluten Free</a>
          </div>
        </li>
        <li><a href="https://www.myclone.page/Dev5/pages/soon.php" onmouseover="show('m7')">Site
        Map</a></li>
      </ul>
    </nav>

    </header>
    <main><br>
      <article class="ShoppingCart"><br>
        <h4 class="ShoppingCartHeader">Shopping Cart</h4>
        <form id='orderForm'
           onsubmit='return shoppingCartAddItemFormValidate();'
           action='scripts/shoppingCartAddItem.php'>
      <table border='1px'>
        <tr>
          <th>Product Image</th>
          <th>Product Name</th>
          <th>Price</th>
          <th># in Stock</th>
          <th>Quantity</th>
          <th>Total</th>
          <th>Action</th>
        </tr><tr>
      <td>
        <img height='70' width='70'
             src='images/organic.jpg' alt='Product Image'>
      </td><td style='text-align: left;'>
        
      </td><td style='text-align: right;'>
        $0.00
      </td><td>
        
      </td><td>
      <input type='hidden' id='productID' name='productID' value=>
      <input type='text' id='quantity' name='quantity' size='3'>
     </td><td style='text-align: right;'>
      TBA
     </td><td>
      <p class='Centered' style='font-size:100%'>
        <input class='Button' type='submit' value='Add to cart'></p>
      <p><a class='Button' href='catalog.php'>
        Continue shopping</a></p>
     </td>
  </tr><tr>
      <td class='Notification' colspan='5'>
        Grand Total
      </td><td class='RightAligned'>
        <strong>$0.00</strong>
      </td><td>
        <p><a class='Button' href='pages/checkout.php'>
            Proceed to checkout</a></p>
      </td>
    </tr>
  </table>
</form>      </article>
    </main>
    <footer>
      <!-- footer_content.html -->
      Nature's Source &copy; 2015 Porter Scobey and Pawan Lingras
    </footer>
  </body>
</html>
