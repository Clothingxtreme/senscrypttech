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

$data = json_decode(file_get_contents('php://input'), true);
$user = $data['username'];
$completedTasks = json_encode($data['completedTasks']);

$stmt = $conn->prepare("INSERT INTO tasks (username, completed_tasks) VALUES (?, ?) ON DUPLICATE KEY UPDATE completed_tasks=?");
$stmt->bind_param("sss", $user, $completedTasks, $completedTasks);

if ($stmt->execute()) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "error" => $stmt->error]);
}

$stmt->close();
$conn->close();
?>
