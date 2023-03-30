<?php
// (include 'database.php');
$mysqli=new mysqli('localhost:3307','root',''); 

if($mysqli->connect_error){
  echo"Connection error";
}else{
$mysqli->select_db('tax'); 

if(isset($_POST['submit'])){

  $firstname = $_POST['fname'];
  $lastname = $_POST['lname'];
  $username = $_POST['uname'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $cpassword = md5($_POST['cpassword']);
  $cname = $_POST['cname'];
  $tax_number = $_POST['tax_number'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];

  $select = "SELECT * FROM user WHERE username='$username' && password='$password'";

  $result = $mysqli->query($select);

  if(mysqli_num_rows($result) > 0) {

    echo '<script type="text/javascript">';
    echo ' alert("User already exist")';
    echo '</script>';

  } else{
    
    if($password != $cpassword) {

      echo '<script type="text/javascript">';
      echo ' alert("password do not match")';
      echo '</script>';

    } else{
      $insert  = "INSERT INTO user(first_name, last_name, username, email, password, company_name, tax_id, address, phone_number) VALUES(
        '$firstname', '$lastname', '$username', '$email', '$password', '$cname', '$tax_number', '$address', '$phone'
      )";

      $mysqli->query($insert);
      header('location:login.php');

    }

  }

};

}

?>


<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="signup.css">
   </head>
<body>
  <div class="container">

    <div class="title"><b>Sign Up</b></div>
    <div class="content">
      <form action="" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="fname" placeholder="Enter your first name" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="lname" placeholder="Enter your Last name" required>
          </div>
		  <div class="input-box">
            <span class="details">Username </span>
            <input type="text" name="uname" placeholder="Enter your Username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="cpassword" placeholder="Confirm your password" required>
          </div>
		  <div class="input-box">
            <span class="details">Company Name</span>
            <input type="text" name="cname" placeholder="Enter your Company Name" required>
          </div>
		  <div class="input-box">
            <span class="details">Tax Number</span>
            <input type="text" name="tax_number" placeholder="Enter your Tax  number" required>
          </div>
		  <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="address" placeholder="Enter your address" required>
          </div>
		  <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phone" placeholder="Enter your number" required>
          </div>
        </div>
        
        <div class="button">
          <input type="submit" name="submit" value="Sign Up">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
