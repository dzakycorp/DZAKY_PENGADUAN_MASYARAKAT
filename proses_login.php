<?php
session_start();
$nik = $_POST['nik'];
$nama_lengkap = $_POST['nama_lengkap'];

$koneksi = new PDO("mysql:host=localhost;dbname=pelaporan_pengaduan_masyarakat",'root','');
$query = $koneksi->query("SELECT * FROM login WHERE nik='$nik' AND nama_lengkap='$nama_lengkap'");
$data = $query->fetch();
if($data){
    $_SESSION['nik'] = $nik;
    $_SESSION['nama_lengkap'] = $nama_lengkap;
    header("location:home.php");
}else{
    header("location:login.php");
}