<?php
session_start();
require ("../controllers/game_controller.php");

$user_id = $_SESSION['user_id'];
$difficulty = $_POST['type'];

$total = check_number_of_total_controller($user_id, $difficulty);
$completed = check_number_of_completed_controller($user_id, $difficulty);

if ($completed == 0) {
    $overall = 0;
} else {
    $total_overall = $completed / $total * 100; // Progress as percentage
    $overall = (int) round($total_overall);
}

echo json_encode(['overall' => $overall]); // Return JSON response
?>
