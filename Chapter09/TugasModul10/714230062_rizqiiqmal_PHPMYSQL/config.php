<?php
$server = "localhost";
$user = "root";
$password = "";
$namadb ="mahasiswabaru";

$db = mysqli_connect($server, $user, $password, $namadb);

if(!$db){
    die("Gagal terhubung denga database : " . mysqli_connect_error());
}
?>