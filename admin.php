<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">
    <title>Admin</title>
</head>

<body>
    <nav class="navbar">
        <div class="logo">PHP LOGIN</div>
        <ul class="navlinks">
            <li><a href="./logout.php">Logout</a></li>

            <li><a href="./register.php">Register</a></li>
            <li><a href="./login.php">Login</a></li>

        </ul>
    </nav>

    <div class="container">
        <h1 class="text-center">Display User Info</h2>
            <br>

            <table class="table table-bordered text-center">
                <tr class="bg-dark text-white ">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Response</th>

                </tr>

                <?php
                include 'config.php';

                $q = "SELECT * FROM login";

                $query = mysqli_query($con, $q);

                while ($res = mysqli_fetch_array($query)) {

                ?>

                    <tr>
                        <td><?php echo $res['id']; ?></td>
                        <td><?php echo $res['name']; ?></td>
                        <td><?php echo $res['email']; ?></td>
                        <td><?php echo $res['mobile']; ?></td>
                        <!-- <td><?php echo $res['phone']; ?></td> -->


                    </tr>

                <?php
                }
                ?>
            </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</body>

</html>