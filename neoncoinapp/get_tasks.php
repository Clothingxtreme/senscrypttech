<?php
header('Content-Type: application/json');
$servername = "localhost";
$username = "prot_neons";
$password = "hJnLfA6JHo!acBEh";
$dbname = "prot_giveaway";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user = $_GET['username'];

$stmt = $conn->prepare("SELECT completed_tasks FROM tasks WHERE username = ?");
$stmt->bind_param("s", $user);
$stmt->execute();
$stmt->bind_result($completedTasks);
$stmt->fetch();

if ($completedTasks) {
    echo json_encode(["completedTasks" => json_decode($completedTasks)]);
} else {
    echo json_encode(["completedTasks" => []]);
}

$stmt->close();
$conn->close();
?>
