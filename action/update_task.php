<?php 
session_start();
require ('../controllers/game_controller.php');
$user_id = $_SESSION['user_id'];
$difficulty_id = $_POST['type_id'];
$update = update_user_completed_task_controller($difficulty_id, $user_id)
?>