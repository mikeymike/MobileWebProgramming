<?php

$farm = $_GET['farm'];
$server = $_GET['server'];
$id = $_GET['id'];
$secret = $_GET['secret'];

header('Content-Type: image/jpeg');
echo file_get_contents(sprintf("http://farm%s.staticflickr.com/%s/%s_%s.jpg", $farm, $server, $id, $secret));

//http://farm{farm-id}.staticflickr.com/{server-id}/{id}_{secret}.jpg
