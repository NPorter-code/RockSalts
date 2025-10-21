<?php

// define variables and set to empty values
$nameErr = $emailErr = $commentErr = "";
$name = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is Required"
    } else {
        $name = $_POST["name"]
    }
    if (empty($_POST["email"]))
}


?>