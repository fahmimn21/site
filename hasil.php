<?php
require 'konek.php';
$conn    = Connect();
$nama    = $conn->real_escape_string($_POST['nama']);
$jurusan = $conn->real_escape_string($_POST['jurusan']);
$angkatan = $conn->real_escape_string($_POST['angkatan']);
$nim   = $conn->real_escape_string($_POST['nim']);
$email = $conn->real_escape_string($_POST['email']);
$alasan = $conn->real_escape_string($_POST['alasan']);

$query   = "INSERT into form (nama,jurusan,angkatan,nim,email,alasan) VALUES('" . $nama . "','" . $jurusan . "','" . $angkatan . "','" . $nim . "','" . $email . "','" . $alasan . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Data tidak dapat dimasukkan: ".$conn->error);
 
}
 
echo "Terima Kasih Sudah Mengisi!";
 
$conn->close();
 
?>