<?php
include "koneksi.php";


$nim = $_POST["nim"];
$nama = $_POST["nama"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$nomor_telepon = $_POST["nomor_telepon"];
$email = $_POST["email"];
$id_prodi = $_POST["id_prodi"];

$query = "INSERT INTO mahasiswa (nim, nama, tanggal_lahir, nomor_telepon, email, id_prodi) VALUES ('$nim', 
 '$nama', '$tanggal_lahir', '$nomor_telepon', '$email', '$id_prodi')";

mysqli_query($conn, $query);

header("Location: index.php");
?>