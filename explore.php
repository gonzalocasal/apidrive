<?php

require_once 'connect.php';

$folder = $_GET["fid"];

$resultados = array();
$parameters = array();
$parameters['q'] ='"'.$folder.'" in parents and trashed=false';

$client->setAccessToken($_SESSION['accessToken']);
$service = new Google_DriveService($client);

$archivos = $service->files->listFiles($parameters);
$resultados = array_merge($resultados, $archivos->getItems());

include 'vista.php';
?>