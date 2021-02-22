<?php
    $url = "http://localhost/bpbj";
    // Koneksi Database
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "bpbj";
    
    // membuat koneksi
    $conn = mysqli_connect($host, $user, $pass, $db);
    // mengecek koneksi
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    $tesKoneksi = "Koneksi ke database <strong>".$db."</strong> berhasil!";
    
    // ASN
    $getASN = mysqli_query($conn, "SELECT * FROM asn ORDER BY id ASC");

    // PTT
    $getPTT = mysqli_query($conn, "SELECT * FROM ptt ORDER BY id ASC");

?>