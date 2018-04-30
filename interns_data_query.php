<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hng_fun";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, username, image_filename FROM interns_data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo nl2br("name: ". $row["name"]. "\n");
       echo nl2br (" Slack username: ". $row["username"]. "\n");
       echo nl2br(" image_filename" . $row["image_filename"]. "\n");
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>