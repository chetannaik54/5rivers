<?php
$servername = "localhost";
$username = "root";
$password = "";
<<<<<<< HEAD
$dbname = "5rivers";
=======
$dbname = "payslip";
>>>>>>> d325d2f98735ce1d0498a495a9126ff20e3658e0

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>