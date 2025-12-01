<!DOCTYPE html>
<html lang="en">
    <title>Catalyst Rock Salts</title>
        <meta charset="utf-8">
        <meta name="veiwport" content="width-device-width, initial-scale=1">

        <link rel="stylesheet" href="css/pay.css">
        <link rel="javascript" href="form.js">
        <link rel="stylesheet" href="https://use.typekit.net/sxb6bat.css">

        <!--fontawesome icons-->
        <script src="https://kit.--fontawesome.com/e1899146a.js"></script>
    </head>
    <body>

<?php
//define variables and set to empty values
$nameErr = $emailErr = $areaErr = "";
$name = $email = $area = $service = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is Required";
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }
    if (empty($_POST["email"])) {
        $emailErr = "Email is Required";
    } else {
        $email = htmlspecialchars($_POST["email"]);
    }
    if (empty($_POST["comment"])) {
        $areaErr = "Select Area";
    } else {
        $area = htmlspecialchars($_POST["area"]);
    }
    if (empty($_POST["service"])) {
        $areaErr = "Select Area";
    } else {
        $area = htmlspecialchars($_POST["service"]);
    }
    if (isset($_POST['submit'])) {
        if (empty($_POST["name" or "email" or "area"])){
            null;
        } else {
            // set email parameters
            $to = "Admin@saltshuttle.com";
            $subject = "New customer Order:" . $name;
            $headers = "From: " . $email . "\r\n";
            $headers .= "Reply-to: " . $email . "\r\n";
            $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

            //construct message
            $email_message = "Name: " . $name . "\n";
            $email_message .= "Email: " . $email . "\n\n";
            $email_message .= "Area:\n" . $area . "\n";
            $email_message .= "Service:\n" . $service;

            //send email
            if (mail($to, $subject, $email_message, $headers)) {
                echo "thank you for your valued question, it has been sent!";
            } else {
                echo "you f**ked it up, it doesnt work kell...";
            }
        }
    }
}

?>
        <!--Nav Bar-->
        <div class="navContainer">
            <div class="exclude"><a href="main.html"><img src="media/logov2.png"></a></div>
            <div class="btn"><a href="main.html"><h2>Home</h2></a></div>
            <div class="btn"><a href="abtus.html"><h2>About Us</h2></a></div>
            <div class="btn"><a href="contact.php"><h2>Contact Us</h2></a></div>
            <div class="btn"><a href="services.html"><h2>Services</h2></a></div>
        </div>
        <div class="heres_yer_fucking_form">
            <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
                <!--Name-->
                <label for="name">Name:</label>
                <input id="form" type="text" name="name" autocomplete="off">
                <span class="error">* <?php echo $nameErr;?></span>
                <br><br>
                <!--Email-->
                <label for="email">E-Mail:</label>
                <input id="form" type="text" name="email" autocomplete="off">
                <span class="error">* <?php echo $emailErr;?></span>
                <br><br>
                <!--Comment-->
                <label for="area">Area</label><br>
                <ul>
                    <li>State: Utah</li>
                    <li>Area:
                        <input type="radio" name="area">Layton<br>
                        <input type="radio" name="area">Woods Cross<br>
                        <input type="radio" name="area">Kaysville<br>
                        <input type="radio" name="area">Fruit Heights<br>
                        <input type="radio" name="area">Centerville<br>
                        <input type="radio" name="area">Bountiful
                    </li>
                </ul>
                <br><br>
                <label for="service">Services:</label>
                <ul>
                    <li>
                        <input type="radio" name="service">Standard Ice Melt - $44.95<br>"For most standard driveways and walkways"<br>
                        <input type="radio" name="service">Heavy Coverage Ice Melt - $49.95<br>"For long/steep driveways or heavy ice"<br>
                        <p>Optional Add ons:</p>
                        <input type="radio" name="addon">Same day/storm priority - +14.95<br>
                        <p>Other options</p>
                        <input type="radio" name="other1">Basic Ice Melt - $29.95<br>
                        <input type="radio" name="other2">Ice Melt Bag Delivery Only - $17.95<br>
                    </li>

                <br><br>
                <!--Submit Button-->
                <button type="submit">Submit!</button>
                <span class="submitted"></span>
            </form>
        </div>
    </body>
</html>
