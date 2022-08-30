<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "mobiles";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (isset($_POST['submit'])) {

    if(!empty($_POST['bid'])) {
        $bid = $_POST['bid'];

        $query = "INSERT INTO items(bid) VALUES('$bid')";

        $run = mysqli_query($conn, $query) or die(mysqli_error());

        if($run) {
            echo 
                '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <title>Submit Bid</title>
                    <link rel="stylesheet" href="../css/item.css">
                </head>
                <body>
                    <section class="contact">
                        <div class="main">
                            <div class="contact-text">
                                <h1>Bid submitted successfully!!!</h1>
                                <p><a href="../html/item_mobile.html">Back to Order Page</a></p>
                            </div>
                        </div>
                    </section>
                </body>
                </html>
                ';
        }
        else {
            echo "Bid not submitted!!! Something went wrong!!!";
        }
    }

    else {
        echo "Enter valid bid amount!!!";
    }
}

?>