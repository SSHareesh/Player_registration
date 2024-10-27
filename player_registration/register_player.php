<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "players";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$player_id = $_POST['player_id'];
$name = $_POST['name'];
$age = $_POST['age'];
$country = $_POST['country'];
$role = $_POST['role'];
$status = $_POST['status'];

$sql = "INSERT INTO players (player_id, name, age, country, role, status) 
        VALUES ('$player_id', '$name', $age, '$country', '$role', '$status')";

if ($conn->query($sql) === TRUE) {
    echo "Player registered successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
