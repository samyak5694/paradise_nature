a<!DOCTYPE html>
<!-- document_head.html -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
	 <base href="https://www.myclone.page/Dev5/Paradise.html">
    <link rel="stylesheet" href="C:\Dhaval\assignments\E business technologies\Clone\css\desktop.css">
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

<!-- menus.html -->
    <nav onmouseout="hide()">
      <ul class="Links">
        <li><a href="paradise.php" onmouseover="show('m1')">Home</a></li>
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
      <article class="CategoryList">
        <h4 class="ProductHeader">Complete List of
          Product Categories</h4>
        <table><tr><td><ul><li>Vitamins<ol><li><a href='pages/category.php?categoryCode=ADMLT'>Adult multi-vitamins</a></li>
<li><a href='pages/category.php?categoryCode=AMINO'>Amino-acid supplements</a></li>
<li><a href='pages/category.php?categoryCode=ANTI'>Anti-oxidants</a></li>
<li><a href='pages/category.php?categoryCode=CALMA'>Calcium and Magnesium supplement</a></li>
<li><a href='pages/category.php?categoryCode=IMMUN'>Boosting your immunity</a></li>
<li><a href='pages/category.php?categoryCode=IRON'>Iron supplement</a></li>
<li><a href='pages/category.php?categoryCode=KDMUL'>Children multi-vitamins</a></li>
<li><a href='pages/category.php?categoryCode=MIN'>Mineral supplement</a></li>
<li><a href='category.php?categoryCode=VIT+A'>Vitamin A</a></li>
<li><a href='category.php?categoryCode=VIT+B'>Vitamin B</a></li>
<li><a href='category.php?categoryCode=VIT+C'>Vitamin C</a></li>
<li><a href='pages/category.php?categoryCode=VIT+D'>Vitamin D</a></li>
<li><a href='pages/category.php?categoryCode=VIT+E'>Vitamin E</a></li>
<li><a href='pages/category.php?categoryCode=ZINC'>Zinc Supplement</a></li>
</ol></li><li>Spa and beauty<ol><li><a href='pages/category.php?categoryCode=AROMA'>Aromatic therapy</a></li>
<li><a href='pages/category.php?categoryCode=BATH'>Bath products</a></li>
<li><a href='pages/category.php?categoryCode=BOOK'>Books on health</a></li>
<li><a href='pages/category.php?categoryCode=COSM'>Cosmetics enhancements</a></li>
<li><a href='pages/category.php?categoryCode=DEOD'>Deodorant needs</a></li>
<li><a href='pages/category.php?categoryCode=GIFT'>Gifts of healthy life</a></li>
<li><a href='pages/category.php?categoryCode=HAIR'>Hair treatment</a></li>
<li><a href='pages/category.php?categoryCode=ORAL'>Oral health</a></li>
<li><a href='pages/category.php?categoryCode=RELAX'>Relaxing body and mind</a></li>
<li><a href='pages/category.php?categoryCode=SHAVE'>Shaving comfort</a></li>
<li><a href='pages/category.php?categoryCode=SKIN'>Healthy and beautiful skin</a></li>
<li><a href='pages/category.php?categoryCode=SOAP'>Soaps and body cleansers</a></li>
<li><a href='pages/category.php?categoryCode=STRES'>Relieving stress</a></li>
<li><a href='pages/category.php?categoryCode=THERA'>Therapeutic needs</a></li>
</ol></li></ul></td>
<td class='AlignToTop'><ul><li>Nutrition<ol><li><a href='pages/category.php?categoryCode=BARS'>Nutritional bars</a></li>
<li><a href='pages/category.php?categoryCode=BODY'>Body enhancement</a></li>
<li><a href='pages/category.php?categoryCode=DETOX'>Detoxification needs</a></li>
<li><a href='pages/category.php?categoryCode=PROT'>Protein dietary supplement</a></li>
<li><a href='pages/category.php?categoryCode=WEIGH'>Weight management products</a></li>
</ol></li><li>Natural products<ol><li><a href='pages/category.php?categoryCode=GINKO'>Ginseng remedies</a></li>
<li><a href='pages/category.php?categoryCode=GREEN'>Environmentally friendly</a></li>
<li><a href='pages/category.php?categoryCode=HERB'>Herbal remedies</a></li>
<li><a href='pages/category.php?categoryCode=SLEEP'>Deep and Natural Sleep</a></li>
<li><a href='pages/category.php?categoryCode=TEA'>Soothing tea based drinks</a></li>
</ol></li><li>Family<ol><li><a href='pages/category.php?categoryCode=APP'>Application products</a></li>
<li><a href='pages/category.php?categoryCode=BABY'>Baby products</a></li>
<li><a href='pages/category.php?categoryCode=MEN'>Men's health</a></li>
<li><a href='pages/category.php?categoryCode=WOM'>Women's health</a></li>
</ol></li><li>Cures for illness<ol><li><a href='pages/category.php?categoryCode=ACID'>Acidic supplements</a></li>
<li><a href='pages/category.php?categoryCode=ALLER'>Relief from allergies</a></li>
<li><a href='pages/category.php?categoryCode=BLOOD'>Blood balancing</a></li>
<li><a href='pages/category.php?categoryCode=CHOL'>Cholestrol management</a></li>
<li><a href='pages/category.php?categoryCode=COLD'>Cold remedies</a></li>
<li><a href='pages/category.php?categoryCode=DIAB'>Diabetic treatment</a></li>
<li><a href='pages/category.php?categoryCode=DIG'>Digestive relief</a></li>
<li><a href='pages/category.php?categoryCode=URI'>Urinary tract remedies</a></li>
</ol></li></ul></td></tr></table>      </article>
    </main>
    <footer>
      <!-- footer_content.html -->
      Nature's Source &copy; 2015 Porter Scobey and Pawan Lingras
    </footer>
  </body>
</html>
