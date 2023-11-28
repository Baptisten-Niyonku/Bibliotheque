<?php
 try {
    $bd = new PDO('mysql:host=localhost;dbname=bibliotheque','root','');
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch (PDOExeception $exc) {
    echo "connexion echoue". $exc->getMessage();
 }
?>