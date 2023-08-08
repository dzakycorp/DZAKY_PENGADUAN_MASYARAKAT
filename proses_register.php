<?php

    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $telp = $_POST['telp'];
 

    $database = new PDO("mysql:host=localhost;dbname=pelaporan_pengaduan_masyarakat", 'root', '999');
    $query = $database->query("INSERT INTO masyarakat values('$nik','$nama',$username','$password,'$telp')");
    

    if($query){
        header("Location:login.php");
     }