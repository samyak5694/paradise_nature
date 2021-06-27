<!DOCTYPE html>
<!-- document_head.html -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <base href="http://cs.smu.ca/webbook2e/ch10/nature/">
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
          <img src="images/naturelogo.gif"
               alt="Nature's Source"
               width="608" height="90">
      </div>

      <div id="welcome">
        <h5>Welcome, Liz!<br>
                  Liz
                C. Crow<br><span id='datetime'>It's Wednesday, April 8th.<br>Our time is 5:30pm.</span></h5><a class='LongerButton'
                          href='pages/logout.php'>
                          Click here to log out</a>      </div>
      <script>
        //This script sets up the AJAX infrastructure for 
        //requesting date and time updates from the server.
        var request = null;
        function getCurrentTime()
        {
            request = new XMLHttpRequest();
            var url = "common/time.php";
            request.open("GET", url, true);
            request.onreadystatechange = updatePage;
            request.send(null);
        }
        function updatePage()
        {
            if (request.readyState == 4)
            {
                var dateDisplay = document.getElementById("datetime");
                dateDisplay.innerHTML = request.responseText;
            }
        }
        getCurrentTime();
        setInterval('getCurrentTime()', 60000)
      </script>
<!-- menus.html -->
    <nav onmouseout="hide()">
      <ul class="Links">
        <li><a href="index.php" onmouseover="show('m1')">Home</a></li>
        <li>
          <span onmouseover="show('m2')">e-store</span> 
          <div id="m2" onmouseover="show('m2')">
            <a href="pages/estore.php">e-store Options</a>
            <a href="pages/catalog.php">Product Catalog</a>
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
      <article class="Estore">
        <h3>Welcome to our e-store ...</h3>
        <p><strong>Thank you for visiting us for all your health
          needs.</strong><br>We carry a large collection of products
          for a naturally healthy lifestyle.<br>For your shopping and
          browsing convenience, please choose one of the following
          links:</p>
        <ul>
          <li>
            Just want to see what we have to offer?<br>To browse our
            exciting product catalog <a class="NoDecoration"
            href="pages/catalog.php">click here</a>.
          </li>
          <li>
            Ready to purchase and already have a username and
            password?<br>To log in to our e-store and begin shopping
            <a class="NoDecoration" href="pages/loginForm.php">click
            here</a> (if not logged in already).
          </li>
          <li>
            Need to register for our e-store so you can make
            purchases?<br>To register (you only need to do it once)
            <a class="NoDecoration"
               href="pages/registrationForm.php">click here</a>.
          </li>
          <li>
            Trying to log in as a different user?<br>
            You must first <a class="NoDecoration" 
            href="pages/logout.php">click here to log out</a>.
          </li>
        </ul>
      </article>
    </main>
    <footer>
      <!-- footer_content.html -->
      Nature's Source &copy; 2015 Porter Scobey and Pawan Lingras
    </footer>
  </body>
</html>
