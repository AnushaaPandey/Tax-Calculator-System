<?php
$mysqli=new mysqli('localhost:3307','root',''); 

if($mysqli->connect_error){
  echo"Connection error";
}else{
$mysqli->select_db('tax'); 

if(isset($_POST['submit'])){

  $username = $_POST['uname'];
  $password = md5($_POST['password']);

  $select = "SELECT * FROM user WHERE username='$username' && password='$password'";

  $result = $mysqli->query($select);

  if(mysqli_num_rows($result) > 0) {
	echo '<script type="text/javascript">';
    echo ' alert("Successfully logged in")';
    echo '</script>';
	header('location:home.php');

  } else{
	echo '<script type="text/javascript">';
    echo ' alert("Incorrect email or password")';
    echo '</script>';
  }

};

}

?>

<!DOCTYPE html>
<html>



<!DOCTYPE html>
<html>

<head>
  <title>Log in Page</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>

<!-- <body style="gba(255,0,0,1))";> -->
	<body>
	<form action="" method="post">
	<div class="box">
		
			<div id="name">
			  <h3> Tax Management System</h3>
			</div>
		
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password  </label>
     	<input type="password" name="password" placeholder="Password"><br>
     	<button type="submit" name="submit">Login</button><br>

		 <span class="signup">Not Registered? <a href="signup.php"> Sign Up </a></span>
	</div>
	</form>
</body>
</html>