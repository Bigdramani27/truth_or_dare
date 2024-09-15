<?php 
session_start();
require ('../../game/controllers/game_controller.php');

$email = $_POST['email'];
$check = check_user_email_controller($email);

if($check){
    $response = array('success' => true, 'message' => 'reset_password.php');
    $_SESSION['confirmed_email'] = $email;
    echo json_encode($response);
    exit();
} else{
    $response = array('success' => false, 'message' => 'Email does not exist');
    echo json_encode($response);
    exit(); 
}
echo json_encode($response);

?>