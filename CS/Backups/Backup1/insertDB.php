<link href="formCSS.css" rel="stylesheet" type="text/css"></link>
<!-- <link rel="stylesheet" href="formCSS.css">

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

<a href="input.php">RETURN TO FORM</a>