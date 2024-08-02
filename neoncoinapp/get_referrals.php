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

$stmt = $conn->prepare("SELECT COUNT(*) AS referral_count FROM referrals WHERE referrer = ?");
$stmt->bind_param("s", $user);
$stmt->execute();
$stmt->bind_result($referral_count);
$stmt->fetch();

echo json_encode(["referral_count" => $referral_count]);

$stmt->close();
$conn->close();
?>
