<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (isset($_POST['submit'])) {

    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $query = "INSERT INTO form(name, email, subject, message) VALUES('$name', '$email', '$subject', '$message')";

        $run = mysqli_query($conn, $query) or die(mysqli_error());

        if($run) {
            //echo "Form submitted sucessfully";
            echo 
                '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <title>Submitted Sucessfully!</title>
                    <link rel="stylesheet" href="../css/contact.css">
                </head>
                <body>
                    <section class="contact">
                        <div class="main">
                            <div class="contact-text">
                                <h1>Thank you for reaching us. We will contact you at our earliest!</h1>
                                <p>
                                <a href="../index.html">HOME</a>    |     
                                <a href="../html/contact.html">CONTACT US</a>
                                </p>
                            </div>
                        </div>
                    </section>
                </body>
                </html>
                ';
        }
        else {
            echo "Form not submitted";
        }
    }

    else {
        echo "all fields required";
    }
}

?>