<?php
//include koneksi database
include('../koneksi.php');
//get data dari form
$nama_siswa       = $_POST['nama_siswa'];
$tempat_lahir     = $_POST['tempat_lahir'];
$tgl_lahir        = $_POST['tgl_lahir'];
$alamat           = $_POST['alamat'];
$no_telepon       = $_POST['no_telepon'];
$kd_kompentensi   = $_POST['kd_kompentensi']; // Sesuaikan nama variabel dengan atribut name pada elemen <select>
//query insert data ke dalam database
$query = "INSERT INTO siswa (nama_siswa, tempat_lahir, tgl_lahir, alamat, no_telepon, kd_kompentensi) VALUES ('$nama_siswa','$tempat_lahir', '$tgl_lahir', '$alamat', '$no_telepon', '$kd_kompentensi')";
//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php
    header("location: tampildatasiswa.php");
} else {
    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}
?>
