<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="taxreceipt.css">
  <title>Tax Receipt</title>
</head>

<body>

  <?php

session_start();
    
if(!isset($_SESSION['username'])){
    header("location: http://localhost:8080/tms/index.php");
}
  $mysqli = new mysqli('localhost', 'root', '');

  if ($mysqli->connect_error) {
    echo "Connection error";
  } else {
    $mysqli->select_db('tms');
  }

  $sql = "SELECT * FROM vat ORDER BY id DESC LIMIT 1";
  $result = $mysqli->query($sql);

  if (mysqli_num_rows($result) > 0) {
    // Output data of the latest row
    while ($row = mysqli_fetch_assoc($result)) {
      $sale_amount = $row["sale_amount"];
      $vat_amount = $row["vat_amount"];
    }
  } else {
    echo "0 results";
  }
  ?>

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


  <section class="info">
    <div class="one">
      <h2> VAT Receipt </h2>
    </div>
    <div class="two">
    <h4> Name: <?php echo $_SESSION['name'] ?></h4> <br>
    <h4> Date: <?php echo date("Y/m/d")  ?></h4> <br>
    </div>


    <table class="styled-table">
      <tr>
        <td>VAT Percentage:</td>
        <td>&nbsp; &nbsp; 13% &nbsp;</td>
      </tr>
      <tr>
        <td>Sale Amount:</td>
        <td>
          <?php echo $sale_amount; ?>
        </td>
      </tr>
      <tr>
        <td>Total VAT amount:</td>
        <td>
          <?php echo $vat_amount; ?>
        </td>
      </tr>
    </table>
    <button > <a href = "/tms/home.php"> OK </a ></button>
  </section>

</body>

</html>