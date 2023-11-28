<?php
$bd = new PDO('mysql:host=localhost;dbname=bibliotheque','root','');

if ($bd==null){echo "Echec de connection";}


if(isset($_POST['binscrit']))
{   
    $nom=$_POST["tnom"];
    $prenom=$_POST["tprenom"];
    $nation=$_POST["tnation"];
    $fac=$_POST["tfac"];
    $sexe=$_POST["sexe"];
    $area=$_POST["tarea"];
    $photo = $_FILES["photo"]["name"];
    $phone=$_POST["tphone"];
    $psw=$_POST["tpsw"];
    $email=$_POST["tmail"];
        
  $req=$bd->prepare ("INSERT INTO bibliotheque.register(nom,prenom,nation,faculte,sexe,area,photo,telephone,password,mail)
    VALUES ('$nom','$prenom','$nation','$fac','$sexe','$area','$photo','$phone','$psw','$email')");

    // echo "<h2>Merci Vous etes bien enregistré</h2>";

     
       $req->bindparam(":nom",$nom);
       $req->bindparam(":prenom",$prenom);
       $req->bindparam(":nation",$nation);
       $req->bindparam(":faculte",$fac);
       $req->bindparam(":sexe",$sexe);
       $req->bindparam(":area",$area);
       $req->bindparam(":photo",$photo);
       $req->bindparam(":telephone",$phone);
       $req->bindparam(":password",$psw);
       $req->bindparam(":mail",$email);
       $req->execute(array());
       $req->closecursor();
       
     include "affiche.php";

    }
    
else
    if(isset($_POST["bconnect"]))
        {
            $mail=$_POST["mail"];
            $psw=$_POST["password"];
            $rep=$bd->prepare("select nom,prenom from bibliotheque.register where mail=:email and password=:pass");
            $rep->execute(array("email"=>$mail,"pass"=>$psw));
            $donnee=$rep->fetch();
            if($donnee)
            {
                $nom=$donnee["nom"];
                $prenom=$donnee["prenom"];
                echo"Etudiant:".$nom." ".$prenom."";
            Header('Location:autres/Acceuil.html');

            } else
            {
                echo "<h2 style='color:red; font-weight:bold; font-family:verdana; margin: 22% 22%;'>Nom Utilisateur ou Mot de Passe incorrect!!</h2>";
            }
        } 
          

?>