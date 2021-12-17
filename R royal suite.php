<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HOTEL</title>
	<link rel="stylesheet" type="text/css" href="Css/style.css">
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
    <div class="container">
        <div class="row">
        <div class="col-sm-6">
    <h3>ABOUT ROOM</h3>
        <p><h4>Cost: 2,550,000;
Rooms:
3;
Sleeping places:
2;</h4><p>
The 321 m2 Royal Suite offers comfort, convenience and luxury to make your stay unforgettable. The Royal Suite offers city views, enchanting interior design and an exhilarating stay. Characteristics of the room: Total area (321 m2) Bedroom 2 bathrooms Finnish sauna Living room Foyer area Work cabinet Minibar Centralized air conditioning, safe, parquet floor Tea and coffee set Bathroom Shower, toilet Make-up mirror and hairdryer LCD TV, IP TV equipment , satellite TV, music broadcasting Internet connection and telephone</p>
            <button  type="button" class="btn btn-outline-warning" ><a style="
                text-decoration: none;" href="booking.php"> Booking</a></button>
    </div>
            <div class="col-sm-6">
            <img src="Images/Royal%20suite.jpg">
            </div>
    </div>
         </div>
    </div>
    
    
    
    
    
    
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
        
        
        <a style="color: aliceblue">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Home &emsp;&emsp; Contact Us &emsp;&emsp; About Us &emsp;&emsp;Booking &emsp;&emsp;Banquet hall&emsp;&emsp; Restaurants&emsp;&emsp;  &emsp;&emsp;&emsp;&emsp; Offices &emsp;&emsp;Conference halls &emsp;&emsp;<br><br>
            
        </a>
    </footer>
    
    </body>
</html>