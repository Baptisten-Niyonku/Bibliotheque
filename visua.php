<?php
// $bd = new PDO('mysql:host=localhost;dbname=bibliotheque','root','');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <table style="font-size: 18px;">
    <thead>
        <tr>
            <!-- <th>ID</th>
            <th>Nom</th>
            <th>PRENOM</th>
            <th>NATIONALITE</th>
            <th>FACULTE</th>
            <th>SEXE</th>
            <th>QUARTIER</th>
            <th>PHOTO</th>
            <th>TELEPHONE</th>
            <th>PASSWORD</th>
            <th>EMAIL</th> -->
        </tr>
    </thead>
    
    <tbody>
        <?php
//         $affiche_query = $bd->query ("SELECT * from register");
        // while($donnee = $affiche_query->fetch()){?>
        <tr>
            <td><?php echo $donnee['id'];?></td>
            <td><?php echo $donnee['nom'];?></td>
            <td><?php echo $donnee['prenom'];?></td>
            <td><?php echo $donnee['nation'];?></td>
            <td><?php echo $donnee['faculte'];?></td>
            <td><?php echo $donnee['sexe'];?></td>
            <td><?php echo $donnee['area'];?></td>
            <td><?php echo $donnee['photo'];?></td>
            <td><?php echo $donnee['telephone'];?></td>
            <td><?php echo $donnee['password'];?></td>
            <td><?php echo $donnee['mail'];?></td>
            <!-- <td>
                <a class="btn_supprimer" href="supprimer.php?id=<?php $donnee['id'];?>">Supprimer</a>
            </td> -->
        </tr>
      <?php }?>
    </tbody>
   </table>
    
   <style>
    th, td{
        border-bottom: 1px solid blue;
        padding:5px;
    }
    body{
        margin:auto;
    }
   </style>
</body>
</html>