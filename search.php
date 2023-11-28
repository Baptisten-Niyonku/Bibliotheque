<?php
$bd = new PDO('mysql:host=localhost;dbname=bibliotheque','root','');
// if ($bd==null){echo "Echec de connection";}

if(isset($_POST["bsearch"]))
        {
            $search=$_POST["isearch"];

            echo "la liste trouves de ".$search.' est:';

            $req=$bd->query("SELECT * from bibliotheque.register where nom='$search' or prenom='$search' ");
            
            echo "<table>
            <tr>
            <th>ID</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>NATION</th>
            <th>FACULTE</th>
            <th>SEXE</th>
            <th>AREA</th>
            <th>PHOTO</th>
            <th>TELEPHONE</th>
            <th>PASSWORD</th>
            <th>E-MAIL</th>
            </tr>";

            while($donnee=$req->fetch()){
                $idcl=$donnee["id"];
                $nom=$donnee["nom"];
                $prenom=$donnee["prenom"];
                $nation=$donnee["nation"];
                $fac=$donnee["faculte"];
                $gender=$donnee["sexe"];
                $area=$donnee["area"];
                $photo=$donnee["photo"];
                $phone=$donnee["telephone"];
                $psw=$donnee["password"];
                $mail=$donnee["mail"];
            }
            echo "<tr>
            <td>".$idcl."</td>
            <td>".$nom."</td>
            <td>".$prenom."</td>
            <td>".$nation."</td>
            <td>".$fac."</td>
            <td>".$gender."</td>
            <td>".$area."</td>
            <td>".$photo."</td>
            <td>".$phone."</td>
            <td>".$psw."</td>
            <td>".$mail."</td>
            <td><a href='./supprimer.php' onclick='return confirm(\"Etes vous sur...?\");'>supprimer</a></td>
            </tr>";
        
            
            // echo "</table>";
            
        }
?>
