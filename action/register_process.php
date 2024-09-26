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
    exit();
} else {
    $customer = check_user_email_controller($email);

    if ($customer != NULL) {
        $response = array('success' => false, 'message' => 'The email you entered already exists!');
        exit();
    } else {
        $check_username = check_user_username_controller($username); // Assuming you have a function like this

        if ($check_username != NULL) {
            $response = array('success' => false, 'message' => 'The username you entered already exists!');
            exit();
        } else {
            $generate =  uniqid();
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);
            $profile = ['../wp-content/uploads/2023/10/profile.png', '../wp-content/uploads/2023/10/profile2.png', '../wp-content/uploads/2023/10/profile3.png', '../wp-content/uploads/2023/10/profile4.png'];
            // shuffle($profile);
            $pick =  select_last_person_controller();
            $last_profile_url = $pick['profile']; // This should be one of the URLs

            // Find the current index of the profile URL in the list
            $last_index = array_search($last_profile_url, $profile);
            
            // Compute the next index and select the next profile URL
            $next_index = ($last_index + 1) % count($profile);
            $next_profile_url = $profile[$next_index];
          

            // Call your signup function
            $result = user_signup_controller($generate, $username, $email, $hashed_password, $next_profile_url);
            //adding all games to user 
            $select = select_all_task_controller();


            foreach ($select as $pick) {
                $add = add_game_task_to_user_controller($pick['difficulty_id'], $generate, "No");
            }

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