<?php

include_once "conn.php";
$query = mysqli_query($conn, "DELETE FROM siswa WHERE id = " . $_GET['id']);

header("Location: listPendaftar.php");
?>