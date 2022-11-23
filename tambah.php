<html>
    <head>
</head>
<body>
    <h1>APLIKASI PENDATAAN WARGA DS.SUKAMUNDUR</h1>
    <form action ="proses-tambah.php" method="POST">
        <form>
            <fieldset>
                <h4><a href="logout.php">LOGOUT</a></h4>
                <p>
                    <label for ="NIK">NIK:</label>
                    <input type="number" name="NIK"/>
                </P>
                <P>
                    <label for ="nama">Nama:</label>
                    <input type="text" name="nama"/>
                </p>
                <p>
                    <label for ="agama">Agama:</label>
                    <label><input type="radio" name="agama" value="islam" />Islam</label>
                    <label><input type="radio" name="agama" value="kristen" />Kristen</label>
                    <label><input type="radio" name="agama" value="katolik" />Katolik</label>
                    <label><input type="radio" name="agama" value="budha" />Budha</label>
                    <label><input type="radio" name="agama" value="hindu" />Hindu</label>
                        
                </p>
                <p>
                    <input type="submit" value="tambah" name="tambah"/>
                </p>
</fieldset>
</form>
</body>
</html>
