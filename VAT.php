<?php

// Establish connection to database
$mysqli = new mysqli('localhost', 'root', '');

if ($mysqli->connect_error) {
    echo "Connection error";
    error_log("Error connecting to database: " . $mysqli->connect_error);
} else {
    $mysqli->select_db('tms');
}

// Calculate VAT when form is submitted
if (isset($_POST['submit'])) {
    $sale_amount = $_POST['sale_amount'];
    $vat_percentage = 13;
    $vat_amount = (13 / 100) * $sale_amount;

    $insert = "INSERT INTO vat(sale_amount, vat_amount) VALUES('$sale_amount', '$vat_amount')";
    $mysqli->query($insert);

    header("Location: taxreceipt.php?");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="vat.css">
    <title>Home </title>
</head>

<body>
<section class="nav">
        <div class="logo">
            <img src="Images/splash1.png" alt="Splash Screen">
        </div>
        <div class="navbar">
            <!-- navigation links -->
            <a class="active" href="home.php">Home</a>
            <a href="aboutus.php">About Us</a>
            <a href="contact.php">Contact Us</a>
            <a href="help.php">Help</a>
            <!-- <a href="setting.php">Settings</a> -->
        </div>
        <!-- search button -->
        <div class="search">
        <input class="input" name="text" placeholder="Search..." type="search">
        </div>
        <!-- user img -->
  
  
        <div class="dropdown">
          <img onclick="myFunction()" class="dropbtn" src="Images/user.png" alt="User">
            <div id="myDropdown" class="dropdown-content">
              <a href="#">Tax Report</a>
              <a href="login.php">Login</a>
              <a href="login.php">Logout</a>
              <a href="admin.php">Admin Dashboard</a>
            </div>
          </div>
  
          <script>
            /* When the user clicks on the button, 
            toggle between hiding and showing the dropdown content */
            function myFunction() {
              document.getElementById("myDropdown").classList.toggle("show");
            }
            
            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
              if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                  var openDropdown = dropdowns[i];
                  if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                  }
                }
              }
            }
            </script>
  
        <!-- <div class="user"> 
            <img src="user.png" alt="User">
        </div> -->
    </section>


    <section class="mainform">
        <div class="hh">
            <h3>Tax Calculator</h3>
        </div>
        <!-- <div class="bb1">
            <h5>Nepal : 13%</h5>
        </div>
        <div class="bb2">
            <h6>You need to fill in two fields. Do not fill in the currency.</h6>
        </div> -->
        <form action="" method="post">
            <div class="third">
                <div class="inputbox">
                    <span class="details">VAT % = 13%</span>
                    <!-- <input type="text"  required>   -->
                </div>
                <!-- <div class="inputbox">
                <span class="details">Pre- VAT Price: </span>
                <input type="text" placeholder="Enter Pre- VAT Price" required>  
            </div>
            <div class="inputbox">
                <span class="details">Sale Price: </span>
                <input type="text" placeholder="Enter your Sale Price" required>  
            </div> -->
                <div class="inputbox">
                    <label for="sale_amount">Sale Amount:</label>
                    <input type="text" name="sale_amount" id="sale_amount">
                </div>
                <div class="container">
                <button type = "submit" name = "submit"> Calculate Tax </button>
                <!-- 
                    <input type="submit" name="submit" value="Calculate Tax"> -->
                    <!-- <div class="button">
                    <input type="submit" name="submit" value="Sign Up">
                </div> -->
                    <button>Clear All</button>
                </div>
            </div>
        </form>
    </section>

    <footer>
      <div class="three">
          <h3>Tax Management System</h3>
       </div>
       <div class="con">
          <h5>Contact Us:</h5>
       </div>
       <div class="phone">
          <img src="Images/phone2.png" alt="Call Us">
       </div>
       <div class = "four"> 
         <b>+977 9861486762,<br><br>
          977 9172648956</b>
       </div> 
       <div class="mail">
        <img src="Images/mail2.png" alt="Mail Us">
     </div>
       <div class = "five"> 
        <b>tax@gmail.com </b>  
        </div> 
        <div class="vl"></div>
        <div class="setnav">
          <a href="home.php">Home</a> <br><br>
          <a href="aboutus.php">About Us</a><br><br>
          <a href="help.php">Help</a><br><br>
      </div>
      <div class="icon">
        <img src="Images/face2.png">
        <img src="Images/insta2.png">
        <img src="Images/link2.png">
     </div>
  </footer>
</body>

</html>