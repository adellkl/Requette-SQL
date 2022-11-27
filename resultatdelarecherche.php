<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css//style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title> Page recherche </title>
 
</head>
<?php 
include'connexion.php';
?> 


<body>
<div class="nav">
  <a href="index.php"> Accueil</a>
  <a href="ajouter-contact.php">Ajouter un contact</a>
  <a href="toutlescontact.php"> voir tout les contact</a>
  <a href="resultatdelarecherche.php"> Rechercher un contact </a>
</div>
<br><br> <br>

   
<!--   !! A FAIRE : 

--> 

<form class="recherche" action="traitementrecherche.php" method="post">
<input class="zonerecherche" name="nom"  type="text"  id="exampleInputEmail1" placeholder=" entrez le nom du contact " required>
<button class="boutonrecherche" type="submit" name='submit' class="btn btn-primary"  > Lancer la recherche </button>


</form>




</body>
</html> 
