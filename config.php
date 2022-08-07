<?php

$SERVER = "localhost";
$USER = "root";
$PASSWORD = "";
$DB = "login";


$con = mysqli_connect($SERVER, $USER, $PASSWORD, $DB);

if (!$con) {
    echo "No Connection...";
}
