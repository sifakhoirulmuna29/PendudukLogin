<?php
include ("koneksi.php");
if(isset($_POST['edit'])){
    $kode=$_POST['id'];
    $Nik=$_POST['NIK'];
    $nama=$_POST['nama'];
    $agama=$_POST['agama'];

    $sql="UPDATE tb_muna3nov SET NIK='$Nik', nama='$nama', agama='$agama' WHERE id=$kode";
    $query=mysqli_query($koneksi, $sql);

    if($query){
        header ('Location:tabel.php');
    }else{
        die ("GAGAL MENGEDIT");
    }
}
?>