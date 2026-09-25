-- Buat Database baru jika belum ada
CREATE DATABASE IF NOT EXISTS pendaftaran_siswa;
USE pendaftaran_siswa;

-- Buat Tabel calon_siswa
CREATE TABLE IF NOT EXISTS calon_siswa (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nama VARCHAR(64) NOT NULL,
    ttl VARCHAR(64) NOT NULL,
    umur INT(3) NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    jenis_kelamin VARCHAR(16) NOT NULL,
    agama VARCHAR(16) NOT NULL,
    sekolah_asal VARCHAR(64) NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Masukkan data tunggal milik Lionel Rodriquez Da Silva
INSERT INTO calon_siswa (id, nama, ttl, umur, alamat, jenis_kelamin, agama, sekolah_asal) VALUES
(1, 'Lionel Rodriquez Da Silva', 'Jakarta, 04 Juni 2011', 15, 'Jakarta Barat', 'laki-laki', 'Kristen', 'SMA Diakonia');
