<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$kelas = $_POST['kelas'];

$client = new Client();

$response = $client->request(
    'POST',
    'http://192.168.56.32/gose-bimbel/rest-api-bimbel.php?id=' . $_GET['id'],
    [
        'form_params' => [
            'nama' => $nama,
            'email' => $email,
            'no_hp' => $no_hp,
            'kelas' => $kelas
        ]
    ]
);

if ($response->getStatusCode()) {
    header("location:listPendaftar.php");
} else {
    echo "Failed";
}
