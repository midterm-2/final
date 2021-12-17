<?php
require_once "server.php";
$email = $_POST['email'];
$phone = $_POST['phone'];
$room = $_POST['room'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
mysqli_query($db, "INSERT INTO `booking` (`id`, `email`, `phone`, `room`, `checkin`, `checkout`) VALUES (NULL, '$email', '$phone', '$room', '$checkin', '$checkout')");
header('Location: order_put.php');
