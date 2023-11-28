<?php

include_once "./autres/menu.php";

$bd = new PDO('mysql:host=localhost;dbname=bibliotheque','root','');

if ($bd==null){echo "Echec de connection";}

echo '<form action="./search.php" method="POST" style="margin-top:5px;"><a style="font-size: 25px; background-color: orange; text-decoration: none;
padding: 8px; font-weight: bold; margin-left: 60px;" href="./autres/formulaire.html">Ajouter</a>
<input style="font-size: 20px; padding: 5px; border:1px solid blue;" type="text" name="isearch" placeholder="Rechercher...">
<input style="font-size: 22px; padding: 5px; cursor: pointer; border:1px solid blue;" type="submit" name="bsearch" value="search">
</form>';

echo "<h1>Listes des Identifiants</h1>";
echo "<table border='1'>
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

if($bd!=null)
{
$rep=$bd->query ("SELECT * from bibliotheque.register");
while($donnee = $rep->fetch())
{
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
}
echo "</table>";

if(isset($_POST["bvalider"])){
    $req=$bd->prepare ("INSERT INTO bibliotheque.register(nom,prenom,nation,faculte,sexe,area,photo,telephone,password,mail)
    VALUES ('$nom','$prenom','$nation','$fac','$sexe','$area','$photo','$phone','$psw','$email')");
    include "../affiche.php";
}

}

?>