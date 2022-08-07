<?php

session_start();

include 'config.php';

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];


  if ($name == "" && $email == "" && $mobile == "") {
?>
    <script>
      alert("Please fill the form");
    </script>
<?php
    return;
  }

  $emailquery = "select * from login where email='$email'";
  $query = mysqli_query($con, $emailquery);

  $emailCount = mysqli_num_rows($query);
  if ($emailCount > 0) {
    echo "Email alerady exits";
  } else {
    $insertQuery = "INSERT INTO `login` ( `name`, `email`, `mobile`) VALUES ('$name', '$email', '$mobile');";
    $iquery = mysqli_query($con, $insertQuery);

    if ($iquery) {
      header("location:login.php");
    } else {
      echo "Something went wrong";
    }
  }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <title>Register Page</title>
</head>

<body>
  <div class="container">
    <div class="form-container">
      <h2>Register here..</h2>
      <form action="register.php" method="POST">
        <div class="form-control">
          <label for="name">Name</label>
          <input type="text" placeholder="Enter your name" id="name" name="name" />
        </div>
        <div class="form-control">
          <label for="email">Email</label>
          <input type="email" placeholder="Enter your email" id="email" name="email" />
        </div>
        <div class="form-control">
          <label for="mobile">Mobile</label>
          <input type="text" placeholder="Enter your mobile" id="mobile" name="mobile" />
        </div>
        <button type="submit" name="submit" class="btn">Submit</button>
      </form>
      <p>Already regitered? <a href="login.php">Login here</a></p>
    </div>
  </div>
</body>

</html>