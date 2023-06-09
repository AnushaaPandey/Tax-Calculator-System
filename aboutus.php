<!-- // session_start();
// if(!isset($_SESSION['username'])){
// header("location: http://localhost:8080/tms/home.php");
// } -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="aboutus.css">
    <title>About Us</title>
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
          <!-- <div id="myDropdown" class="dropdown-content">
            <a href="#">Tax Report</a>
            <a href="login.php">Login</a>
            <a href="login.php">Logout</a>
            <a href="index.php">Admin Dashboard</a>
          </div> -->
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

   <!-- <section class="body">
        
          <div class="one">
            <span class="rule"><b>Rules and Regulations:</b></span>
            <span class="ruletopic">Income Tax</span>
              <p> As per the law bided in Nepal for the single people yearly: <br><br>
                •	If your annual income is up-to 5,00,000 your income rate will be of 1%  <br><br>
                •	Annually income is more than 5,00,001 – 7,00,000 your tax rate for the money in between that amount will be 10% which is if your annual income is 6,00,000 your tax rate for first 5,00,000 amount will be of 1% and for the rest 1,00,000 will be of 10% <br><br>
                •	Eventually if your annual income is between 7,00,001 – 10,00,000 your tax rate for 5,00,000 will be of 1% and for the money between 5,00,001 – 7,00,000 will be of 10% and for the money  between 7,00,001 – 10,00,000 the tax rate will be of 20%<br><br>
                •	Similarly, to the annual income for 10,00,001 – 20,00,000 the tax rate will be of 30% <br> <br>
                •	And for the annual income above 20,00,000 the tax rate will be of 36% <br> <br><br><br> --> 


                <!-- <span class="custom">Custom Tax</span><br><br>
                
                <div class="cus">Customs duty shall be chargeable on all goods 
                  to be exported or imported except those goods which enjoy customs duty 
                  exemption pursuant to this Act or the prevailing law. <br> <br>
                  For the calculation in our website we have kept 5 goods which calculate 
                  custom tax according to their percentage.
                  <br><br>
                  •	Frozen sea food package : This include 6% in SAARC countries and 10% in general.<br><br>

                  •	Carrots : This include 9% in SAARC countries and 10% in general.  <br><br>

                  •	Coconut : This include 6% in SAARC countries and 10% in general.  <br><br>

                  •	Almond and hazelnut: This include 9% SAARC countries and 10% in general.<br> <br><br><br>

                </div>
                  <span class="vat">VAT</span><br><br>
                  The deduction of the VAT rate is 13%  -->
                  
           <!-- </div> -->



           <section class="body">
                   
                    <div class="topic">
                      <h4> Rules and Regulations</h4>
                    </div>
                    <div class="income">
                      <b>Income Tax</b>
                    </div> 
                   <div class="part1">
                    As per the law bided in Nepal for the single people yearly: <br><br>
                    •	If your annual income is up-to 5,00,000 your income rate will be of 1%  <br><br>
                    •	Annually income is more than 5,00,001 – 7,00,000 your tax rate for the money in between that amount will be 10% which is if your annual income is 6,00,000 your tax rate for first 5,00,000 amount will be of 1% and for the rest 1,00,000 will be of 10% <br><br>
                    •	Eventually if your annual income is between 7,00,001 – 10,00,000 your tax rate for 5,00,000 will be of 1% and for the money between 5,00,001 – 7,00,000 will be of 10% and for the money  between 7,00,001 – 10,00,000 the tax rate will be of 20%<br><br>
                    •	Similarly, to the annual income for 10,00,001 – 20,00,000 the tax rate will be of 30% <br> <br>
                    •	And for the annual income above 20,00,000 the tax rate will be of 36% <br><br>

                    <div class="custom">
                      <b>Custom Tax</b>
                    </div>
                    
                    <div class="part2">
                      Customs duty shall be chargeable on all goods 
                       to be exported or imported except those goods which enjoy customs duty 
                       exemption pursuant to this Act or the prevailing law. <br> <br>
                       For the calculation in our website we have kept 5 goods which calculate 
                       custom tax according to their percentage.
                       <br><br>
                       •	Frozen sea food package : This include 6% in SAARC countries and 10% in general.<br><br>

                       •	Carrots : This include 9% in SAARC countries and 10% in general.  <br><br>

                       •	Coconut : This include 6% in SAARC countries and 10% in general.  <br><br>

                       •	Almond and hazelnut: This include 9% SAARC countries and 10% in general.
                    </div>
                    <div class="vat">
                      <b>VAT Tax</b>
                    </div>

        <div class="part3">
                      The deduction of the VAT rate is 13%.
                    </div>

                   </div>

                  
                 <div class="ll"> 
                    <!-- keeping buttons for tax calculations -->
                  <ul class="u1">
                        <span class="tax"><center><b Tax Calculations:</b></center></span>
                        <button class="learn-more">
                            <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                            </span>
                            <a href="income.php"><span class="button-text">Income Tax</span></a>
                          </button>
                          <button class="learn-more">
                            <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                            </span>
                            <a href="custom.php"><span class="button-text">Custom Tax</span></a>
                          </button>
                          <button class="learn-more">
                            <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                            </span>
                            <a href="vat.php"><span class="button-text">Vat</span></a>
                          </button>
                    </ul>
                </div> 

              </section>
    <!-- <div class="footer">
     <div class="three">
         <i> Ways to Contact Us: </i>
      </div>
      <div class="phone">
         <img src="phone.png" alt="Call Us">
      </div>
      <div class = "four"> 
        <b>+977 9861486762,  977 9172648956</b>
      </div> 
    </div> -->
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