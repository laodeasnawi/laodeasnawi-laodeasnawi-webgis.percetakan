<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "sig";

$koneksi = new mysqli($host, $user, $pass, $dbname);

if ($koneksi->connect_error) {
    die(json_encode(array('error' => 'Koneksi database gagal: ' . $koneksi->connect_error)));
}
?>
