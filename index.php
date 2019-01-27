<!DOCTYPE html>
 <html>
   <head>
     <title>JPA Cars Web</title>
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- Import Google Font(s)-->
     <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200 ,700" rel="stylesheet">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
     <!--Import MyStyleSheet-->
     <link type="text/css" rel="stylesheet" href="css/myStyleSheet.css">
     <!--Icon-->
     <link rel="icon" href="favicon.ico" type="image/x-icon"/>
     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <script type="text/javascript" src="js/myjs.js"></script>
     <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="js/materialize.min.js"></script>
     <script type="text/javascript" src="js/materialize.js"></script>
   </head>

     <!--Import jQuery before materialize.js-->
     <!--Navbar-->
     <body class = "ibg gfont1">
       <header>
       <!--Dropdown content begin-->
       <ul id="dropdown1" class="dropdown-content">
         <li><a class="gfont1" href="#">UI #1</a></li>
         <li><a class="gfont1" href="#">#2</a></li>
         <li><a class="gfont1" href="#">#3</a></li>
         <li><a class="gfont1" href="#">#4</a></li>
       </ul>
       <ul id="dropdown2" class="dropdown-content">
         <li><a class="gfont1" href="#">UI #1</a></li>
         <li><a class="gfont1" href="#">#2</a></li>
         <li><a class="gfont1" href="#">#3</a></li>
         <li><a class="gfont1" href="#">#4</a></li>
       </ul>
       <ul id="dropdown3" class="dropdown-content">
         <li><a class="gfont1" href="#">Register</a></li>
         <li><a class="gfont1" href="#">Login</a></li>
         <li><a class="gfont1" href="#">Account Settings</a></li>
         <li><a class="gfont1" href="#">Log Out</a></li>
       </ul>
       <ul id="dropdown4" class="dropdown-content gfont1">
         <li><a class="gfont1" href="#">UI #1</a></li>
         <li><a class="gfont1" href="#">#2</a></li>
         <li><a class="gfont1" href="#">#3</a></li>
         <li><a class="gfont1" href="#">#4</a></li>
       </ul>
       <ul id="dropdown5" class="dropdown-content gfont1">
         <li><a class="gfont1" href="#">UI #1</a></li>
         <li><a class="gfont1" href="#">#2</a></li>
         <li><a class="gfont1" href="#">#3</a></li>
         <li><a class="gfont1" href="#">#4</a></li>
       </ul>
       <ul id="dropdown6" class="dropdown-content gfont1">
         <li><a class="gfont1" href="#">Register</a></li>
         <li><a class="gfont1" href="#">Login</a></li>
         <li><a class="gfont1" href="#">Account Settings</a></li>
         <li><a class="gfont1" href="#">Log Out</a></li>
       </ul>
       <!-- Dropdown content end-->
       <!--Navbar Begin-->
       <nav>
         <div class="nav-wrapper grey darken-2">
           <a href="index.html" class="col l4 s12 brand-logo gfont1">JPA Cars</a>
           <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
           <ul id="nav-mobile" class="right hide-on-med-and-down">
             <li><a class="dropdown-button" href="index.html" data-activates="dropdown1" data-beloworigin="true">Cars</a></li>
             <li><a class="dropdown-button" href="UX.html" data-activates="dropdown2" data-beloworigin="true">About Us</a></li>
             <li><a class="dropdown-button" href="UX.html" data-activates="dropdown3" data-beloworigin="true">Account</a></li>
           </ul>
           <ul class="side-nav" id="mobile-demo">
             <li><a class="dropdown-button" href="UX.html" data-activates="dropdown4" data-beloworigin="true">Cars</a></li>
             <li><a class="dropdown-button" href="#" data-activates="dropdown5" data-beloworigin="true">About Us</a></li>
             <li><a class="dropdown-button" href="#" data-activates="dropdown6" data-beloworigin="true">Account</a></li>
      </ul>
         </div>
         <div>
           <form action ="includes/login.inc.php" method="post">
             <input type = "text" name="mailuid" placeholder="Username/E-mail...">
             <input type = "password" name="mailuid" placeholder="Password">
             <button type = "submit" name="login-submit"> Login</button>
           </form>
           <a href="signup.php">Sign Up</a>
           <form action ="includes/logout.inc.php" method="post">
             <button type = "submit" name="logout-submit"> Log Out</button>
           </form>
       </nav>
     </header>

       <!--Navbar end-->
       <!--First Paragraph Begin-->
       <main>
         <p> You are Logged out! </p>
         <p> You are Logged In! </p>
         <!--Body scripts-->
         <script type="text/javascript" language="javascript">
              $( document ).ready(function(){

                  $(".button-collapse").sideNav();//mobile screen menu init

                  $('.carousel').carousel(); //carousel init

                  $('.carousel-slider').slider({full_width: true});//slider init
              });
          </script>
         <h1 align="center"> TEST HEADER </h1>
         <div class="container">
     <div class="carousel carousel-slider">
    <a class="carousel-item" href="#"><img height="80%" width="80%" src="https://comps.canstockphoto.com/businessman-ready-to-commit-suicide-stock-photos_csp8557263.jpg"></a>
    <a class="carousel-item" href="#"><img height="80%" width="80%" src="https://comps.canstockphoto.com/businessman-ready-to-commit-suicide-stock-photos_csp8557263.jpg"></a>
    <a class="carousel-item" href="#"><img height="80%" width="80%" src="https://comps.canstockphoto.com/businessman-ready-to-commit-suicide-stock-photos_csp8557263.jpg"></a>
    <a class="carousel-item" href="#"><img height="80%" width="80%" src="https://comps.canstockphoto.com/businessman-ready-to-commit-suicide-stock-photos_csp8557263.jpg"></a>
  </div>
</div>
</main>
<!--Footer Start-->
<footer class="page-footer grey darken-2">
         <div class="container">
           <div class="row">
             <div class="left col l4 s12">
               <h5 class="white-text">Links to the developer's online content</h5>
               <ul>
                 <li><a class="grey-text text-lighten-3" href="https://github.com/JordanPCAustin">Github</a></li>
                 <li><a class="grey-text text-lighten-3" href="https://www.linkedin.com/in/jordan-austin-998845141/">LinkedIn</a></li>
                 <li><a class="grey-text text-lighten-3" href="https://jordanpcaustin.github.io/">Personal website of developer </a></li>
                 <li><a class="grey-text text-lighten-3" href="http://materializecss.com/">Framework Used: Materialize</a></li>
               </ul>
             </div>
           </div>
         </div>
         <div class="footer-copyright">
           <div class="container">
            2019 Jordan P C Austin
           <a class="grey-text text-lighten-4 right" href="#!"></a>
           </div>
         </div>
       </footer>
<!--Footer End-->


</body>
 </html>
