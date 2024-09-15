<?php
session_start();
require("../controllers/game_controller.php");

$en_password = $_POST['password'];
$c_password = $_POST['c_password'];
$email = $_SESSION['confirmed_email'];


if ($en_password != $c_password) {
    $response = array('success' => false, 'message' => 'Passwords do not match');
} else {
    $password = password_hash($en_password, PASSWORD_BCRYPT);
   $update = new_user_password_controller($email, $password);
    session_destroy();
    $response = array('success' => true, 'message' => 'Password has been reset');
}


echo json_encode($response);
