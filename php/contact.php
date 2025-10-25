<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trying to get php to work</title>
    <meta charset="utf-8">
</head>
<body>

<?php

// define variables
$name = $_POST["name"];
$email = $_POST["email"];
$comment = $_POST["comment"];


//Log into server
$servername = "localhost";
$username = "ChaosCat";
$password = "WhiteB1ackTe@";

// Create Connection
$conn = new mysqli($servername, $username, $password);

// Check Connection
if ($conn->connect_error) {
    die("Connection Failed: ". $conn->connect_error);
} else{
    echo "Connected Successfully <br><br>";
}

if ($Name === "" and $comment === "" and $email === "") { # if sName and author === nothing dont put into database
    echo "All Feilds Required"; 
} else { # put data into database
$sql = "INSERT INTO saltData (dispName, Email, Comment);
VALUES ('$Name', '$email', '$comment')";
}

if ($conn->query($sql) === TRUE) {
    echo "This fuckin shit worked, HELL YEAH!!";
} else {
    echo "Damn it, it didn't work, you fucked it up man...  :( <br><br> Error:" . $sql . "<br>" . $conn->error;
}

$sql = "SELECT fileID, dispName, Email, Comment FROM saltData";
$result = $conn->query($squl);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["dispName"]. " - Email: " . $row["Email"]. "- Comment:" . $row["Comment"]. "<br>";
    }
}
    else {
        echo "0 results";
    }

$conn->close();
?>

</body>
</html>