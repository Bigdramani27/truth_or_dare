<?php
// this is for registering
require('../controllers/game_controller.php');

// Assuming $en_password is not defined, I'll use $password for the password variable
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

// checking if passwords match
if ($password != $cpassword) {
    $response = array('success' => false, 'message' => 'Passwords do not match!');
} else {
    $customer = check_user_email_controller($email);

    if ($customer != NULL) {
        $response = array('success' => false, 'message' => 'The email you entered already exists!');
    } else {
        $check_username = check_user_username_controller($username); // Assuming you have a function like this

        if ($check_username != NULL) {
            $response = array('success' => false, 'message' => 'The username you entered already exists!');
        } else {
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            // Call your signup function
            $result = user_signup_controller($username, $email, $hashed_password);

            if ($result) {
                $response = array('success' => true, 'message' => 'Registered successfully!');
            } else {
                $response = array('success' => false, 'message' => 'Registration failed!');
            }
        }
    }
}

echo json_encode($response);
exit();
?>