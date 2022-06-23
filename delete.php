<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->request(
    'DELETE',
    'http://192.168.56.32/gose-bimbel/rest-api-bimbel.php?id=' . $_GET['id']
);

if ($response->getStatusCode()) {
    header("location:listPendaftar.php");
} else {
    echo "Failed";
}
