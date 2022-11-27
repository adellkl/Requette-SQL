<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css//style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title> Page ajouter un contact </title>
</head>

<body>
<br> <br>
<!-- cette partie est fini --> 

    <?php
    include'connexion.php';
// ICI JE FAIS LA REQUETTE SQL POUR POUVOIR MODIFIER LES DONNÉES DE MA BD GRACE AU FORMULAIRE DE MODIFICATION // 
    echo "<br/><br/>";

      if(isset($_POST['submit'])){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $DateDeNaissance=$_POST['DateDeNaissance'];
        $fonction=$_POST['fonction'];

        $requette="INSERT INTO `contact` (nom,prenom,DateDeNaissance,fonction) 
        VALUES ('$nom','$prenom','2012-02-23','$fonction')";
        $result=mysqli_query($connect,$requette);
        if($result){
         // echo "Ajout avec succee à la base de donnée" ;//
          header('location:toutlescontact.php');
        } else{
          die(mysqli_error($connect));
        
          echo"echec de l'ajout à la BD";
        }
         echo "<br/>";
      } 
      


    ?> <br>
<!--  JE PEUX FAIRE UN INCLUDE DE MA BARRE DE NAVIGATION MAIS QUAND J'ESSAYE CA ME METS DES PROBLEMES D'AFFICHAGE DONC JE COPIE COLLE  -->
<!-- cette partie est fini --> 

<div class="nav">
  <a href="index.php"> Accueil</a>
  <a href="ajouter-contact.php">Ajouter un contact</a>
  <a href="toutlescontact.php"> voir tout les contact</a>
  <a href="resultatdelarecherche.php"> Rechercher un contact </a>
</div>


<!-- ENCORE UNE FOIS GRACE AU CLASS BOOTSTRAP JE FAIS UN FORMULAIRE BEAU ET RAPIDEMENT   -->

<div class="container">
      <form method="post" class="container">
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

      
        <button type="submit" name='submit' class="btn btn-primary"  >Ajouter a la base de donée </button>
      </form>

</div> <br>


</body>
</html>