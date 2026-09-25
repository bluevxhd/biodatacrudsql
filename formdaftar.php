<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMA Diakonia</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">
        <fieldset>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" required />
        </p>
        <p>
            <label for="ttl">TTL (Tempat, Tgl Lahir): </label>
            <input type="text" name="ttl" placeholder="Jakarta, 04 Juni 2011" required />
        </p>
        <p>
            <label for="umur">Umur: </label>
            <input type="number" name="umur" value="15" required />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat" required></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Kristen</option>
                <option>Islam</option>
                <option>Katolik</option>
                <option>Hindu</option>
                <option>Budha</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah" required />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>
        </fieldset>
    </form>

</body>
</html>
