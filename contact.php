<?php

if($_POST["submit"]) {
    $recipient="your@email.address";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
<!DOCTYPE html>
<html>
    <header>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <title></title>
        <div class="wrapper">
            <div class="namecontainer">
                <div class="name">
                <h1>Jonathan Huynh</h1>
                </div>
                <div class="menu">
                    <p style="text-align: center;"><a href="index.html">About Me</a> | <a href="portfolio.html">Portfolio</a> | <a href="contact.php"><b>Contact</b></a></p>
                </div>
            </div>
        </div>
    </header>
    <body>
    <div class="bigcontainer">
        <div class="main">
            <div class="h2container">
                <h2>Contact</h2>
            </div>
            <div class="content">
                <div class="formcontainer">
                <form action="contact.php" method="POST" enctype="text/plain">
                    Name:<br>
                    <input size="75" type="text" name="sender" style="float: center;">
                    <br>
                    <br>
                    E-mail:<br>
                    <input size="75" type="text" name="senderEmail">
                    <br>
                    <br>
                    Comments, questions, concerns:<br>
                    <textarea name="message" rows="10" cols="75"></textarea>
                    <br><br>
                    <input type="submit" name="submit">
                    <input type="reset" value="reset">
                </form>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>This is some text</p>
    </footer>
    </body>
</html>