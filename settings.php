<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="setting.css">
    <title>Home </title>
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
            <a class="active" href="home.php">Home</a>
            <a href="aboutus.php">About Us</a>
            <a href="contact.php">Contact Us</a>
            <a href="help.php">Help</a>
            <a href="setting.php">Settings</a>
        </div>

        <!-- <div class="search">
            <input type="text" name="uname" placeholder="Search"><br>
        </div> -->

        <input class="input" name="text" placeholder="Search..." type="search">

        <div class="user">
            <img src="user.png" alt="User">
        </div>

    </section>
    <section class="type">
        <div class="first">
            <h1> Settings</h1>
        </div>
        <form action="" method="post">
            <div class="ll">
                <ul class="u1">
                    <div class="b1"><a href="/" type: button>Account Information</a></div>
                    <div class="b2"><a href="/" type: button> Tax History </a></button></div>
                    <div class="b3"><a href="/" type: button> Tax Report</a> </button></div>
                    <div class="b4"><a href="home.php" type: button> Log Out</a> </button></div>

                </ul>
            </div>
        </form>
    </section>
</body>

</html>