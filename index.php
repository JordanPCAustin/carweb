    <?php
     require "includes/header.php";
     ?>
       <!--Navbar end-->
       <!--First Paragraph Begin-->
       <main>
         <body>
         <h1 align="center"> Top cars, Top Prices! </h1>
         <div align="center" class="container">
           <img align ="center" src="assets/img/money.jpeg">
      <?php
           if (isset($_SESSION['UserID'])) {
             echo '<p> You are Logged In! </p>';
           }
           ?>
</div>
</main>
<!--Footer Start-->
<?php
require "includes/footer.php";
 ?>
</body>
 </html>
