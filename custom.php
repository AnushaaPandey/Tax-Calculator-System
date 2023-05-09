<?php


    session_start();
    
    if(!isset($_SESSION['username'])){
        header("location: http://localhost:8080/tms/index.php");
    }
    else {
      $mysqli = new mysqli('localhost', 'root', '');
  
      if ($mysqli->connect_error) {
          echo "Connection error";
      }
  $mysqli->select_db('tms');
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
              <a href="#">Tax Report</a>
              <?php
                  session_start();
                  if (isset($_SESSION['username']) && isset($_SESSION['admin'])) {
                    echo "<a href='admin.php'>Admin Dashboard</a>";
                  }

                  if(isset($_SESSION['username'])){
                      echo "<a href='logout.php'> Log Out</a>";
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



<form action = "customreceipt.php" method="POST">
    <section class="mainform">
      <div class="va">
        <span class="details">Custom Vat</span>
    </div>
    <div class="first">
        <div class= "second">
          <label for="country">Originating Country:</label>
          <select id="country" name = 'country'>
            <option value="normal"> General </option>
            <option value="saarc"> SAARC Country</option>
        
          </select>
        </div>  
        <div class= "third">
          <label for="country">Types of Good:</label>
          <select id="goods" name = 'goods'>
            <option value="sea_foods"> Dry Sea Foods </option>
            <option value="sea_foods"> Package Sea Food</option>
            <option value="Vegetables"> Vegetables </option>
            <option value="Fruits"> Fruits </option>
            <option value="DFruits"> Dry Fruits </option>
          </select>
        </div>
        <div class="inputbox">
            <span class="details">Freight Amount: </span>
            <input type="text"  name = 'amount' placeholder="Enter freight amount:" required>  
        </div>
         <div class="container">
              <button>Calculate Tax</button>
              <button>Clear All</button>
         </div>
    
</section>
          </form>
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




<!-- function calculateTotalAmount($freight_amount, $tax_rate) {
  // Calculate the total tax amount
  $total_tax = ($freight_amount * $tax_rate) / 100;
  
  // Add the total tax to the freight amount
  $total_amount = $freight_amount + $total_tax;
  
  return $total_amount;
} -->

<!-- function processOption() {
  $option = $_GET['option'] 
  
  switch($option) {
    case 1:
      // Code to execute if option 1 is selected
      echo "Option 1 selected";
      break;
    case 2:
      // Code to execute if option 2 is selected
      echo "Option 2 selected";
      break;
    case 3:
      // Code to execute if option 3 is selected
      echo "Option 3 selected";
      break;
    case 4:
      // Code to execute if option 4 is selected
      echo "Option 4 selected";
      break;
    case 5:
      // Code to execute if option 5 is selected
      echo "Option 5 selected";
      break;
    default:
      // Code to execute if no valid option is selected
      echo "Invalid option selected";
      break;
  }
} -->

<!-- processOption(3);  -->

<!-- function calculate($num1, $num2, $operator) {
  if ($operator == '+') {
    return $num1 + $num2;
  } elseif ($operator == '-') {
    return $num1 - $num2;
  } elseif ($operator == '*') {
    return $num1 * $num2;
  } elseif ($operator == '/') {
    return $num1 / $num2;
  } else {
    return "Invalid operator";
  }
} -->

<!-- $result = calculate(5, 3, '+');
echo $result; // Outputs 8 -->

