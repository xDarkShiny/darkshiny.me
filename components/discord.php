<?php

$JSON = json_decode(file_get_contents('https://api.lanyard.rest/v1/users/438037153310834700'), true);

$file = file_get_contents('https://api.lanyard.rest/v1/users/438037153310834700');
$json = json_decode($file);


?>