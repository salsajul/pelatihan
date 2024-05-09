<?php
include('../koneksi.php');
$id = $_GET['id'];
$query = "SELECT * FROM kompetensi WHERE kd_kompetensi = $id LIMIT 1";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <title>Edit Kompetensi</title>
        </head>
        <body>
            <div class="container" style="margin-top: 80px">
            <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        EDIT KOMPETENSI
                        </div>
                        <div class="card-body">
                            <form action="update-kompetensi.php" method="POST">
                                <div class="form-group">
                                    <label>Kode Kompetensi</label>
                                    <input type="text" name="kd_kompetensi" value="<?php echo $row['kd_kompetensi'] ?>" placeholder="Masukkan Kode Kompetensi" class="form-control">
                                    <input type="hidden" name="kd_kompetensi" value="<?php echo $row['kd_kompetensi']
                                    ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Kompetensi</label>
                                        <input type="text" name="nama_kompetensi" value="<?php echo $row['nama_kompetensi'] ?>" placeholder="Masukkan Nama Kompetensi" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Program Keahlian</label>
                                        <input type="text" name="prog_keahlian" value="<?php echo $row['prog_keahlian'] ?>" placeholder="Masukkan Program Keahlian" class="form-control">
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