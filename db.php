<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "db_bppt";
$conn = mysqli_connect($host,$user,$pass,$dbname);
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
}
?>
