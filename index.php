<?php
session_start();

if (isset($_SESSION["username"])) {
  header("location: http://localhost:8080/tms/home.php");
}

if(isset($_GET['submit'])){
  $conn=mysqli_connect("localhost", "root", "", "tms");
  $username=$_GET['username'];
  $actualUname = substr_replace($username, "", 0, strlen("admin"));
  $password=$_GET['password'];
  $incpassword = md5($password);

  if (str_contains($username, "admin")) {
    $sql = "SELECT * FROM admindata WHERE username = '{$actualUname}'";
    $_SESSION['admin'] = True;
  } else {
    $sql = "SELECT * FROM usersdata WHERE username = '{$username}'";
  }

  $res=mysqli_query($conn, $sql);

  if(mysqli_num_rows($res)>0){
    $row = mysqli_fetch_assoc($res);
    $cpassword = $row['password'];

    if($password === $cpassword){
      $_SESSION["username"] = $row['username'];
      $_SESSION["name"] = $row['name'].' '.$row['lname'];
      echo  "<script> alert('Login Successfully.'); </script>";
      header("location: http://localhost:8080/tms/home.php");
    }else{
    echo "<script> alert('Inavlid Password. Try Again'); </script>";
    }
    }
    else{
      echo  "<script> alert('Inavlid Email. Try Again'); </script>";
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
  <link rel="stylesheet" type="text/css" href="index.css">
</head>
<style>
  body{
    background-size:cover;
  }
  .container{
    margin-top:120px;
  }
  </style>
<body>
  		<!-- div for the box to write the detail -->
	<div class="box">
		    <!-- using div for the heading -->
			<div id="name">
			  <h3> Tax Management System</h3>
			</div>
		
     	<!-- <label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br> -->
      <form>

       <div class="input-box">
            <span class="details">Username </span>
            <input type="text" name="username" placeholder="Enter your Username" required>
          </div>

      <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Enter your password" required>
          </div>

     	<!-- <label>Password  </label>
     	<input type="password" name="password" placeholder="Password"><br> -->
     	<button type="submit" name="submit" value="Log In">Login</button><br>
      </form>
        <!-- linking signup page by using a tag -->
		 <span class="signup">Not Registered? <a href="register.php"> Sign Up </a></span>
	</div>

		<!-- div for the box to write the detail -->
    <!-- <div class="box"> -->
		    <!-- using div for the heading -->
			<!-- <div id="name">
			  <h2 class="text-center"> Tax Management System</h2>
          <label for="">Email</label>
          <input type="email" plcaeholder="Email"><br>
          <label for="">Password</label>
          <input type="password" plcaeholder="Password"><br>
          <input type="submit" class="btn btn-success" value="Login">
        </div>
      </div> -->
</body>
</html>