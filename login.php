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


  if ($name == "admin" && $email == "admin@admin.com" && $mobile == "0000000000") {
    header('location:admin.php');
    return;
  }

  $email_search = "select * from login where name='$name' && email='$email' && mobile='$mobile'";
  $query = mysqli_query($con, $email_search);

  $email_count = mysqli_num_rows($query);

  if ($email_count) {
    $_SESSION['name'] = $name;
    header("location:home.php");
  } else {
  ?>
    <script>
      alert("Incorrect name or email");
    </script>
<?php
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
      <h2>Login here..</h2>
      <form action="login.php" method="POST">
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
        <button class="btn" type="submit" name="submit">Submit</button>
      </form>
      <p>Not regitered? <a href="./register.php">Register here</a></p>
    </div>
  </div>
</body>

</html>