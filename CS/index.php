<?php
$servername = "localhost";
$username = "DaWests";

$password = "admin";
$dbname = "cs300";

// Create and check connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT name, email, DOB, suggestions FROM members";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "name: " . $row["name"]. " - email: " . $row["email"]. " " . $row["suggestions"]. "<br>";
    }
} else {
    echo "NO RESULTS";
}

mysqli_close($conn);
?>