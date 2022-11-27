<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css//style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title> Page tout les contact </title>
 
</head>

<!-- un petit menu lisible et facilite la navigation   --> 
<div class="nav">
  <a href="index.php"> Accueil</a>
  <a href="ajouter-contact.php">Ajouter un contact</a>
  <a href="toutlescontact.php"> voir tout les contact</a>
  <a href="resultatdelarecherche.php"> Rechercher un contact </a>
</div>>
<?php 
include'connexion.php';
?>
<body> <br><br>

    

    <table class="table"> 
  <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Date de naissance</th>
        <th scope="col">Fonction</th>
        <th scope="col"> Action que vous pouvez effectuer</th>
      </tr>
  </thead>

  <?php

  // ici je fais la requette SQL et je défini les champs qui vont etre affichés dans le tableau //
  $requette="SELECT * FROM `contact` LIMIT 15 "; 
  $result=mysqli_query( $connect,$requette);
  if($result){
  while($tab=mysqli_fetch_assoc($result)){
    $id=$tab['id'];
    $nom=$tab['nom'];
    $prenom=$tab['prenom'];
    $DateDeNaissance=$tab['DateDeNaissance'];
    $fonction=$tab['fonction'];
    echo '<tr> 
    <td>'.$id.'</td>
    <td>'.$nom.'</td>
    <td>'.$prenom.'</td>
    <td>'.$DateDeNaissance.'</td>
    <td>'.$fonction.'</td>
    <td>
    <button  class="MAJ" > <a style="color:white; "href="modifier.php? mettreajour='.$id.'">Mettre a jour le contact</a></button>
    <button onclick="myFunction()" class="SUP" ><a style="color:white;" href="supprimer.php? supprimer='.$id.' "> supprimer le contact</a></button>
  </td>
    </tr>'
     ;
  }  
 
}

  ?>

<script>

function myFunction() {
  let text = "Press a button!\nEither OK or Cancel.";
  if (confirm(text) == true) {
    text = "You pressed OK!";
  } else {
    text = "You canceled!";
  }
  document.getElementById("demo").innerHTML = text;
}
</script>

  