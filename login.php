<html>
    <head>
        <title>Membuat Login</title>
</head>
<body>
    <h2>LOGIN</h2>
<br/>
<?php
if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
        echo "LOGIN GAGAL-!! USERNAME ATAU PASSWORD SALAH!";
    }else if($_GET['pesan'] == "logout"){
        echo "ANDA TELAH BERHASIL LOGOUT-!!";
    }else if($_GET['pesan'] == "belum_login"){
        echo "ANDA HARUS LOGIN UNTUK MENGKASES HALAMAN ADMIN";
    }
}
?>
<br/>
<br/>
<form method="POST" action="cek_login.php">
    <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" placeholder="Masukkan username"></td>
</tr>
<tr>
    <td>Password</td>
    <td>:</td>
    <td><input type="password" name="password" placeholder="Masukkan password"></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td><input type="submit" value="LOGIN"></td>
    <td><a href="daftar_user.php"><input type="button" value="daftar" name="daftar"></a></td>
</tr>
</table>
</form>
</body>
</html>