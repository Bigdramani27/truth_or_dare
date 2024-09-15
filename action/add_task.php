<?php
require ("../controllers/game_controller.php");

$task = $_POST['task'];
$truth_dare = $_POST['truth_dare'];
$type = $_POST['type'];
$point = $_POST['point'];

$update = add_game_task_controller($task, $truth_dare, $type, $point);

if($update){
    $response = array('success' => true, 'message' => 'Task has been added');
    echo json_encode($response);
    exit();
}

?>