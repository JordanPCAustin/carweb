    <?php
     require "header.php";
     ?>
       <!--Navbar end-->
       <!--First Paragraph Begin-->
       <main>
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
    <a class="carousel-item" href="#"><img height="80%" width="80%" src="https://images.pexels.com/photos/1849115/pexels-photo-1849115.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"></a>
    <a class="carousel-item" href="#"><img height="80%" width="80%" src="https://images.pexels.com/photos/1849115/pexels-photo-1849115.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"></a>
    <a class="carousel-item" href="#"><img height="80%" width="80%" src="https://images.pexels.com/photos/1849115/pexels-photo-1849115.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"></a>
    <a class="carousel-item" href="#"><img height="80%" width="80%" src="https://images.pexels.com/photos/1849115/pexels-photo-1849115.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"></a>
  </div>
</div>
</main>
<!--Footer Start-->
<?php
require "footer.php";
 ?>
</body>
 </html>
