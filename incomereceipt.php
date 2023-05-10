<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="incomereceipt.css">
  <title>Income Receipt</title>
</head>

<body>

  <?php

  $mysqli = new mysqli('localhost:3307', 'root', '');

  if ($mysqli->connect_error) {
    echo "Connection error";
  } else {
    $mysqli->select_db('tax');
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

    <!-- <div class="main">
            <h3>Tax Management System</h3>
        </div> -->

    <div class="navbar">
      <a class="active" href="home.php">Home</a>
      <a href="aboutus.php">About Us</a>
      <a href="contact.php">Contact Us</a>
      <a href="#contact">Help</a>
      <a href="setting.php">Settings</a>
    </div>
    <!-- search button -->
    <input class="input" name="text" placeholder="Search..." type="search">
    <div class="user">
      <!-- user icons -->
      <img src="user.png" alt="User">
    </div>

  </section>


  <section class="info">
    <div class="one">
      <h2> Income Tax Receipt </h2>
    </div>
    <div class="two">
      <h3> Date: </h3> <br>
      <h3> Name: </h3> <br>
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

  </section>
</body>

</html>