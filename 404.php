<?php

$file = file_get_contents('https://api.lanyard.rest/v1/users/438037153310834700');
$json = json_decode($file);

print_r($json)
?>
