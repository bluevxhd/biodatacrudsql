<!DOCTYPE html>
<html>
<head>
    <title>Isi Biodata Siswa | SMA Diakonia</title>
</head>

<body>
    <header>
        <h3>Isi Biodata Siswa</h3>
        <h1>SMA Diakonia</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="formdaftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>

    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
    <?php endif; ?>

</body>
</html>
