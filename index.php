<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css//style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title> Page Accueil</title>
 
</head>

<!--   ICI JE FAIS UN INCLUDE DE MA PAGE CONNEXION.PHP OU J'AI EFFECTUER LA CONNEXION A LA BD   -->

<?php 
include'connexion.php';
?> 

<body>

<!--   ICI GRÂCE AU CLASSE BOOTSTRAP JE FAIS UNE BARRE DE NAVIGATION FACILEMENT  -->

<div class="nav">
  <a href="index.php"> Accueil</a>
  <a href="ajouter-contact.php">Ajouter un contact</a>
  <a href="toutlescontact.php"> voir tout les contact</a>
  <a href="resultatdelarecherche.php"> Rechercher un contact </a>
</div>
<br><br> <br>
   

<div class="container">
  <h3>
  Consignes de cette exercice 
  </h3>
  <p> 
  Créer un back office (CRUD + Recherche) pour gérer un carnet d'adresse ( gérer les contacts ) <br>
  Créer la BD Créer la table (Modelisation en UML) <br>
  Remplir la table <br> 

  </p>
  </div>



</header>


 
</body>
</html>