    <?php
     require "includes/header.php";
     ?>
       <!--Navbar end-->
       <!--First Paragraph Begin-->
       <main>
         <body>
         <h1 align="center"> Top cars, Top Prices! </h1>
         <div align="center" class="container">
           <img align ="center" width="50% "height="50%" src="assets/img/money.jpeg">
      <?php
           if (isset($_SESSION['UserID'])) {
             $sql = "SELECT Searched FROM searches WHERE Searched HAVING COUNT(*) > 2";
             $result = mysqli_query($conn,$sql);
             var_dump($result);
             echo "<h3> You are Logged In! </h3>";
             echo "<h4> Welcome, ".$_SESSION['UserFName']." !</h4>";
             echo "<p> Your favourite search items are:",$result,"</p>";
           }
           else {
             echo "<h3> Please Log In to Continue </h3>";
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
