<!-- 
session_start();
// if(!isset($_SESSION['username'])){
// header("location: http://localhost:8080/tms/home.php");
// } -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="contactus.css">
    <title>Contact Us</title>
</head>
<body>
    <!-- navigation bar -->
    <section class="nav">
        <div class="logo">
            <img src="Images/splash1.png" alt="Splash Screen">
        </div>
        <div class="navbar">
            <!-- navigation links -->
            <a class="active" href="home.php">Home</a>
            <a href="aboutus.php">About Us</a>
            <a href="contactus.php">Contact Us</a>
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
              <!-- <a href="#">Tax Report</a> -->
              <?php
                  session_start();
                  if (isset($_SESSION['username']) && isset($_SESSION['admin'])) {
                    echo "<a href='admin.php'>Admin Dashboard</a>";
                    echo "<a href='report.php'>Tax Report</a>";
                  }

                  if(isset($_SESSION['username'])){
                      echo "<a href='logout.php'> Log Out</a>";
                      echo "<a href='report.php'>Tax Report</a>";
                  } else {
                      echo "<a href='index.php'> Log In</a>";;
                  }
              ?>
              
            </div>
            
            <!-- <div id="myDropdown" class="dropdown-content">
              <a href="#">Tax Report</a>
              <a href="login.php">Login</a>
              <a href="login.php">Logout</a>
              <a href="index.php">Admin Dashboard</a>
            </div> -->
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

    <section class = "info">
        <!-- creating a div and add the necessary information and icons for contact us -->
        <div class = "one">
            <h2> Contact Us</h2>
        </div>
        <div class = "two">
            <h1>Tax Management System</h1>
        </div>
        <div class="three">
           <i> Ways to Contact Us: </i>
        </div>
        <div class="phone">
            <img src="Images/phone.png" alt="Call Us">
        </div>
        <div class = "four"> 
           <b>+977 9861486762,  977 9172648956</b>
        </div>
        <div class="mail">
            <img src="Images/mail.png" alt="Call Us">
        </div>
        <div class="five">
            <b><u> tax@gmail.com</u></b>
        </div>
        <div class="fb">
                <img src="Images/facebook.png" alt="taxmandu">
        </div>
        <div class="six">
                <b><u> taxmandu</u></b>
        </div>
        <div class="insta">
            <img src="Images/instagram.png" alt="taxmandu">
    </div>
    <div class="seven">
            <b><u> @taxmandu</u></b>
    </div>
    </section>



    
</body>
</html>
