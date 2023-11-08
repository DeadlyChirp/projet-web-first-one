<?php
    include_once 'header.php';

?>
<!--SLIDE SHOW PHOTO -->
<div class="container">
    <h1 class="main-heading">FOOD ADDICT</h1>
    <div class="slideshow" >
        <!-- carousel control buttons -->
        <button class="slide-btn slide-btn-1"></button>
        <button class="slide-btn slide-btn-2"></button>
        <button class="slide-btn slide-btn-3"></button>
        <button class="slide-btn slide-btn-4"></button>
        <!-- carousel wrapper which contains all images -->
        <!--        SAME SIZE PHOTO ONLY !!! 960x640-->
        <div class="slideshow-wrapper">
            <div class="slide">
                <img class="slide-img" src="../projet-io2 CHRIST PARTIE/images/gordon.jpg" alt="1">
            </div>
            <div class="slide">
                <img class="slide-img" src="../projet-io2 CHRIST PARTIE/images/french-dish.jpg" alt="2">
            </div>
            <div class="slide">
                <img class="slide-img" src="../projet-io2%20CHRIST%20PARTIE/images/vietnamese-dish.jpg" alt="3">
            </div>
            <div class="slide">
                <img class="slide-img" src="../projet-io2%20CHRIST%20PARTIE/images/korean-dishes.jpg " alt="4">
            </div>
        </div>
    </div>
</div>

<?php
include_once  'footer.php';
?>