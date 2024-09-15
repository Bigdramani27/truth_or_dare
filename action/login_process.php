<?php
// this is for registering
require('../controllers/game_controller.php');
session_start();
// Assuming $en_password is not defined, I'll use $password for the password variable
$username = $_POST['username'];
$password = $_POST['password'];


$customer = check_user_username_controller($username);
//check if the email exists in the database.
if ($customer == NULL) {
    $response = array('success' => false, 'message' => 'Incorrect username or password!');
    echo json_encode($response);
    exit;
} else {
    if (password_verify($password, $customer['password'])) {
        $_SESSION['email'] = $customer['email'];
        $_SESSION['username'] = $customer['username'];
        $_SESSION['user_role'] = $customer['user_role'];
        $_SESSION['user_id'] = $customer['user_id'];
        $_SESSION['pass'] = $password;
        // check if the user is a user
        if ($_SESSION['user_role'] == 31) {
            $select = select_all_task_controller();
            foreach ($select as $pick){
                $add= add_game_task_to_user_controller($pick['difficulty_id'], $customer['user_id'], "No");
            }
          
            $response = array('success' => true, 'message' => '../index.php');
            echo json_encode($response);
            exit();
        }
        //check if user is admin
        if ($_SESSION['user_role'] == 19) {
            $response = array('success' => true, 'message' => '../admin/index.php');
            echo json_encode($response);
            exit();
        }
    } else {
        $response = array('success' => false, 'message' => 'Email or Password is incorrect!');
        echo json_encode($response);
        exit;
    }
}
