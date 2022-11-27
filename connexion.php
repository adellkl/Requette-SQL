    <!-- Connexion a la base de donnée tester la connexion et verifier par un message si ont est connecté -->
<?php
$requette=
    $connect=mysqli_connect("localhost","root","root","contact") or die("Erreur de connexion");
    if( $connect ->connect_error){
        die(' Erreur :' . $connect->connect_error);
    }
    
    // echo' Connexion a la BD réussite '; //

    ?> 