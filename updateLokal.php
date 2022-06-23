<?php
include_once "conn.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$kelas = $_POST['kelas'];


$query = "UPDATE siswa SET nama='$nama', no_hp='$no_hp', email='$email', kelas='$kelas' WHERE id = $id "; 
if (mysqli_query($conn, $query)){
    echo "<script>alert('Data Berhasil Di update');window.location='listPendaftar.php'</script>";
}
else {
    echo "Failed";
}

?>