<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>REGISTER</title>
	<link rel="stylesheet" type="text/css" href="Css/style4.css">
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
    <a class="btn btn-outline-secondary"   href="login.php">Sign in</a>
  </div>
</nav>
   
<?php include('server.php') ?>

  <div class="header">
    <h2>Register</h2>
  </div>
  
  <form method="post" action="register.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
      Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>









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
    </body>
</html>