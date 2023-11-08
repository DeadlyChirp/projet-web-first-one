<?php
    include_once '../INCLUDES-files/random(2).php';
    include_once '../INCLUDES-files/connect-db-restau.php';
?>

<body>

<form action="random.php">
    <section class="restaurants">
        <div class="container-restaurant">
            <div class="restaurants-heading">
                Restaurants
            </div>
                <div class="restaurants-grid">
                <!-- restau 0 -->
                <div class="restaurant-container">
                        <div class="restaurants-img">
                            
                            <?php 
                                echo "<a href='restau-individuel.php?ID=$tabID[0]'>";
                                $sql = "SELECT categories ,description ,name ,adresse ,prix  FROM restaurants WHERE restaurantsId=$tabID[0]";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                            ?>
                            
                            <img class="slide-img" <?php echo "src='$tabPath[0]'" ?> alt="5" >
                            </a>
                        </div>
                        <h3 class="nom-restaurant">
                            <?php 
                                echo $row['name'];
                                echo "</h3>";
                                echo "<br>";
                                echo "adresse : ".$row['adresse'];
                            ?>
                        <p class="restaurant-p">
                            <?php 
                                echo "categories : ".$row['categories'];
                            ?>    
                        </p>
                        <h3 class="price">
                            <?php 
                                    for($i1 = 0; $i1 < $row['prix']; $i1++){
                                        echo"$";
                                    }
                            ?>
                        </h3>
                    </div>
                <!-- restau 1 -->
                <div class="restaurant-container">
                        <div class="restaurants-img">
                            
                            <?php 
                                echo "<a href='restau-individuel.php?ID=$tabID[1]'>";
                                $sql = "SELECT categories ,description ,name ,adresse ,prix  FROM restaurants WHERE restaurantsId=$tabID[1]";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                            ?>
                            
                            <img class="slide-img" <?php echo "src='$tabPath[1]'" ?> alt="1" >
                            </a>
                        </div>
                        <h3 class="nom-restaurant">
                            <?php 
                                echo $row['name'];
                                echo "</h3>";
                                echo "<br>";
                                echo "adresse : ".$row['adresse'];
                            ?>
                        <p class="restaurant-p">
                            <?php 
                                echo "categories : ".$row['categories'];
                            ?>    
                        </p>
                        <h3 class="price">
                            <?php 
                                    for($i1 = 0; $i1 < $row['prix']; $i1++){
                                        echo"$";
                                    }
                            ?>
                        </h3>
                    </div>
                    
                    <!-- restau 2 -->
                    <div class="restaurant-container">
                        <div class="restaurants-img">
                            
                            <?php 
                                echo "<a href='restau-individuel.php?ID=$tabID[2]'>";
                                $sql = "SELECT categories ,description ,name ,adresse ,prix  FROM restaurants WHERE restaurantsId=$tabID[2]";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                            ?>
                            
                            <img class="slide-img" <?php echo "src='$tabPath[2]'" ?> alt="2" >
                            </a>
                        </div>
                        <h3 class="nom-restaurant">
                            <?php 
                                echo $row['name'];
                                echo "</h3>";
                                echo "<br>";
                                echo "adresse : ".$row['adresse'];
                            ?>
                        <p class="restaurant-p">
                            <?php 
                                echo "categories : ".$row['categories'];
                            ?>    
                        </p>
                        <h3 class="price">
                            <?php 
                                    for($i2 = 0; $i2 < $row['prix']; $i2++){
                                        echo"$";
                                    }
                            ?>
                        </h3>
                    </div>
                    
                    <!-- restau 3 -->
                    <div class="restaurant-container">
                        <div class="restaurants-img">
                            
                            <?php 
                                echo "<a href='restau-individuel.php?ID=$tabID[3]'>";
                                $sql = "SELECT categories ,description ,name ,adresse ,prix  FROM restaurants WHERE restaurantsId=$tabID[3]";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                            ?>
                            
                            <img class="slide-img" <?php echo "src='$tabPath[3]'" ?> alt="3" >
                            </a>
                        </div>
                        <h3 class="nom-restaurant">
                            <?php 
                                echo $row['name'];
                                echo "</h3>";
                                echo "<br>";
                                echo "adresse : ".$row['adresse'];
                            ?>
                        <p class="restaurant-p">
                            <?php 
                                echo "categories : ".$row['categories'];
                            ?>    
                        </p>
                        <h3 class="price">
                            <?php 
                                    for($i3 = 0; $i3 < $row['prix']; $i3++){
                                        echo"$";
                                    }
                            ?>
                        </h3>
                    </div>
                    
                    <!-- restau 4 -->
                    <div class="restaurant-container">
                        <div class="restaurants-img">
                            
                            <?php 
                                echo "<a href='restau-individuel.php?ID=$tabID[4]'>";
                                $sql = "SELECT categories ,description ,name ,adresse ,prix  FROM restaurants WHERE restaurantsId=$tabID[4]";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                            ?>
                            
                            <img class="slide-img" <?php echo "src='$tabPath[4]'" ?> alt="4" >
                            </a>
                        </div>
                            <h3 class="nom-restaurant">
                            <?php 
                                echo $row['name'];
                                echo "</h3>";
                                echo "<br>";
                                echo "adresse : ".$row['adresse'];
                            ?>
                        <p class="restaurant-p">
                            <?php 
                                echo "categories : ".$row['categories'];
                            ?>    
                        </p>
                        <h3 class="price">
                            <?php 
                                    for($i4 = 0; $i4 < $row['prix']; $i4++){
                                        echo"$";
                                    }
                            ?>
                        </h3>
                    </div>
                    
                    <!-- restau 5 -->
                    <div class="restaurant-container">
                        <div class="restaurants-img">
                            
                            <?php 
                                echo "<a href='restau-individuel.php?ID=$tabID[5]'>";
                                $sql = "SELECT categories ,description ,name ,adresse ,prix  FROM restaurants WHERE restaurantsId=$tabID[5]";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                            ?>
                            
                            <img class="slide-img" <?php echo "src='$tabPath[5]'" ?> alt="5" >
                            </a>
                        </div>
                        <h3 class="nom-restaurant">
                            <?php 
                                echo $row['name'];
                                echo "</h3>";
                                echo "<br>";
                                echo "adresse : ".$row['adresse'];
                            ?>
                        </h3>
                        <p class="restaurant-p">
                            <?php 
                                echo "categories : ".$row['categories'];
                            ?>    
                        </p>
                        <h3 class="price">
                            <?php 
                                    for($i5 = 0; $i5 < $row['prix']; $i5++){
                                        echo"$";
                                    }
                            ?>
                        </h3>
                    </div>
                    
            </div>
        </div>
    </section>
</form>

</body>
</html>