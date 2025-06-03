<?php
$host = "alyalumombo.ct.ws";
$user = "if0_39148856";
$pass = "DifzA2AafV";
$db   = "if0_39148856_alyalumombo";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
