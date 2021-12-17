<?php
require_once "server.php";
$username = $_POST['username'];
$email = $_POST['email'];
$password_unencrypted = $_POST['password'];
$password=md5($password_unencrypted);
mysqli_query($db, "INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES (NULL, '$username', '$email', '$password')");
header('Location: adminController.php');
