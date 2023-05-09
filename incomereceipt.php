<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="incomereciept.css">
  <title>Income Receipt</title>
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

  $sql = "SELECT * FROM income ORDER BY id DESC LIMIT 1";
  $result = $mysqli->query($sql);

  if (mysqli_num_rows($result) > 0) {
    // Output data of the latest row
    while ($row = mysqli_fetch_assoc($result)) {
      $annual_salary = $row["annual_salary"];
      $life_insurance = $row["life_insurance"];
      $health_insurance = $row["health_insurance"];
      $house_insurance = $row["house_insurance"];
      $tax = $row["tax"];
      $monthly_salary = $annual_salary / 12;
    }
  } else {
    echo "0 results";
  }


  ?>

<section class="nav">
      <div class="logo">
          <img src="splash1.png" alt="Splash Screen">
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
            <a href="login.php">Logout</a>
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

      </div>
  </section>


  <section class="info">
    <div class="one">
      <h2> Income Tax Receipt </h2>
    </div>
    <div class="two">
            <h4> Name: <?php echo $_SESSION['name'] ?></h4> <br>
            <h4> Date: <?php echo date("Y/m/d")  ?></h4> <br>
    </div>


    <table class="styled-table">
      <tr>
        <td>Monthly salary:</td>
        <td>
          <?php echo $monthly_salary; ?>
        </td>
      </tr>
      <tr>
        <td>Annual salary:</td>
        <td>
          <?php echo $annual_salary; ?>
        </td>
      </tr>
      <tr>
        <td>Life Insurance Premium:</td>
        <td>
          <?php echo $life_insurance; ?>
        </td>
      </tr>
      <tr>
        <td>Health Insurance Premium:</td>
        <td>
          <?php echo $health_insurance; ?>
        </td>
      </tr>
      <tr>
        <td>House Insurance Premium:</td>
        <td>
          <?php echo $house_insurance; ?>
        </td>
      </tr>

      <tr>
        <td>Total tax amount:</td>
        <td>
          <?php echo $tax; ?>
        </td>
      </tr>
    </table>
    <button > <a href = "/tms/home.php"> OK </a ></button>
  </section>
</body>

</html>