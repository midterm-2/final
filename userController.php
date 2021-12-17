<?php
if(!isset($_SESSION)) { 
  session_start(); 
}
require_once 'server.php';
$userss = mysqli_query($db,"SELECT * FROM `users`");
$var=mysqli_fetch_assoc($userss);
$_SESSION['username'] = $var["username"];
$_SESSION['email'] = $var['email'];
?>
