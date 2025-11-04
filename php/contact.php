<!DOCTYPE html>
<html lang="en">
    <title>Catalyst Rock Salts</title>
        <meta charset="utf-8">
        <meta name="veiwport" content="width-device-width, initial-scale=1">

        <link rel="stylesheet" href="css/abtus.css">
        <link rel="stylesheet" href="https://use.typekit.net/sxb6bat.css">
        <link rel="stylesheet" href="php/contact.php">

        <!--fontawesome icons-->
        <script src="https://kit.--fontawesome.com/e1899146a.js"></script>
    </head>
    <body>

<?php
//define variables and set to empty values
$nameErr = $emailErr = $commErr = "";
$name = $email = $comm = "";

if ($_SERVER["REQUEST_METHOD" == "POST"]) {
    if (empty($_POST["name"])) {
        $nameErr = "Name is Required";
    } else {
        $name = ($_POST["name"]);
    }
    if (empty($_POST["email"])) {
        $emailErr = "Email is Required";
    } else {
        $email = ($_POST["email"]);
    }
    if (empty($_POST["comment"])) {
        $commErr = "Write your inquiry here";
    } else {
        $comm = ($_POST["comment"]);
    }
}
?>
        <!--Nav Bar-->
        <div class="navContainer">
            <div class="exclude"><a href="main.html"><img src="media/logov2.png"></a></div>
            <div class="btn"><a href="main.html"><h2>Home</h2></a></div>
            <div class="btn"><a href="abtus.html"><h2>About Us</h2></a></div>
            <div class="btn"><a href="contact.html"><h2>Contact Us</h2></a></div>
            <div class="btn"><a href="services.html"><h2>Services</h2></a></div>
        </div>
        <div class="contactform">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
                <!--Name-->
                <label for="name">Name:</label>
                <input type="text" name="name">
                <span class="error">* <?php echo $nameErr;?></span>
                <br><br>
                <!--Email-->
                <label for="email">E-Mail:</label>
                <input type="text" name="email">
                <span class="error">* <?php echo $emailErr;?></span>
                <br><br>
                <!--Comment-->
                <label for="comment">Questions:</label><br>
                <textarea name="comment" rows="5" cols="40"></textarea>
                <span class="error">* <?php echo $commErr;?></span>
                <br><br>
                <!--Submit Button-->
                <button type="submit">Submit!</button>
            </form>
        </div>
    </body>
</html>
