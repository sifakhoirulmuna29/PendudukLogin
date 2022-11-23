<?php
include ("koneksi.php");
if(isset($_POST['tambah'])){
    $nik = $_POST ['NIK'];
    $Nama = $_POST ['nama'];
    $agama = $_POST ['agama'];

    $sql = "INSERT INTO tb_muna3nov(NIK, nama, agama) VALUES ('$nik', '$Nama', '$agama')";
    $query = mysqli_query($koneksi, $sql);


    }else{
        ("akses dilarang");
    }
    ?>