<?php
try {
   $bd = new PDO('mysql:host=localhost;dbname=bibliotheque','root','');
   $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOExeception $exc) {
   echo "connexion echoue". $exc->getMessage();
}

include("./conn.php");
 if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $req = $bd->prepare("DELETE FROM bibliotheque.register WHERE id= ?");
    $req->execute(array($id));
    if ($req) {
        echo '<div style="background:green; text-align:center;color:white; padding:0.5rem;">Vous avez supprime avec succes</>';
        header("location:affiche.php");
    }else {
        echo '<div style="background:red; text-align:center;color:red; padding:0.5rem;">Vous avez supprime avec succes</>';
    }
   
    
    }
?>