<?php

include("config.php");

// Cek apakah tombol daftar sudah diklik
if(isset($_POST['daftar'])){

    // Ambil data dari formulir
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    // Query simpan ke database
    $sql = "INSERT INTO calon_siswa (nama, ttl, umur, alamat, jenis_kelamin, agama, sekolah_asal) VALUES ('$nama', '$ttl', '$umur', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

    // Cek apakah query berhasil
    if( $query ) {
        header('Location: list-siswa.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>
