<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>// AJAX request to update the HTML span with the number of goals
        function updateGoals() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("total-goals").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "get_goals.php", true);
            xhttp.send();
        }
    
        // Call the updateGoals function every 5 seconds
        setInterval(updateGoals, 5000);</script>
</head>
<body>
    <span id="total-goals"><?php echo $total_goals; ?></span>
</body>
</html>