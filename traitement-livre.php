<?php
$bd = new PDO('mysql:host=localhost;dbname=bibliotheque','root','');

if ($bd==null){echo "Echec de connection";}


if(isset($_POST['bajout']))
{   
    $titre=$_POST["titre"];
    $exemplaire=$_POST["ex"];
    $page=$_POST["page"];
    $auteur=$_POST["aut"];
    $annee=$_POST["an"];
    $edition=$_POST["ed"];
    $place=$_POST["place"];
    $date=$_POST["date"];

    $req=$bd->prepare ("INSERT INTO bibliotheque.livre(titre,n_page,n_exemplaire,auteur,edition,annee,date_enr,place)
    VALUES ('$titre','$page','$exemplaire','$auteur','$edition','$annee','$date','$place')");

    echo "<h1>Merci Vous etes bien enregistré Livre: ".$titre.""."Page:".$page."</h1>";

     
     $req->bindparam(":titre",$titre);
     $req->bindparam(":n_page",$page);
     $req->bindparam(":n_exemplaire",$exemplaire);
     $req->bindparam(":auteur",$auteur);
     $req->bindparam(":edition",$edition);
     $req->bindparam(":annee",$annee);
     $req->bindparam(":date_enr",$date);
     $req->bindparam(":place",$place);
     $req->execute(array());
     $req->closecursor();
}
?>