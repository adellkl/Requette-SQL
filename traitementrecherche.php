<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css//style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title> Page traitement de la recherche </title>
 
</head>
<?php 
include'connexion.php';
?> 


<body>
<div class="nav">
  <a href="index.php"> Revenir à la page d'accueil</a>
  <a href="toutlescontact.php"> voir tous les contacts de mon carnet </a>
</div>
<br><br> <br> 


<?php 

 
if(isset($_POST['submit'])) { 
            $nom=$_POST['nom']; 
            $requette="SELECT * FROM `contact` WHERE nom='$nom' "; 
            $result=mysqli_query($connect,$requette);
            if($result){
            while($tab=mysqli_fetch_assoc($result)){
                $id=$tab['id'];
                $nom=$tab['nom'];
                $prenom=$tab['prenom'];
                $DateDeNaissance=$tab['DateDeNaissance'];
                $fonction=$tab['fonction'];
              echo 
              '<table class="table"> 
              <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Date de naissance</th>
                    <th scope="col">Fonction</th>
                    <th scope="col"> Action que vous pouvez effectuer</th>
                  </tr>
              </thead> 
              <tr> 
                        <td>'.$id.'</td>
                        <td>'.$nom.'</td>
                        <td>'.$prenom.'</td>
                        <td>'.$DateDeNaissance.'</td>
                        <td>'.$fonction.'</td>
                        <td>
                        <button  class="MAJ" > <a style="color:white; "href="modifier.php? mettreajour='.$id.'">Mettre a jour le contact</a></button>
                        <button class="SUP" ><a style="color:white;" href="supprimer.php? supprimer='.$id.' "> supprimer le contact</a></button>
              </td>
              </tr>' ; } 

        }  
      }      

?>





