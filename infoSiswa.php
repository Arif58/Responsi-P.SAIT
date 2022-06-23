<?php
include "conn.php";

if (isset($_POST['submit'])) {
    if (!empty($_POST['nama']) && !empty($_POST['no_hp']) && !empty($_POST['email']) && !empty($_POST['kelas'])){
        $nama = $_POST['nama'];
        $noHP = $_POST['no_hp'];
        $email = $_POST['email'];
        $kelas = $_POST['kelas'];

        $query = "INSERT INTO siswa(nama,no_hp,email,kelas) VALUES('$nama','$no_hp','$email','$kelas')";

        $run = mysqli_query($conn,$query);

        if($run){
            echo "<script>alert('Data Telah Terkirim');window.location='index.php'</script>";
        }
    }
    else{
        echo "<script>alert('semua kolom wajib diisi');window.location='index.php'</script>";
        die();
    }

}

?>