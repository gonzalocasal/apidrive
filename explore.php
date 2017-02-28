<?php

require_once 'connect.php';

$folder = $_GET["fid"];

$resultados = array();
$parameters = array();
$parameters['q'] ='"'.$folder.'" in parents and trashed=false';

$client->setAccessToken($_SESSION['accessToken']);
$service = new Google_DriveService($client);

$files = $service->files->listFiles($parameters);
$results = array_merge($results, $files->getItems());

include 'view.php';
?>
