<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <headeer>
        <h3>Masukan Data Diri<h3>
    </header>
    
    <form action="index.php" method="POST">
        <fieldset>
            <p>
                <label for="Nama">Nama: </label>
                <textarea type="text" name="Nama" placeholder="Nama Lengkap"></textarea>
            </p>
            <p>
                <label for="NPM">Alamat: </label>
                <textarea name="NPM" ></textarea>
            </p>
            <p>
                <label for="Prodi">Agama: </label>
                <select name="Prodi">
                    <option>Islam</option>
                    <option>Kristen katolik</option>
                    <option>Protestan</option>
                    <option>Konguchu</option>
                    <option>Hindu</option>
                    <option>Buddha</option>
</select>
            </p>
            <p>
                <label for="Jenis_kelamin">Jenis Kelamin : </label>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-Laki </label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan">Perampuan </label>
</select>
                
            </p>

            <p>
                <input type="submit" value="Daftar" name="daftar"/>
            </p>
</fieldset>
<button href="index.php" class="btn btn-outline-dark">Back</button>
</form>
     
</body>
</html>