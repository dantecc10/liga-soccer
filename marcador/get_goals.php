<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "live_stats";

$conn = new mysqli("localhost", "liga-soccer", "soccerLeague22!!", "soccer_league");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to get the sum of goals
$sql = "SELECT SUM(goles) as total_goals FROM test_goles";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $total_goals = $row["total_goals"];
        //echo $total_goals;
    }
} else {
    $total_goals = 0;
}

$conn->close();
