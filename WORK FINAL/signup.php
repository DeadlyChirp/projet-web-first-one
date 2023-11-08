<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FOOD ADDICT's Sign-up </title>
</head>
<body>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login&Sign-Up</title>
    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
    <link rel="shortcut icon" href="../background/dc1.png" />
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">


    <link href="../css%20blocks/login&singup.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
    <input id="flip" type="checkbox">
    <!--    BLOC COVER = IMAGE SUR LOGIN ET SIGNUP-->
    <div class="cover">
        <!--        LOGIN PART-->
        <div class="front">
            <img src="../background/neko-sushi-bar-vincent-trinidad.jpg" alt="">
            <div class="text">
                <span class="text-1">EVERYTHING IS FOOD </span>
                <span class="text-2">IF YOU'RE BRAVE ENOUGH </span>
            </div>
        </div>
        <!--        SIGNUP PART -->
        <div class="back">
            <img src="../background/neko-sushi-bar-vincent-trinidad.jpg" alt="">
            <div class="text">
                <span class="text-1">EVERYTHING IS FOOD </span>
                <span class="text-2">IF YOU'RE BRAVE ENOUGH </span>
            </div>
        </div>
    </div>

    <!--    to reach to a link -->

    <!--   Action va etre va page qu'on va acceder quand la form est soumise  -->
    <!--    Ce qu'on va faire c'est qu'on va prendre tous les inputs dans cette form puis mettre dans
    le lien URL puis le faire passer à la prochaine page dans ce lien URL ( meme lien)-->
    <!--    Voila comment faire passer du data d'un document ou une page sur nôtre site à une autre-->
    <form action="../INCLUDES-files/signup.inc.php" method="post">
        <!--        POURQUOI .INC? Cela veut seulement dire que c'est un fichier inclus, c'est extension du fichier -->
<!--        POURQUOI METHOD POST? Car on veut pas que les datas soient visibles sur le URL/LIEN-->
        <div class="form-content">
            <!--            SIGN UP PART-->
            <div class="signup-form">
                <div class="title">Sign-Up</div>
                <div class="input-boxes">
                    <div class="input-box">
                        <i class="fas fa-address-card"></i>
                        <input placeholder="Enter your name" name="name" type="text">
                    </div>
                    <div class="input-box">
                        <i class="fas fa-address-card"></i>
                        <input placeholder="Enter your lastname" name="lastname" type="text">
                    </div>
                    <!--                COMPTE + COMPTE SYMBOLE EN UTILISANT FONT AWESOME -->
                    <div class="input-box">
                        <i class="fas fa-user"></i>
                        <input placeholder="Enter your Username" name="uid"  type="text">
                    </div>
                    <div class="input-box">
                        <i class="fas fa-envelope"></i>
                        <input placeholder="Enter your Email" name="email" type="text">
                    </div>
                    <!--MOT DE PASSE + MDP SYMBOLE EN UTILISANT FONT AWESOME -->
                    <div class="input-box">
                        <i class="fas fa-lock"></i>
                        <input  placeholder="Set your password" name="pwd" type="password">
<!--                        POURQUOI type="password"? Pour que quand on met le mdp, on va voir des etoiles au lieu notre mdp-->
                    </div>
                    <div class="input-box">
                        <i class="fas fa-lock"></i>
                        <input placeholder="Repeat your password" name="pwdrepeat" type="password">
                    </div>
                    <div class="button input-box">
<!--                        <input class="fa" type="submit" value="Sign-Up">-->
                       <button type="submit" name="submit">Sign-Up</button>

                    </div>
                    <div class="text log-in-text">Already have an account? <a href="login.php"> Log in now!:D</a></div>
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>