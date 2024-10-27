<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "players";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$player_id = isset($_GET['player_id']) ? $_GET['player_id'] : null;
if ($player_id) {
    $sql = "SELECT * FROM players WHERE player_id = '$player_id'";
} else {
    $sql = "SELECT * FROM players";
}

$result = $conn->query($sql);
$players = [];
while ($row = $result->fetch_assoc()) {
    $players[] = $row;
}

echo json_encode($players);
$conn->close();
?>
