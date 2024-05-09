<?php
include ('../koneksi.php');
$nis = $_GET['nis'];
$query = "SELECT * FROM siswa WHERE nis = $nis LIMIT 1";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Siswa</title>
</head>

<body>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        EDIT SISWA
                    </div>
                    <div class="card-body">
                        <form action="update-siswa.php" method="POST">
                            <input type="hidden" name="nis" value="<?php echo $row['nis']
                                ?>">
                            <div class="form-group">
                                <label>Nama Siswa</label>
                                <input type="text" name="nama_siswa" value="<?php echo $row['nama_siswa'] ?>"
                                    placeholder="Masukkan Nama Siswa" class="form-control">
                            </div>
                            <div>
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" value="<?php echo $row['tempat_lahir'] ?>"
                                    placeholder="Masukkan Tempat Lahir" class="form-control">
                            </div>
                            <div>
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" value="<?php echo $row['tgl_lahir'] ?>"
                                    placeholder="Masukkan Tanggal Lahir" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa"
                                    rows="4"><?php echo $row['alamat'] ?></textarea>
                            </div>
                            <div>
                                <label>Nomor Telepon</label>
                                <input type="text" name="no_telepon" value="<?php echo $row['no_telepon'] ?>"
                                    placeholder="Masukkan Nomor Telepon" class="form-control">
                            </div>
                            <div>
                                <label>Nama Kompetensi</label>
                                <select name="kd_kompentensi"> <!-- Sesuaikan nama dengan kolom pada tabel siswa -->
                                    <?php
                                    include "../koneksi.php";
                                    $result = mysqli_query($connection, "SELECT * FROM kompetensi");
                                    while ($data = mysqli_fetch_array($result)) {
                                        echo "<option value='$data[kd_kompentensi]'>$data[nama_kompetensi]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">UPDATE</button>
                            <button type="reset" class="btn btn-warning">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>