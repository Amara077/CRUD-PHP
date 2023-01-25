<?php
  include 'koneksi.php';

  $nis = $_GET['nis'];
  $sqlGet = "SELECT * FROM siswa WHERE nis='$nis'";
  $queryGet = mysqli_query($conn, $sqlGet);
  $data = mysqli_fetch_array($queryGet);
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

<h2>KWWKWK</h2>
    <div class="w-50 mx-auto border p-3 mt-5 mb-3">
      <a href="update.php">Kembali ke Home</a>
        <form action="" method="post">
            <label for="nis">NIS</label>
            <input type="text" name="nis" id="nis" value="<?php echo "$data[nis]";?>" class="form-control" readonly>

            <label for="nis">Nama siswa</label>
            <input type="text" name="nama" id="nama" value="<?php echo "$data[nama]";?>" class="form-control" required>

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
            <input type="text" id="alamat" name="alamat" value="<?php echo "$data[alamat]";?>" class="form-control" required>

            <label for="nis">Telepon</label>
            <input type="text" id="telepon" name="telepon" value="<?php echo "$data[telepon]";?>" class="form-control" required>

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

            $sqlUpdate = "UPDATE INTO siswa(nama,jurusan,alamat,telepon)
            VALUES ('$nama','$jurusan','$alamat','$telepon') WHERE nis='$nis'";
            $queryUpdate = mysqli_query($conn, $sqlUpdate);

            header('location: index.php');
        }
    ?>
</body>
</html>