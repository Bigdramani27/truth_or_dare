<?php
include_once (dirname(__FILE__)) . '../../settings/connection.php';
/// inherit the method from the connection file
class Game extends Connection
{
    // user sign up
    function user_signup($username, $email, $password)
    {
        return $this->query("insert into users(username, email, password, user_role) values ('$username','$email', '$password', 31)");
    }

    // checking users email
    function check_user_email($email)
    {
        return $this->fetchOne("select * from users where email='$email'");
    }

    // checking users email
    function check_user_username($username)
    {
        return $this->fetchOne("select * from users where username='$username' or email='$username'");
    }

    // Updating the user the password
    function new_user_password($email, $password)
    {
        return $this->query("UPDATE users set password = '$password' WHERE email = '$email'");
    }

    // add a game task 
    function add_game_task($task, $truth_dare, $type, $point)
    {
        return $this->query("insert into difficulty (task, truth_dare, type, point) values ('$task', '$truth_dare', '$type', '$point')");
    }

    // selecting all task 
    function select_all_task()
    {
        return $this->fetch("select * from difficulty");
    }

    // adding game tasks for user
    function add_game_task_to_user($difficulty_id, $user_id, $completed)
    {
        return $this->query("INSERT IGNORE INTO user_game (difficulty_id, user_id, completed) VALUES ('$difficulty_id', '$user_id', '$completed')");
    }

    // select game tasks for specific game and user. 
    function select_game_for_specific_user($user_id, $type){
        return $this->fetch("select * from difficulty dif inner join user_game  game on game.difficulty_id = dif.difficulty_id where user_id = '$user_id' and dif.type = '$type' and completed = 'No'");
    }

    //update user task completed to yes 
    function update_user_completed_task($difficulty_id, $user_id){
        return $this->query("update user_game set completed = 'Yes' where difficulty_id = '$difficulty_id' and user_id = '$user_id'");
    }
}
