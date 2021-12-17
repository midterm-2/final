<?php
if(!isset($_SESSION)) { 
  session_start(); 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HOTEL</title>
	<link rel="stylesheet" type="text/css" href="Css/style2.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class=" navbar-collapse" >
      <img src="Images/logo.svg">
    <ul class="navbar-nav mr-auto mt-4 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactus.php">CONTACT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="booking.php">BOOKING</a>
      </li>
    </ul>
    <?php
    if (!empty($_SESSION['username'])) {
    if (!empty($_SESSION['username'])) {
      echo '<a class="btn btn-outline-secondary"   href="#">'. $_SESSION["username"] .'</a> &ensp;';
      echo '<p><a href="logout_user.php"><img src="Images/58452.png" width="45" 
   height="45" alt="Пример"></a></p>';

    }
      else {
          echo '<a class="btn btn-outline-secondary"   href="login.php">Sign in</a> &ensp;';      }

    }
    elseif (!empty($_SESSION['login'])) {
      echo '<p><a href="adminController.php"><img src="Images/admin.png" width="55" 
   height="45" alt="Пример"></a></p>';
    }
      else {
        echo '<a class="btn btn-outline-secondary"   href="login.php">Sign in</a> &ensp;';  
          echo '<a class="btn btn-outline-secondary"   href="login_to_admin.php">Sign in as admin</a>'; 
              }

      ?>
  </div>
</nav>
<div class="jumbotron">
    <h3 class="text-center">Rixos Khadisha</h3>
    <h5 class="text-center">The Rixos Khadisha Shymkent Hotel is the first international five-star hotel in the southern region of Kazakhstan, located in the very center of Shymkent. Rixos Khadisha Shymkent brings history, culture and quality together. In rooms, suites, restaurants, spas and meeting rooms, the hotel offers a unique atmosphere in which comfort and pleasure have materialized. The new hotel has already become a kind of landmark of the city, a symbol of southern hospitality and generosity. And you should learn more about the new cultural, gastronomic, health and business center of Shymkent.</h5>
    </div>
    
    
      
   
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images/b1q5_ho_01_p_1024x768.jpg" class="d-block w-100" alt="photo1">
    </div>
    <div class="carousel-item">
      <img src="Images/b1q5_ho_00_p_1024x768.jpg" class="d-block w-100" alt="photo2">
    </div>
    <div class="carousel-item">
      <img src="Images/b1q5_ho_02_p_1024x768.jpg" class="d-block w-100" alt="photo3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    
    
    <p></p>
    <p></p>
    <footer class="main_footer" style=" padding: 0; border: 0; font-size: 100%;
    font: inherit; vertical-align: baseline; background: #4D4D4D;
    overflow: hidden;">
        <div class="rightpic" style="padding-top: 100px; position: absolute;">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2949.8134453879366!2d69.5944170988327!3d42.32517762021526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38a91c18c7775911%3A0x7a97c0a7a826a86a!2sRixos%20Khadisha%20Shymkent!5e0!3m2!1sru!2skz!4v1614935379907!5m2!1sru!2skz" width="500" height="375" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        <a style="color: #F4A460"><center><span style="font-size: 45px; color: aliceblue">Contact Us</span><br>Свяжитесь с нами</center></a>
        <a style="margin-left: 10px; color: aliceblue">
            <span style="color: #F4A460; font-size: 35">WE ARE LOCATED</span><br><span style="margin-left: 10px;">Shymkent, Zheltoksan Str. 17</span><br>
            <span style="color: #F4A460; font-size: 35; margin-left: 10px">Call</span><br>

            <span style="margin-left: 10px;">+7 (727) 291 96 00 - dep. booking, 09:00-18:00</span><br>
            <span style="margin-left: 10px;">+7 (727) 291 91 01 - (around the clock)</span><br>
            <span style="margin-left: 10px;">+7 (702) 383 86 58 - dep. room stock sales (working hours from 09:00-18:00)</span><br>
            <span style="margin-left: 10px;">+7 (775) 069 34 67 - Reception</span>
        <br><br>
        <button type="button" class="btn btn-outline-warning" style="margin-left: 10px;">REQUEST A CALL</button><br><br>
        <span style="color: #F4A460; font-size: 35; margin-left: 10px">WRITE TO US</span><br>
            <span style="margin-left: 10px;">reservation1@kazakhstanhotel.kz</span><br>
            <span style="margin-left: 10px;">sales2@kazakhstanhotel.kz</span><br><br>
            <span style="color: #F4A460; font-size: 35; margin-left: 10px">WE ARE ON THE SOCIAL NETWORK</span><br>
            
            <a style="margin-left: 10px; text-decoration: none; color: #F4A460" href="https://instagram.com/nurmax0310?igshid=bdpmza68m1bt">@nurmax0310</a>&emsp;&emsp;&emsp;&emsp;
            <a style="margin-left: 10px; text-decoration: none; color: #F4A460" href="https://instagram.com/imanngalli?igshid=1azrm4cvn08o6">@imanngalli</a><br>
            
            
        </a>
       <p>
        <div>
           <hr>
        </div>
        
        
        <a style="color: aliceblue">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Home &emsp;&emsp; Contact Us &emsp;&emsp; About Us &emsp;&emsp;Booking &emsp;&emsp;Banquet hall&emsp;&emsp; Restaurants&emsp;&emsp;  &emsp;&emsp;Rooms&emsp;&emsp;  &emsp;&emsp;Conference halls &emsp;&emsp;<br><br>
            
        </a>
    </footer>
    
    
    
    
    
    
    
    
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
    
    </body>
</html>
