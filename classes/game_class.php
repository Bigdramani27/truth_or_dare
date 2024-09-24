<?php
include_once (dirname(__FILE__)) . '../../settings/connection.php';
/// inherit the method from the connection file
class Game extends Connection
{
    // user sign up
    function user_signup($generate, $username, $email, $password, $profile)
    {
        return $this->query("INSERT into users(user_id, username, email, password, user_role, profile) values ('$generate','$username','$email', '$password', 31, '$profile')");
    }

    // checking users email
    function check_user_email($email)
    {
        return $this->fetchOne("SELECT * from users where email='$email'");
    }

    // checking users email
    function check_user_username($username)
    {
        return $this->fetchOne("SELECT * from users where username='$username' or email='$username'");
    }

    // Updating the user the password
    function new_user_password($email, $password)
    {
        return $this->query("UPDATE users set password = '$password' WHERE email = '$email'");
    }

    // add a game task 
    function add_game_task($task, $truth_dare, $type, $point)
    {
        $task = addslashes($task);
        return $this->query("INSERT into difficulty (task, truth_dare, type, point) values ('$task', '$truth_dare', '$type', '$point')");

    }
  

    // selecting all task 
    function select_all_task()
    {
        return $this->fetch("SELECT * from difficulty");
    }

    // adding game tasks for user
    function add_game_task_to_user($difficulty_id, $user_id, $completed)
    {
        return $this->query("INSERT INTO user_game (difficulty_id, user_id, completed) VALUES ('$difficulty_id', '$user_id', '$completed')");
    }

    // select game tasks for specific game and user. 
    function select_game_for_specific_user($user_id, $type)
    {
        return $this->fetch("SELECT * from difficulty dif inner join user_game  game on game.difficulty_id = dif.difficulty_id where user_id = '$user_id' and dif.type = '$type' and completed = 'No'");
    }

    //update user task completed to yes 
    function update_user_completed_task($difficulty_id, $user_id)
    {
        return $this->query("UPDATE user_game set completed = 'Yes' where difficulty_id = '$difficulty_id' and user_id = '$user_id'");
    }

    //check the number of completed task for a specific game
    function check_number_of_completed($user_id, $type)
    {
        return $this->count("SELECT * from difficulty dif inner join user_game  game on game.difficulty_id = dif.difficulty_id where user_id = '$user_id' and dif.type = '$type' and completed = 'Yes'");
    }

    //check the number of total task for a specific game
    function check_number_of_total($user_id, $type)
    {
        return $this->count("SELECT * from difficulty dif inner join user_game  game on game.difficulty_id = dif.difficulty_id where user_id = '$user_id' and dif.type = '$type'");
    }

    //check the number of total task for a specific game
    function check_number_of_points($user_id)
    {
        return $this->fetchOne("SELECT sum(point) as overall from difficulty dif inner join user_game  game on game.difficulty_id = dif.difficulty_id where user_id = '$user_id' and completed = 'Yes'");
    }

       //check the number of total task for all games played
       function check_number_of_points_overall()
       {
           return $this->fetchOne("SELECT sum(point) as total from difficulty dif inner join user_game  game on game.difficulty_id = dif.difficulty_id where completed = 'Yes'");
       }
    //selecting the top 3 players
    function select_top_3_players()
    {
        return $this->fetch("SELECT 
    users.profile,
    users.username,
    SUM(dif.point) AS total_points FROM 
    difficulty dif INNER JOIN 
    user_game game ON game.difficulty_id = dif.difficulty_id INNER JOIN 
    users ON game.user_id = users.user_id WHERE 
    game.completed = 'Yes' GROUP BY 
    users.user_id ORDER BY 
    total_points DESC LIMIT 3");
    }

    //select the last person from the users table
    function select_last_person()
    {
        return $this->fetchOne("SELECT * from users  order by user_id desc limit 1");
    }

}
