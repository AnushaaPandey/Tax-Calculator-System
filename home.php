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
    
    <link rel="stylesheet" type="text/css" href="home.css">
    <title> Home </title>
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

    <section class="body">
          <div class="one">
            <!-- adding information in home page -->
            <div class=" welcome ">  <h5 style ="font-size:25px; width:130%; margin-left: -270px;"> Welcome to Tax Management System </h5></div>
            
              <!-- <div class="topic">  -->
               <p style = "text-align: justify; font-size:19px; margin-left: -700px;"> Our system allows for easy import of financial data from real-time
                tax calculation and hassle-free electronic. 
                We provide tax planning tools, audit support, and reporting
                 to help you stay on track with your tax obligations and 
                 minimize your tax liability. <br>

                Join our system today and experience the convenience and peace
                 of mind that comes with efficiently and effectively managing 
                 your taxes.Our team is here to provide support and assistance
                every step of the way. <br>

                Our Tax Management System allows you to calculate the tax of income tax, custom tax and vat
                In income tax, there is caterogories for the tax calculation of married and unmarried male and female for now.
                However our system is still working for the calculation of Custom tax and vat which will be provided
                in our website very soon.</p>
                
              <!-- </div> -->
           </div>
            <div class="ll">
                <!-- buttons for the tax calculations -->
                 <ul class="u1">
                     <span class="tax"><b>Tax Calculations:</b></span>
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
    <!-- creating class div to make the splash page -->
    <div class="splash">
        <div class="splash-img">
            <!-- adding the img to it -->
        <img src="Images/splash1.png" alt="Splash Screen">
        </div>
    </div>
    <!-- using javascript to keep its functionality  -->
    <script>
        var splashScreen = document.querySelector('.splash');
        splashScreen.addEventListener('click',()=>
        {
            splashScreen.style.opacity = 40 ;
            setTimeout(()=>{
                splashScreen.classList.add('hidden')
            },610)
        })
    </script>


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

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="home.css">
    <title>Home </title>
</head>
<body> -->
    <!-- navigation bar -->
    <!-- <section class="nav">
        <div class="logo">
            <img src="Images/splash1.png" alt="Splash Screen">
        </div>
        <div class="navbar"> -->
            <!-- navigation links -->
            <!-- <a class="active" href="#">Home</a>
            <a href="aboutus.php">About Us</a>
            <a href="contactus.php">Contact Us</a>
            <a href="help.php">Help</a> -->
            <!-- <a href="setting.php">Settings</a> -->
        <!-- </div> -->
        <!-- search button -->
        <!-- <div class="search">
        <input class="input" name="text" placeholder="Search..." type="search">
        </div> -->
        <!-- user img -->


        

          <!-- <script> -->
            <!-- /* When the user clicks on the button, 
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
            </script> -->

        <!-- <div class="user"> 
            <img src="user.png" alt="User">
        </div> -->
    <!-- </section> -->
<!-- 
    <section class="body">
          <div class="one"> -->
            <!-- adding information in home page -->
            <!-- <span class="welcome"><b>Welcome to Tax Management System</b></span>
              <p> Our system allows for easy import of financial data from real-time
                 tax calculation and hassle-free electronic. 
               
                We provide tax planning tools, audit support, and reporting
                 to help you stay on track with your tax obligations and 
                 minimize your tax liability. 
                
                Join our system today and experience the convenience and peace
                 of mind that comes with efficiently and effectively managing 
                 your taxes.Our team is here to provide support and assistance
                every step of the way.

                Our Tax Management System allows you to calculate the tax of income tax, custom tax and vat
                In income tax, there is caterogories for the tax calculation of married and unmarried male and female for now.
                However our system is still working for the calculation of Custom tax and vat which will be provided
                in our website very soon.
              </p>
           </div>
            <div class="ll"> -->
                <!-- buttons for the tax calculations -->
                 <!-- <ul class="u1">
                     <span class="tax"><b>Tax Calculations:</b></span>
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
                </div> -->

    <!-- </section> -->
    <!-- creating class div to make the splash page
    <div class="splash">
        <div class="splash-img"> -->
            <!-- adding the img to it -->
        <!-- <img src="Images/splash1.png" alt="Splash Screen">
        </div>
    </div> -->
    <!-- using javascript to keep its functionality  -->
    <script>
        var splashScreen = document.querySelector('.splash');

        setTimeout(function() {
          splashScreen.setAttribute("hidden", "hidden");
        }, 1000);

        // splashScreen.addEventListener('click',()=>
        // {
        //     splashScreen.style.opacity = 0 ;
        //     setTimeout(()=>{
        //         splashScreen.classList.add('hidden')
        //     },610)
    //     })
    // </script>


    <!-- <footer>
      <div class="three">
          <h3>Tax Management System</h3>
       </div>
       <div class="con">
          <h5>Contact Us:</h5>
       </div>
       <div class="phone">
          <img src="Images/phone.png" alt="Call Us">
       </div>
       <div class = "four"> 
         <b>+977 9861486762,<br><br>
          977 9172648956</b>
       </div> 
       <div class="mail">
        <img src="Images/mail.png" alt="Mail Us">
     </div>
       <div class = "five"> 
        <b>tax@gmail.com </b>  
        </div> 
        <div class="vl"></div>
        <div class="setnav">
          <a href="home.php">Home</a> <br><br>
          <a href="aboutus.php">About Us</a><br><br>
          <a href="setting.php">Settings</a><br><br>
      </div>
      <div class="icon">
        <img src="Images/facebook.png">
        <img src="Images/instagram.png">
        <img src="Images/link2.png">
     </div>
  </footer>
  
</body>
</html>
       -->