<link href="styleCSS.css" rel="stylesheet" type="text/css"></link>

<h1>INFO SENT, THANKS FOR THE FEEDBACK :)</h1>
<div class="feedback-confirmation"><a href="home.html"> return to home page </a></div>


<?php
$servername = "localhost";
$username = "DaWests";
$password = "admin";
$dbname = "cs300";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $suggestions = $_POST["suggestions"];
$suggestions = str_replace("'","",$suggestions);

// Create and check connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO info (name, email, dob, suggestions)
VALUES ('$name', '$email', '$dob', '$suggestions')";

if (mysqli_query($conn, $sql)) {
echo "EVERYTHING WORKING";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

