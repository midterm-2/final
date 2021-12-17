<?php
require_once 'server.php';
$userss = mysqli_query($db,"SELECT * FROM `users`");
$rooms = mysqli_query($db,"SELECT * FROM `booking`");
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
    <a class="btn btn-outline-secondary"   href="#">User management</a>&ensp;
    <p><a href="logout_admin.php"><img src="Images/58452.png" width="45" 
   height="45" alt="Пример"></a></p>
  </div>
</nav>
<center>
<div class="conteiner">
<table style="width: 800px;">
   <thead style="background: #fc0" class="thead-dark">
    <tr>
     <th scope="col">&ensp; id </th>
     <th scope="col"> username </th> 
     <th scope="col"> e-mail </th>
     <th scope="col"></th>
    </tr> 
   </thead>
   <tbody style="background: #ccc">
   	<?php
   	while ($var=mysqli_fetch_assoc($userss)) {
   		echo '<tr>
     <th scope="row">&ensp;'.$var["id"].'</th>
     <td>'. $var["username"] .'</td> 
     <td>'. $var["email"]. '</td> 
     <td align="right">
     	<div class="btn-group">
     		<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Action
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="edit_users.php?id='. $var["id"] .'">Edit</a></li>
    <li><a class="dropdown-item" href="delete_users.php?id='. $var["id"] .'">Delete</a></li>
  </ul>
     	</div>
     	
     </td>
    </tr>';
   }?>
    </tbody>
  </table>

</div><br>
<div class="conteiner">
<table style="width: 800px;">
   <thead style="background: #fc0" class="thead-dark">
    <tr>
     <th scope="col">&ensp; email </th>
     <th scope="col"> phone </th> 
     <th scope="col"> room </th>
     <th scope="col"> check-in</th>
     <th scope="col">check-out </th>
    </tr> 
   </thead>
   <tbody style="background: #ccc">
    <?php
    while ($var=mysqli_fetch_assoc($rooms)) {
      echo '<tr>
     <td scope="row">&ensp;'.$var["email"].'</td>
     <td>'. $var["phone"] .'</td> 
     <td>'. $var["room"]. '</td>
     <td>'. $var["checkin"]. '</td> 
     <td>'. $var["checkout"] .'</td> 
     
     
    </tr>';
   }?>
    </tbody>
  </table>

</div><br>
<form action="add_users.php" method="post">
	
		<label for="name">Username: </label><br>
		<input type="text" name="username"><br></br>
		<label for="email">Email: </label><br>
		<input type="text" name="email"><br></br>
		<label for="password">Password: </label><br>
		<input type="password" name="password"><br></br>
       <input type="submit" name="submit" value="ADD">
	</form>
</center>
<br>

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
    

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>
</html>