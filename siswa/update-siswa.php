<?php
//include koneksi database
include('../koneksi.php');
//get data dari form
$nis            = $_POST['nis'];
$nama_siswa   = $_POST['nama_siswa'];
$tempat_lahir   = $_POST['tempat_lahir'];
$tgl_lahir      = $_POST['tgl_lahir'];
$alamat         = $_POST['alamat'];
$no_telepon     = $_POST['no_telepon'];
$kd_kompetensi  = $_POST['kd_kompetensi'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE siswa SET nama_siswa = '$nama_siswa', tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl_lahir', alamat = '$alamat', no_telepon = '$no_telepon' WHERE nis = '$nis'";
//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
//redirect ke halaman index.php
header("location: tampildatasiswa.php");
} else {
//pesan error gagal update data
echo "Data Gagal Diupate!";
}
?>