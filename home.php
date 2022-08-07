<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Home Page</title>
</head>

<body>
  <nav class="navbar">
    <div class="logo">PHP LOGIN</div>
    <ul class="navlinks">
      <?php if ($_SESSION['name']) : ?>
        <li><a href="./logout.php">Logout</a></li>
      <?php else : ?>
        <li><a href="./register.php">Register</a></li>
        <li><a href="./login.php">Login</a></li>
      <?php endif; ?>
    </ul>
  </nav>
  <div class="home">
    <h1>Welcome to home page <?php echo  $_SESSION['name']; ?></h1>
  </div>
</body>

</html>