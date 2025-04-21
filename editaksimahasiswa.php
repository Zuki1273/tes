<?php
include "koneksi.php";


$nim = $_POST["nim"];
$nama = $_POST["nama"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$nomor_telepon = $_POST["nomor_telepon"];
$email = $_POST["email"];
$id_prodi = $_POST["id_prodi"];

$query = "UPDATE mahasiswa SET nama = '$nama', tanggal_lahir = '$tanggal_lahir', nomor_telepon
= '$nomor_telepon', email = '$email', id_prodi = '$id_prodi' WHERE nim = '$nim'";

mysqli_query($conn, $query);

header("Location: index.php");
?>