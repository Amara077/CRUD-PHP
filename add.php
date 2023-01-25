<?php
  include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- STYLE CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD</title>
</head>
<body>
    <div class="w-50 mx-auto border p-3 mt-5 mb-3">
      <a href="index.php">Kembali ke Home</a>
        <form action="" method="post">
            <label for="nis">NIS</label>
            <input type="text" name="nis" id="nis" class="form-control" required>

            <label for="nis">Nama siswa</label>
            <input type="text" name="nama" id="nama" class="form-control" required>

            <label for="jurusan">Jurusan</label>
            <select name="jurusan" name="jurusan" id="jurusan" class="form-select" required>
                <option>Pilih Jurusan</option>
                <option value="Otomotif">Teknik Otomotif</option>
                <option value="Mesin">Teknik Mesin</option>
                <option value="Ketenagalistrikan">Teknik Ketenagalistrikan</option>
                <option value="Konstruksi & Property">Teknik Konstruksi & Property</option>
                <option value="Elektronika">Teknik Elektronika</option>
                <option value="Komputer & Informatika">Teknik Komputer & Informatika</option>
                <option value="Geologi Pertambangan">Geologi Pertambangan</option>
                <option value="Geomatika">Teknik Geomatika</option>
            </select>

            <label for="nis">Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control" required>

            <label for="nis">Telepon</label>
            <input type="text" name="telepon" id="telepon" class="form-control" required>

            <input class="btn btn-success mt-3" type="submit" name="add" value="Add">
        </form>
    </div>

    <?php
        if(isset($_POST['add'])) {
            $nis = $_POST['nis'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $telepon = $_POST['telepon'];

            $jurusanSelect = $_POST['jurusan'];
            if ($jurusanSelect = 'Otomotif') {
                $jurusan = 'Teknik Otomotif';
            } elseif ($jurusanSelect = 'Mesin') {
                $jurusan = 'Teknik Mesin';
            } elseif ($jurusanSelect = 'Ketenagalistrikan') {
                $jurusan = 'Teknik Ketenagalistrikan';
            } elseif ($jurusanSelect = 'Konstruksi & Property') {
                $jurusan = 'Teknik Konstruksi & Property';
            } elseif ($jurusanSelect = 'Elektronika') {
                $jurusan = 'Teknik Elektronika';
            } elseif ($jurusanSelect = 'Komputer & Informatika') {
                $jurusan = 'Teknik Komputer & Informatika';
            } elseif ($jurusanSelect = 'Geomatika') {
                $jurusan = 'Teknik Geomatika';
            }

            $sqlGet = "SELECT * FROM siswa WHERE nis='$nis'";
            $queryGet = mysqli_query($conn, $sqlGet);
            $cek = mysqli_num_rows($queryGet);

            $sqlInsert = "INSERT INTO siswa(nis,nama,jurusan,alamat,telepon)
                          VALUES ('$nis','$nama','$jurusan','$alamat','$telepon')";

            $queryInsert = mysqli_query($conn, $sqlInsert);

            if (isset($sqlInsert) && $cek <= 0 ) {
            echo "
                <div class='alert alert-success'>Data berhasil ditambahkan <a href='index.php'>Lihat data</a></div>
            ";
            } else if ($cek > 0 ) {
            echo "
                <div class='alert alert-danger'>Data gagal ditambahkan <a href='index.php'>Lihat data</a></div>
            ";
            }
        }
    ?>
</body>
</html>