<?php
include_once (dirname(__FILE__)) . '/../classes/game_class.php';

//user signup controller
function user_signup_controller($username, $email, $password)
{
    $new_customer = new Game();
    return $new_customer->user_signup($username, $email, $password);
}

// checking user email
function check_user_email_controller($email)
{
    $new_customer = new Game();
    return $new_customer->check_user_email($email);
}

// checking user username
function check_user_username_controller($username)
{
    $new_customer = new Game();
    return $new_customer->check_user_username($username);
}

// adding a task
function add_game_task_controller($task, $truth_dare, $type, $point)
{
    $new_customer = new Game();
    return $new_customer->add_game_task($task, $truth_dare, $type, $point);
}

// selecting all task
function select_all_task_controller()
{
    $new_customer = new Game();
    return $new_customer->select_all_task();
}

// new password update
function new_user_password_controller($email, $password)
{
    $new_customer = new Game();
    return $new_customer->new_user_password($email, $password);
}

// adding new task to user
function add_game_task_to_user_controller($difficulty_id, $user_id, $completed)
{
    $new_customer = new Game();
    return $new_customer->add_game_task_to_user($difficulty_id, $user_id, $completed);
}

  // select game tasks for specific game and user. 
  function select_game_for_specific_user_controller($user_id, $type)
  {
      $new_customer = new Game();
      return $new_customer->select_game_for_specific_user($user_id, $type);
  }
 
   // update user task as completed
   function  update_user_completed_task_controller($difficulty_id, $user_id)
   {
       $new_customer = new Game();
       return $new_customer-> update_user_completed_task($difficulty_id, $user_id);
   }
  
 