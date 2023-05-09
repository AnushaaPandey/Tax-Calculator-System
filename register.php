<?php
if(isset($_GET['save'])){
  $conn=mysqli_connect("localhost", "root", "", "tms");
  $username=$_GET['username'];
  $email=$_GET['email'];
  $password=$_GET['password'];
  $cpassword=$_GET['cpassword'];
  $name=$_GET['name'];
  $lname=$_GET['lname'];
  $tno=$_GET['tno'];
  $pno=$_GET['pno'];
  $address=$_GET['address'];
  $company=$_GET['company'];
  $incpassword = md5($password);

  $sql="SELECT * FROM usersdata WHERE email = '{$email}'";
  $res=mysqli_query($conn, $sql);

  if(mysqli_num_rows($res)>0){
    // echo "<script> document.getElementById('error').innerHTML = 'Already Registered'; </script>";
    echo "<script> alert('Email Already Exist'); </script>";
  }
  else{
    if($password===$cpassword){
      $pass=md5($password);
      $sql1="INSERT INTO usersdata(name, lname, username, email, password, company, tno, address, pno) VALUES('{$name}', '{$lname}', '{$username}', '{$email}','{$pass}','{$company}', '{$tno}','{$address}','{$pno}')";
      if(mysqli_query($conn, $sql1)){
        echo "<script> alert('Register Successfully.'); </script>";
      }else{
        echo "Error";
      }
    }else{
        echo "<script> alert('Password does not match.'); </script>";
      }
    }
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="register.css">
</head>

<body>
  <div class="container">
    <p id="error"></p>
    <div class="title"><b>Sign Up</b></div>
    <div class="content">
      <form action="<?php echo $_SERVER['PHP_SELF']?>" methods="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="name" placeholder="Enter your first name" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="lname" placeholder="Enter your Last name" required>
          </div>
		  <div class="input-box">
            <span class="details">Username </span>
            <input type="text" name="username" placeholder="Enter your Username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter your email" required>
          </div>
           <!-- using div class as in the form input box is same,
          using  span to keep the user details and input to write the user details -->
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
            <input type="text" name="company" placeholder="Enter your Company Name" required>
          </div>
		  <div class="input-box">
            <span class="details">Tax Number</span>
            <input type="number" name="tno" placeholder="Enter your Tax number" required>
          </div>
		  <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="address" placeholder="Enter your address" required>
          </div>
		  <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="number" name="pno" placeholder="Enter your number" required>
          </div>
        </div>
        <!-- signup button -->
        <div class="button">
          <input type="submit" name="save" value="Sign Up">
          </div>
        <div class="form">
          <span class="Login"> Already have an account <a href="index.php"> Login </a></span>
          
        </div>
      </form>
    </div>
  </div>

</body>
</html>

