<?php
include('../koneksi.php');
//get id
$nis = $_GET['nis'];
$query = "DELETE FROM siswa WHERE nis = '$nis'";
if($connection->query($query)) {
header("location: tampildatasiswa.php");
} else {
echo "DATA GAGAL DIHAPUS!";
}
?>