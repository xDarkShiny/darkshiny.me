<?php
try {
    $user = "root";
    $pass = "root";

    $db = new PDO('mysql:host=localhost;dbname=blog', $user, $pass);
} catch (PDOException $e) {
    print "Hata!: " . $e->getMessage() . "<br/>";
    die();
}
?>