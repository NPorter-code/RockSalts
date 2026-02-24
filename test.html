<html lang="en">
    <html lang="en">
    <head>
        <title>Catalyst Rock Salts</title>
        <meta charset="utf-8">
        <meta name="veiwport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/contact.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!--fontawesome icons-->
        <script src="https://kit.fontawesome.com/2570fe89af.js" crossorigin="anonymous"></script>
    <body>

<?php
//define variables and set to empty values
$nameErr = $emailErr = $commErr = "";
$name = $email = $comm = "";

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
        $commErr = "Write your inquiry here";
    } else {
        $comm = htmlspecialchars($_POST["comment"]);
    }
    if (isset($_POST['submit'])) {
        if (empty($_POST["name" or "email" or "comment"])){
            null;
        } else {
            // set email parameters
            $to = "Admin@saltshuttle.com";
            $subject = "New customer question:" . $name;
            $headers = "From: " . $email . "\r\n";
            $headers .= "Reply-to: " . $email . "\r\n";
            $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

            //construct message
            $email_message = "Name: " . $name . "\n";
            $email_message .= "Email: " . $email . "\n\n";
            $email_message .= "Message:\n" . $comm;

            //send email
            if (mail($to, $subject, $email_message, $headers)) {
                echo "thank you for your valued question, it has been sent!";
            } else {
                echo "nope";
            }
        }
    }
}

?>
        <!--Nav Bar-->
        <div class="fixedpos">
            <div class="navContainer">
                <button onclick="myFunction()" class="dropbtn">
                    <i onclick="myFunction()" class="fa-solid fa-bars" style="pointer-events: none;"></i>
                </button>
                <div class="exclude"><a href="main.html"><img src="media/logov2.png"></a></div>
            </div>
            <div class="extra">
                <div id="myDropdown" class="dropdown-content">
                    <br>
                    <div class="btn"><a href="main.html"><h2>Home</h2></a></div>
                    <div class="btn"><a href="abtus.html"><h2>About Us</h2></a></div>
                    <div class="btn"><a href="contact.php"><h2>Contact Us</h2></a></div>
                    <div class="btn"><a href="services.html"><h2>Services</h2></a></div>
                </div>
            </div>
        </div>
        <br>
        <div class="contactform">
            <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?" enctype="multipart/form-data">
                <!--Name-->
                <label for="name">Name:</label><br>
                <input id="form" type="text" name="name" autocomplete="off">
                <span class="error">* <?php echo $nameErr;?></span>
                <br><br>
                <!--Email-->
                <label for="email">E-Mail:</label><br>
                <input id="form" type="text" name="email" autocomplete="off">
                <span class="error">* <?php echo $emailErr;?></span>
                <br><br>
                <!--Comment-->
                <label for="comment">Questions:</label><br>
                <textarea id="form" name="comment" rows="5" cols="40" autocomplete="off"></textarea>
                <span class="error">* <?php echo $commErr;?></span>
                <br><br>
                <!--Submit Button-->
                <button type="submit">Submit!</button>
                <span class="submitted"></span>
            </form>
        </div>
        <script>
            function myFunction(){
                document.getElementById("myDropdown").classList.toggle("show")
                document.getElementsByClassName("colors").classList.toggle("move")
            }

            window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
                    var dropdown = document.getElementsByClassName("dropdown-content");
                    if (dropdown.classList.contains('show')) {
                        dropdown.classList.remove('show');
                    }
                }
            }
        </script>
    </body>
</html>
