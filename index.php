<?php
require_once 'connect.php';

$resultados = array();
$parameters = array();
$parameters['q'] ='"root" in parents and trashed=false';

$client->setAccessToken($_SESSION['accessToken']);
$service = new Google_DriveService($client);

$archivos = $service->files->listFiles($parameters);
$resultados = array_merge($resultados, $archivos->getItems());

include 'vista.php';
?>