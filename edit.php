<?php
require 'vendor/autoload.php';
$client = new GuzzleHttp\Client();
$response = $client->request('GET', 'http://192.168.56.32/gose-bimbel/rest-api-bimbel.php?id='.$_GET['id']);
$body = $response->getBody();
$responseBody = json_decode($body, true);
foreach ($responseBody['data'] as $key => $value) {
    $id = $value['id'];
    $nama = $value['nama'];
    $email = $value['email'];
    $no_hp = $value['no_hp'];
    $kelas = $value['kelas'];
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
            <h2>Edit Pendaftar API</h2>
        </div>
        <div >
            <form method="post" action="update.php?id=<?php echo $id ?>" enctype="multipart/form-data">
                    <div class="mb-3 w-50">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
                    </div>
                    <div class="mb-3 w-50">
                        <label for="no_hp">No. Handphone</label>
                        <input type="text" class="form-control" id="email" name="no_hp" value="<?php echo $no_hp ?>">
                    </div>
                    <div class="mb-3 w-50">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?php echo $email ?>">
                    </div>
                    <div class="mb-3 w-50">
                        <label for="kelas" class="form-label">Kelas</label>
                        <select class="form-control" id="kelas" name="kelas">
                            <option value="<?php echo $row['kelas'] ?>"><?php echo $kelas ?></option>
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
                    
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a class="btn btn-danger" href="listPendaftar.php">Batal</a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>