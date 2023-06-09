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
    
    <link rel="stylesheet" type="text/css" href="help.css">
    <title>Home </title>
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



      <section class = "hh">
        <!-- adding the necessary guide and questions by using div -->
            <!-- <div class = "tex">
                <h1> Help </h1><br>
            </div> -->
            <div class="how">
                <b>How can we Help?</b>
            </div>
            <!-- <div class="question">
                <input type="search" name="uname" placeholder="Ask us Questions"><br>
            </div> -->
            <div class="fa">
                <b>FAQ</b>
            </div>
            <div class="one">
               <b> How does system work? </b><br><br>
               <p> -A tax management system works by collecting and organizing tax-related information, such as income, expenses, deductions, and <br>
                credits, from various sources and using it to prepare and file tax returns. Some systems also provide tax planning and forecasting features.</p>
            </div>
            <div class="two">
                <b>What services does system provide? </b><br><br>
                <p>-System provides services such as tax preparation, tax planning, tax compliance, financial reporting, audit support, data import/export
                     and customization to help individuals and organizations manage their tax-related information, filings, and compliance requirements.</p>
            </div>
            <div class="three">
                <b>What are the benefits of using a tax management system?</b> <br><br>
               <p>-Some of the benefits of using a tax management system include accurate and timely filing of tax returns, better visibility <br>
               into tax liabilities and payments, reduced risk of penalties and fines, and improved compliance with tax laws and regulations</p>
            </div>
            <div class="four">
               <b>How does a tax management system calculate my taxes?</b><br><br>
             <p>- A tax management system uses the financial data you provide to calculate your taxes based on <br>
                the applicable tax laws and regulations. It may also consider any deductions or credits you are eligible for. </p>
            </div>
    </section> 

    <footer>
      <div class="three1">
          <h3>Tax Management System</h3>
       </div>
       <div class="con">
          <h5>Contact Us:</h5>
       </div>
       <div class="phone">
          <img src="Images/phone2.png" alt="Call Us">
       </div>
       <div class = "four1"> 
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