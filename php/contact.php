<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trying to get php to work</title>
    <meta charset="utf-8">
</head>
<body>

<?php
// define variables

if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'We don\'t have mysqli!!!';
} else {
    echo 'Phew we have it!';
}

//Log into server
$servername = "localhost";
$username = "root";
$password = "TotallySQLingR!ghtn0w";
$dbname = "SaltShuttleServer";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection Failed: ". $conn->connect_error);
} else{
    echo "Connected Successfully <br><br>";
}



$conn->close();
?>

</body>
</html>
