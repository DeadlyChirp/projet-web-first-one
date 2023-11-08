<?php
    include_once 'header.php';
    include_once '../INCLUDES-files/connect-db-restau.php';

    $ID = $_GET['ID'];
    $sql = "SELECT categories ,description ,name ,adresse ,prix  FROM restaurants WHERE restaurantsId=$ID";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restau2</title>
    <link rel="stylesheet" href="../css blocks/restau.css">
</head>
<body>
    <div id="header">
        <h1>
            <?php 
                echo $row['name'];
            echo "</h1>";
            echo $row['adresse'];
            ?>
        <!-- <p>info de base voir comme sur trip advisor ou the fork<a href="https://www.tripadvisor.fr/Restaurant_Review-g60763-d3318261-Reviews-Shanghai_Asian_Cuisine-New_York_City_New_York.html">restaurant NY trip advisor</a>
        ou <a href="https://www.thefork.fr/restaurant/shiro-r694643/menu">restaurant the fork</a></p> -->

    </div>
    
    <div class="description-restau" id="texte-presentation">
        <!-- haut de page comme une petite banderole d'introduction  -->
        <p>
            <?php 
                echo $row['description'];
            ?>
        </p>
    </div>

    <div class="colonne-de-gauche">
        <div class="ptite-photo">
            <!-- petite photo du restau surement un petit carousel -->
            <?php 
                echo "<img src=".glob('../uploads/'.$_GET['ID'].'/*')[0]."  alt='photo random pour le moment'>";
            // print_r (glob('../uploads/'.$_GET['ID'].'/*')[0]);
            ?>
        </div>    

        <div class="détails">
        <?php
        echo "<h1 id='détail'>détails</h1>";
        if(strlen($row['categories']) > 0){
            echo "<h2>type de cuisine :</h2> ";  
            echo $row['categories'];    
            }
        ?> 
        <br><br><br><br>
         <?php
        if(strlen($row['prix']) !== null){
                echo "<h2>prix du restaurant :</h2> ";  
                echo $row['prix'];    
            }
        ?> 
        </div>    

    
            
        <!-- fin du menu -->
        </div>
        
    </div> <!-- fin colonne gauche -->

    <div class="colonne-de-droite">
        <div class="avis-restau">
            <div class="avis">
                <h4 class="users">ptn de random</h4>
                <p class="msg-ptn-random">truc truc trop cool le restau</p>
            </div>
        </div>
    </div>

</body>
</html>
<?php mysqli_close($conn); ?>