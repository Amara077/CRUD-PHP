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
 <div class="container mt-3">
  <a href="add.php" class="btn btn-primary btn-md mb-3">Add +</a>

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th></th>
        </thead>

<<<<<<< HEAD
        <h1>Ini Updated 2</h1>

=======
>>>>>>> parent of d6ea6a1 (index di updated)
        <?php
          $sqlGet = "SELECT * FROM siswa";
          $query = mysqli_query($conn,$sqlGet);

          while($data = mysqli_fetch_array($query)) {
            echo "
              <tbody>
                <tr>
                  <td>$data[nis]</td>
                  <td>$data[nama]</td>
                  <td>$data[jurusan]</td>
                  <td>$data[alamat]</td>
                  <td>$data[telepon]</td>
                  <td>
                    <div class='row'>
                      <div class='col d-flex justify-content-center'>
                      <a href='update.php?nis=$data[nis]' class='btn btn-sm btn-warning'>Edit</a>
                      </div>
                      <div class='col d-flex justify-content-center'>
                      <a href='delete.php?nis=$data[nis]' class='btn btn-sm btn-danger'>Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            ";
          }
        ?>
             
    </table>
 </div>
</body>
</html>