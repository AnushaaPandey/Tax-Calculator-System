<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="customreceipt.css">
    <title>Custom Receipt</title>
</head>

<body>
    <section class="nav">
        <div class="logo">
            <img src="splash1.png" alt="Splash Screen">
        </div>

        <!-- <div class="main">
            <h3>Tax Management System</h3>
        </div> -->

        <div class="navbar">
            <a class="active" href="home.html">Home</a>
            <a href="aboutus.html">About Us</a>
            <a href="contact.html">Contact Us</a>
            <a href="#contact">Help</a>
            <a href="setting.html">Settings</a>
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

          
          <table class="styled-table" >
            <tr>
              <td>Originating country:</td>
              <td>&nbsp; &nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
              <td>Freight Amount:</td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td>Invoice amount of product:</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </tr>
              <tr>
                <td>Excise Duty:</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </tr>
              <tr>
                <td>Custom Duty rate::</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </tr>
              <tr>
                <td>VAT:</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </tr>
              <tr>
                <td>Total tax amount:</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </tr>
          </table>
          
    </section>

</body>
</html>