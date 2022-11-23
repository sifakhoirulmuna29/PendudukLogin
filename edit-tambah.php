<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header ("Location:tabel.php?");
}
$kode=$_GET['id'];
$sql="SELECT * FROM tb_muna3nov WHERE id=$kode";
$query = mysqli_query($koneksi, $sql);
$db_muna3nov = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("DATA TIDAK DITEMUKAN");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>
<body>
    <center>
    <h2>Form Edit</h2>
    <form action="proses-edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $db_muna3nov ['id'] ?>"/>

        <p>
            <label for="NIK">NIK :</label>
            <input type="number" name="NIK" value="<?php echo $db_muna3nov ['NIK'] ?>"/>
        </p>

        <p>
        <label for="nama">Nama :</label>
        <input type="text" name="nama" value="<?php echo $db_muna3nov ['nama'] ?>"/>
        </p>

        <p>
        <label for="agama">Agama :</label>
        <select name="agama" value="<?php echo $db_muna3nov ['agama'] ?>">
        <option value="islam">Islam</option>
        <option value="kristen">Kristen</option>
        <option value="katolik">Katolik</option>
        <option value="budha">Buddha</option>
        <option value="hindhu">Hindu</option>
        </select>
        </p>

        <p>
            <input type="submit" value="Edit" name="edit" />
        </p>
</center>
</body>
</html>