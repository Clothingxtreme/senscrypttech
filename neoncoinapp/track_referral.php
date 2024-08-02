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
$referrer = $data['referrer'];
$referee = $data['referee'];

$stmt = $conn->prepare("INSERT INTO referrals (referrer, referee) VALUES (?, ?)");
$stmt->bind_param("ss", $referrer, $referee);

if ($stmt->execute()) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "error" => $stmt->error]);
}

$stmt->close();
$conn->close();
?>
