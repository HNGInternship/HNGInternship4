<html>
<body>

 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hng_fun";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, secret_word FROM secret_word";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo nl2br("id: " . $row["id"]."\n");
        echo nl2br( " secret_word: " . $row["secret_word"]."\n");
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?> 

</body>
</html>