<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "live_stats";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to get the sum of goals
$sql = "SELECT SUM(goals) as total_goals FROM player_stats";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $total_goals = $row["total_goals"];
    }
} else {
    $total_goals = 0;
}

$conn->close();
?>
JS code to update the HTML span:

javascript
Copy code
// AJAX request to update the HTML span with the number of goals
function updateGoals() {
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("total-goals").innerHTML = this.responseText;
}
};
xhttp.open("GET", "get_goals.php", true);
xhttp.send();
}

// Call the updateGoals function every 5 seconds
setInterval(updateGoals, 5000);
HTML code for the span that displays the number of goals:

html
Copy code
<span id="total-goals"><?php echo $total_goals; ?></span>
In this code, the PHP script fetches the total number of goals from the database and stores it in the $total_goals variable. The HTML span displays the value of $total_goals. The JavaScript code uses an AJAX request to fetch the updated value of $total_goals from the server every 5 seconds and updates the HTML span without reloading the page.