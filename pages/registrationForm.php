
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
        <h5>Welcome!<br><span id='datetime'>It's Wednesday, April 8th.<br>Our time is 5:25pm.</span></h5><a class='LongerButton'
                          href='pages/loginForm.php'>
                          Click here to log in</a>      </div>
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
      <article class="Registration">
        <h4>Registration Form</h4>
        <form id="registrationForm"
              onsubmit="return registrationFormValidate();"
              action="scripts/registrationFormResponse.php"
              method="post">
          <table>
            <tr>
              <td>Salutation:</td>
              <td><select name="salute">
                <option>&nbsp;</option>
                <option>Mrs.</option>
                <option>Ms.</option>
                <option>Mr.</option>
                <option>Dr.</option>
              </select></td>
            </tr>
            <tr>
              <td>First Name:</td>
              <td><input required type="text" name="firstName" size="40"
                  title="Initial capital, then lowercase and no spaces"
                  pattern="^[A-Z][a-z]*$"></td>
            </tr>
            <tr>
              <td>Middle Initial:</td>
              <td><input type="text" size="4"
                         id="middleInitial" name="middleInitial"
                         title="A capital letter followed by a period"
                         pattern="^[A-Z]\.$"></td>
            </tr>
            <tr>
              <td>Last Name:</td>
              <td><input required type="text" name="lastName" size="40"
                  title="Initial capital, then lowercase and no spaces"
                  pattern="^[A-Z][a-z]*$"></td>
            </tr>
            <tr>
              <td>Gender:</td>
              <td><select name="gender">
                <option>&nbsp;</option>
                <option>Female</option>
                <option>Male</option>
                <option>Other/Do not want to disclose</option>
              </select></td>
            </tr>
            <tr>
              <td>E-mail Address:</td>
              <td><input required type="text" name="email" size="40"
                  title=
                  "x@y.z, x and y can have . or -, z only 2 or 3 letters"
                  pattern=
                  "^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})$"
                  value="Must be unique to our database"></td>
            </tr>
            <tr>
              <td>Phone Number:</td>
              <td><input required type="text" size="40" name="phone"
                         title="xxx-yyy-zzzz, area code optional"
                         pattern="^(\d{3}-)?\d{3}-\d{4}$"></td>
            </tr>
            <tr>
              <td>Street Address:<br />(include postal code)</td>
              <td><textarea id="address" name="address" 
                            rows="2" cols="30"></textarea></td>
            </tr>
            <tr>
              <td>City:</td>
              <td><input id="city" name="city"
                         type="text" size="40"></td>
            </tr>
            <tr>
              <td>State/Province:</td>
              <td><input id="state" name="state"
                         type="text" size="40"></td>
            </tr>
            <tr>
              <td>Country:</td>
              <td><select id="country" name="country">
                <option>&nbsp;</option>
                <option>USA</option>
                <option>Canada</option>
              </select></td>
            </tr>
            <tr>
              <td>Preferred Login Name:</td>
              <td><input required type="text" size="40"
                         id="loginName" name="loginName"
                         title="Letters and digits only (at least 6)"
                         pattern="^\w{6,}$"></td>
            </tr>
            <tr>
              <td>Login Password:</td>
              <td><input required type="password" size="40"
                         id="loginPassword" name="loginPassword"
                         title="Letters and digits only (at least 6)"
                         pattern="^\w{6,}$"></td>
            </tr>
            <tr>
              <td><input type="submit"
                         value="Submit Form Data"></td>
              <td><input type="reset"
                         value="Reset Form"></td>
            </tr>
          </table>
        </form>
      </article>
    </main>
    <footer>
      <!-- footer_content.html -->
      Nature's Source &copy; 2015 Porter Scobey and Pawan Lingras
    </footer>
  </body>
</html>
