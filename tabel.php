<?php
include("koneksi.php");
?>

<html>
    <head>
</head>
<body>
<?php
session_start();
if($_SESSION['status']!="login"){
    header("location:../login.php?pesan=belum_login");
}
?>
<h1>Selamat Datang, <?php echo $_SESSION['username']; ?>! ANDA BERHASIL LOGIN-!!</h1>
<br/>
<br/>
    <h2>APLIKASI PENDATAAN WARGA DS. SUKAMUNDUR</h2>
    <form action="tabel.php" method="get">
    <label>Cari :</label>
    <input type="text" name="cari">
    <input type="submit" value="cari">
</form>

<?php
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    echo "<b>Hasil Pencarian : ".$cari."</b>";
}
?>
    <table border="1">
        <tr>
            <th>id</th>
            <th>NIK</th>
            <th>nama</th>
            <th>agama</th>
            <th>aksi</th>
</tr>

<?php
include("koneksi.php");
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $sql ="SELECT * FROM tb_muna3nov WHERE nama LIKE '%".$cari."%'";
    $query = mysqli_query($koneksi, $sql);

}else{
    $sql='SELECT * FROM tb_muna3nov';
    $query = mysqli_query($koneksi, $sql);
}
while($db_muna3nov = mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>".$db_muna3nov['id']."</td>";
    echo "<td>".$db_muna3nov['NIK']."</td>";
    echo "<td>".$db_muna3nov['nama']."</td>";
    echo "<td>".$db_muna3nov['agama']."</td>";
    echo "<td>";
    echo "<a href='edit-tambah.php?id=".$db_muna3nov['id']."'>Edit</a> |";
    echo "<a href='hapus.php?id=".$db_muna3nov['id']."'>Hapus</a> |";
    echo "</td>";
    echo "</tr>";
}
?>
</table>
<h4><a href="tambah.php"><input type="submit" name="tambah" value="tambah"/></h4></a>
<a href="logout.php">LOGOUT</a>
</body>
</html>