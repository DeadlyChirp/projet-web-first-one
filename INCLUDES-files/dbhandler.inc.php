<!--DATE BASE HANDLER-->
<!--C'est un fichier qui va gerer et connecter à la database-->
<!--Donc apres quand on a besoin de connecter/consulter aux datas dans la database
ou mettre, inserer, sortir -->
<!--Puis on se réfère à une variable dans ce fichier pour pouvoir connecter à la
 database-->
<!--UN FICHIER TRES IMPORTANT POUR POUVOIR CONNECTER À NOTRE DATABASE-->


<!--CREATION D'UNE CONNECTION À LA DATABASE-->

<?php

$serverName ="localhost";
//localhost car on utilise xampp
$dBUserName ="root";
$dBPasword ="";
//mdp par default car dans xampp mdp est empty
$dBName ="projectC&T";
//nom de la database

$dbconnect = mysqli_connect($serverName,$dBUserName,$dBPasword,$dBName);
//variable connection qui va ouvrir une connexion à notre database

if (!$dbconnect){
//    si la connection retourn false, donc on va vouloir ecrire des messages ou qqc
    die("Connection failed man: " .mysqli_connect_error());
//        en utilisant die(), cela va tuer ce qu'on est en train de faire equivalent a exit()
// mysqli_connect_error va nous renvoyer l'erreur qu'on a eu
}
?>