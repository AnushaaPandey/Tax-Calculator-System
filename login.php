<?php
session_start();

$mysqli = new mysqli('localhost:3307', 'root', '');

if ($mysqli->connect_error) {
    echo "Connection error";
} else {
    $mysqli->select_db('tax');

    if (isset($_POST['submit'])) {
        $username = $_POST['uname'];
        $password = md5($_POST['password']);

        $select = "SELECT * FROM user WHERE username='$username' && password='$password'";
        $result = $mysqli->query($select);

        if (mysqli_num_rows($result) > 0) {
            // Set session variables
            $_SESSION['loggedIn'] = true;
            $_SESSION['username'] = $username;

            echo '<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>';
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
            echo '<script>';
            echo '$(document).ready(function() {';
            echo 'Swal.fire({';
            echo 'icon: "success",';
            echo 'title: "Login Successful!",';
            echo 'text: "You are now logged in.",';
            echo 'confirmButtonText: "OK",';
            echo '}).then((result) => {';
            echo 'if (result.isConfirmed) {';
            echo 'window.location.href = "home.php";';
            echo '}';
            echo '});';
            echo '});';
            echo '</script>';
        } else {
            echo '<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>';
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
            echo '<script>';
            echo '$(document).ready(function() {';
            echo 'Swal.fire({';
            echo 'icon: "error",';
            echo 'title: "Login Failed!",';
            echo 'text: "Incorrect email or password.",';
            echo 'confirmButtonText: "OK",';
            echo '});';
            echo '});';
            echo '</script>';
        }
    };
}

?>

<!DOCTYPE html>
<html>

<head>
  <title>Log in Page</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
  <form action="" method="post">
    <div class="box">
      <div id="name">
        <h3> Tax Management System</h3>
      </div>
      <label>User Name</label>
      <input type="text" name="uname" placeholder="User Name"><br>
      <label>Password </label>
      <input type="password" name="password" placeholder="Password"><br>
      <button type="submit" name="submit">Login</button><br>
      <span class="signup">Not Registered? <a href="signup.php"> Sign Up </a></span>
    </div>
  </form>
</body>

</html>
