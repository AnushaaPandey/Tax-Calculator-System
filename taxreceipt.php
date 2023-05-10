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
  $mysqli = new mysqli('localhost:3307', 'root', '');

  if ($mysqli->connect_error) {
    echo "Connection error";
  } else {
    $mysqli->select_db('tax');
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
      <h2> VAT Receipt </h2>
    </div>
    <div class="two">
      <h3> Date: </h3> <br>
      <h3> Name: </h3> <br>
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

  </section>

</body>

</html>