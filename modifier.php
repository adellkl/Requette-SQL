<?php
include('connexion.php'); 

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css//style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title> Page modifier un</title>
</head>

<body>
<br> <br>

    <?php
    include'connexion.php';
    $id=$_GET['mettreajour'];

    echo "<br/><br/>";

      if(isset($_POST['miseajour'])){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $DateDeNaissance=$_POST['DateDeNaissance'];
        $fonction=$_POST['fonction'];

        $requette=
        "UPDATE contact 
        SET  
        nom='$nom',
            prenom='$prenom', 
            DateDeNaissance='2012-02-23', 
            fonction='$fonction'
            WHERE id='$id' " ;   
          

        $result=mysqli_query($connect,$requette);
        if($result){
        echo' <h3> 
         Modification du contact avec succée. </h3>'; 
        } else{
          die(mysqli_error($connect));
          //
          echo"echec de l'ajout à la BD";
        }
         echo "<br/>";
      }
       


    ?> <br>

<div class="nav">
  <a href="index.php"> Accueil</a>
  <a href="ajouter-contact.php">Ajouter un contact</a>
  <a href="toutlescontact.php"> voir tout les contact</a>
  <a href="resultatdelarecherche.php"> Rechercher un contact </a>
</div>
<div class="container">
      <form method="POST" class="container">
        <div >
          <label  for="nom"> Nom :  </label>
          <input name="nom" type="text" class="form-control" id="exampleInputEmail1" placeholder="entrez le nom" required>
        
        </div>
        <div >
          <label for="prenom">Prénom : </label>
          <input name="prenom" type="text" class="form-control" id="" placeholder="entrez le Prénom" required>
        </div>

        <div >
          <label for="DateDeNaissance"> Date de naissance  </label>
          <input  name="DateDeNaissance" type="date" class="form-control" id="" required>
        
        </div>
        <div >
          <label for="fonction">fonction </label>
          <input  name="fonction" type="text" class="form-control" id="" placeholder="entrez la fonction" required>
        </div>  <br>

      
        <button type="submit" name='miseajour' class="btn btn-primary"  >Mettre à jour </button>
      </form>

</div> <br>


</body>
</html>