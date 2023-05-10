<?php
$mysqli = new mysqli('localhost:3307', 'root', '');

if ($mysqli->connect_error) {
    echo "Connection error";
} else {
    $mysqli->select_db('tax');
}

if (isset($_POST['submit'])) {

    $country = $_POST['country'];
    $freight = $_POST['freight'];
    $invoice = $_POST['invoice'];
    $excise_duty = $_POST['excise_duty'];
    $custom_duty = $_POST['custom_duty'];
    $vat = $_POST['vat'];

    $total_amount = $freight+$invoice;
    $vat_amount = (13/100)*$total_amount;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="custom.css">
    <title>Home </title>
</head>

<body>
    <section class="nav">
        <div class="logo">
            <img src="splash1.png" alt="Splash Screen">
        </div>
        <div class="navbar">
            <a class="active" href="home.php">Home</a>
            <a href="aboutus.php">About Us</a>
            <a href="contact.php">Contact Us</a>
            <a href="help.php">Help</a>
            <a href="setting.php">Settings</a>
        </div>
        <input class="input" name="text" placeholder="Search..." type="search">
        <div class="user">
            <img src="user.png" alt="User">
        </div>
    </section>
    <form action="" method="post">
        <section class="mainform">
            <div class="second">
                <!-- creating form for the user to write their details to it -->
                <div class="inputbox">
                    <span class="details">Originating Country: </span>
                    <input type="text" name="country" placeholder="enter originating Country" required>
                </div>
                <div class="inputbox">
                    <span class="details">Freight Amount: </span>
                    <input type="number" name="freight" placeholder="enter freight Amount" required>
                </div>
                <div class="inputbox">
                    <span class="details">Invoice Amount of product: </span>
                    <input type="text" name="invoice" placeholder="enter Invoice Amount" required>
                </div>

                <button>Clear All</button>
            </div>


            <div class="third">
                <div class="inputbox">
                    <span class="details">Excise duty: </span>
                    <input type="text" name="excise_duty" placeholder="Excise Duty" required>
                </div>
                <div class="inputbox">
                    <span class="details">Custom duty rate: </span>
                    <input type="text" name="custom_duty" placeholder="Custom Duty" required>
                </div>
                <div class="inputbox">
                    <span class="details">VAT: </span>
                    <input type="text" name="vat" placeholder="vat" required>
                </div>
                <button name="submit">Calculate Tax</button>
            </div>
        </section>
        <form action="" method="post">
</body>

</html>