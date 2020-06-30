<?php

$db_user = 'id13945008_root';
$_db_pwd = 'y6zPs23QQs-5F';

try {
    $bdd = new PDO('mysql:host=localhost;dbname=id13945008_vg_auto', $db_user, $_db_pwd);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

session_start();
?>