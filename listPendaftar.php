<?php

$url = file_get_contents('http://192.168.56.32/gose-bimbel/rest-api-bimbel.php');
$response = utf8_encode($url);
$responseBody = json_decode($response, true);
// var_dump($responseBody['data']);
include "conn.php";
$pendaftar = mysqli_query($conn, "SELECT * FROM siswa");

$no = 1;
$number = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="style.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,500;1,400&display=swap" rel="stylesheet">

    <!-- font awesome icon -->
    <script src="https://kit.fontawesome.com/003603851d.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>GOSE Bimbel</title>

</head>
<body>
    <div class="text-center mt-4 mb-3">
        <h2>List Pendaftar via lokal</h2>
    </div>
        <table class="table table-info mx-auto" style="width: 50%">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No. HP</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
            <?php
            foreach ($pendaftar as $row) {
              ?>
                <tr>
                  <th><?php echo $no++ ?></th>
                  <td><?php echo $row['nama'] ?></td>
                  <td><?php echo $row['email'] ?></td>
                  <td><?php echo $row['no_hp'] ?></td>
                  <td><?php echo $row['kelas'] ?></td>
                  <td>
                    <a href="deleteLokal.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Hapus</a>
                    <a class="btn btn-warning" href="editLokal.php?id=<?php echo $row['id'] ?>">
                        Edit
                    </a>
        </div>
        </td>
        </tr>
      <?php
               
              }
      ?>
            
        </table>
    <div class="text-center mt-4 mb-3">
        <h2>List Pendaftar via API</h2>
    </div>
        <table class="table table-info mx-auto" style="width: 50%">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No. HP</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
            <?php
            foreach ($responseBody['data'] as $row) {
              ?>
                <tr>
                  <th><?php echo $number++ ?></th>
                  <td><?php echo $row['nama'] ?></td>
                  <td><?php echo $row['email'] ?></td>
                  <td><?php echo $row['no_hp'] ?></td>
                  <td><?php echo $row['kelas'] ?></td>
                  <td>
                    <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Hapus</a>
                    <a class="btn btn-warning" href="edit.php?id=<?php echo $row['id'] ?>">
                        Edit
                    </a>
        </div>
        </td>
        </tr>
      <?php
               
              }
      ?>
            
        </table>
    <div class="container">
        <div class="position-absolute start-50">
            <a class="btn btn-dark" href="index.php">Back</a>
        </div>
    </div>
</body>
</html>