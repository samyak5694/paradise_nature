
<!DOCTYPE html>
<!-- document_head.html -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/desktop.css">
    <link rel="stylesheet" href="css/estore.css">
    <script src="scripts/rotate.js"></script>
    <script src="scripts/menus.js"></script>
    <script src="scripts/bmiFormValidate.js"></script>
    <script src="scripts/registrationFormValidate.js"></script>
    <script src="scripts/loginFormValidate.js"></script>
    <script src="scripts/shoppingCartAddItemFormValidate.js"></script>
    <title>Nature's Source - Canada's largest specialty vitamin store</title>
  </head>
  <body>
    <header>
            <div id="logo">
          <img src="images/Paradise.jpg"
               alt="Nature's Source"
               width="150" height="100">
      </div>


    
<!-- menus.html -->
    <nav onmouseout="hide()">
      <ul class="Links">
        <li><a href="index.php" onmouseover="show('m1')">Home</a></li>
        <li>
          <span onmouseover="show('m2')">e-store</span> 
          <div id="m2" onmouseover="show('m2')">
            <a href="pages/estore.php">e-store Options</a>
            <a href="catalog.php">Product Catalog</a>
            <a href="pages/registrationForm.php">Register</a>
            <a href="pages/loginForm.php">Login</a>
            <a href="pages/shoppingCart.php?productID=view">View
              Shopping Cart</a>
            <a href="pages/checkout.php">Checkout</a>
            <a href="pages/logout.php">Logout</a>
          </div>
        </li>
        <li>
          <span onmouseover="show('m3')">Products+Services</span> 
          <div id="m3" onmouseover="show('m3')">
            <a href="pages/catalog.php">Product Catalog</a>
            <a href="pages/featured.php">Featured Products</a>
            <a href="pages/services.php">Services</a>
            <a href="pages/suppliers.php">Suppliers</a>
          </div>
        </li>
        <li>
          <span onmouseover="show('m4')">Your Health</span> 
          <div id="m4" onmouseover="show('m4')">
            <a href="pages/bmiForm.php">Compute Your BMI</a>
            <a href="pages/tools.php">Tools+Resources</a>
            <a href="pages/expert.php">Ask An Expert</a>
            <a href="pages/links.php">Useful Links</a>
          </div>
        </li>
        <li>
          <span onmouseover="show('m5')">About Us</span> 
          <div id="m5" onmouseover="show('m5')">
            <a href="pages/about.php">Nature's Source</a>
            <a href="pages/vision.php">Vision+Mission</a>
            <a href="pages/employment.php">Job Opportunities</a>
            <a href="pages/news.php">News Archive</a>
          </div>
        </li>
        <li>
          <span onmouseover="show('m6')">Contact Us</span> 
          <div id="m6" onmouseover="show('m6')">
            <a href="pages/locations.php">Locations</a>
            <a href="pages/feedbackForm.php">Feedback Form</a>
          </div>
        </li>
        <li>
          <a href="pages/sitemap.php" onmouseover="show('m7')">Site Map</a>
        </li>
      </ul>
    </nav>
    </header>
    <main>
      <article class="ProductList">
        <h4 class="ProductHeader">Product List for
          Your Chosen Category</h4>
        <table>
  <tr>
    <th>Product Image</th>
    <th>Product Name</th>
    <th>Price</th>
    <th># in Stock</th>
    <th>Purchase?</th>
  </tr><tr>
      <td>
        <img height='70' width='70'
             src='images/products/prod1.jpg'
             alt='Product Image'>
      </td><td style='text-align: left;'>
        ARRAY MEMO-ARRAY 60C
      </td><td>
        $27.00
      </td><td>
        39
      </td><td>
        <a class='Button' href='pages/shoppingCart.php?productID=708374'>Buy this item</a>
        <a class='Button' href='C:\Dhaval\assignments\E business technologies\Clone\catalog.php'>Return to list of 
                                             product categories</a>
      </td></tr><tr>
      <td>
        <img height='70' width='70'
             src='images/products/prod3.jpg'
             alt='Product Image'>
      </td><td style='text-align: left;'>
        GINKGO 60C
      </td><td>
        $13.99
      </td><td>
        33
      </td><td>
        <a class='Button' href='pages/shoppingCart.php?productID=708376'>Buy this item</a>
        <a class='Button' href='C:\Dhaval\assignments\E business technologies\Clone\catalog.php'>Return to list of 
                                             product categories</a>
      </td></tr><tr>
      <td>
        <img height='70' width='70'
             src='images/products/prod4.jpg'
             alt='Product Image'>
      </td><td style='text-align: left;'>
        GINKGO BILOBA 120C
      </td><td>
        $19.99
      </td><td>
        46
      </td><td>
        <a class='Button' href='pages/shoppingCart.php?productID=708377'>Buy this item</a>
        <a class='Button' href='C:\Dhaval\assignments\E business technologies\Clone\catalog.php'>Return to list of 
                                             product categories</a>
      </td></tr><tr>
      <td>
        <img height='70' width='70'
             src='images/products/prod2.jpg'
             alt='Product Image'>
      </td><td style='text-align: left;'>
        GINKGO BILOBA PHTYO 360C
      </td><td>
        $69.99
      </td><td>
        70
      </td><td>
        <a class='Button' href='pages/shoppingCart.php?productID=708375'>Buy this item</a>
        <a class='Button' href='C:\Dhaval\assignments\E business technologies\Clone\catalog.php'>Return to list of 
                                             product categories</a>
      </td></tr></table>      </article>
    </main>
    <footer>
      <!-- footer_content.html -->
      Nature's Source &copy; 2015 Porter Scobey and Pawan Lingras
    </footer>
  </body>
</html>
