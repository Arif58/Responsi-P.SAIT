<?php
include "conn.php";
$pendaftar = mysqli_query($conn, "SELECT * FROM siswa WHERE id = " . $_GET['id']);
// var_dump($row);
foreach ($pendaftar as $siswa) {
    $id = $siswa['id'];
    $nama = $siswa['nama'];
    $email = $siswa['email'];
    $no_hp = $siswa['no_hp'];
    $kelas = $siswa['kelas'];
}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4">
        <div>
            <h2>Edit Pendaftar Lokal</h2>
        </div>
        <div >
            <form method="post" action="updateLokal.php">
                    <div class="mb-3 w-50">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $nama ?>">
                    </div>

                    <div class="mb-3 w-50">
                        <label for="no_hp">No. Handphone</label>
                        <input type="text" class="form-control" name="no_hp" value="<?php echo $no_hp ?>">
                    </div>
                    <div class="mb-3 w-50">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $email ?>">
                    </div>
                    <div class="mb-3 w-50">
                        <label for="kelas" class="form-label">Kelas</label>
                        <select class="form-control" name="kelas">
                            <option value="<?php echo $kelas ?>"><?php echo $kelas ?></option>
                            <option value="4SD">4 SD</option>
                            <option value="5SD">5 SD</option>
                            <option value="6SD">6 SD</option>
                            <option value="7SMP">7 SMP</option>
                            <option value="8SMP">8 SMP</option>
                            <option value="9SMP">9 SMP</option>
                            <option value="10SMA">10 SMA</option>
                            <option value="11SMA">11 SMA</option>
                            <option value="12SMA">12 SMA</option>
                            <option value="alumni">Alumni</option>
                        </select>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <button type="submit" class="btn btn-primary" name="update" value="Update">Update</button>
                    <a class="btn btn-danger" href="listPendaftar.php">Batal</a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>