<?php
//include koneksi database
include('../koneksi.php');
//get data dari form
$kd_kompetensi       = $_POST['kd_kompetensi'];
$nama_kompetensi     = $_POST['nama_kompetensi'];
$prog_keahlian       = $_POST['prog_keahlian'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE kompetensi SET kd_kompetensi = '$kd_kompetensi', nama_kompetensi = '$nama_kompetensi', prog_keahlian = '$prog_keahlian' WHERE kd_kompetensi = '$kd_kompetensi'";
//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
//redirect ke halaman index.php
header("location: tampildatakompetensi.php");
} else {
//pesan error gagal update data
echo "Data Gagal Diupate!";
}
?>