<?PHP

if (isset($_POST["submit"]) ) {
    //si l'utilisateur a bien soumis les cases correctement -> ce fichier php va "demarrer"
    //sinon on va le renvoyer à la page sign-up
    //isset() Détermine si une variable est définie et est différente de NULL.
//if this is set inside the code then continue what the user is doing. If not, throw the user back to the signup
//    echo "It works";
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $username = $_POST["uid"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
//ce qu'on a fait ici, c'est qu'on a prendre des
// data dans URL afin que nous les ayons prêtes à être utliséé dans notre script
// [nom de chaque data on a mis]

    require_once '../INCLUDES-files/dbhandler.inc.php';
    require_once 'function.inc.php';
    //On va utiliser ce fichier Dbasehandler pour verifier si l'utilisateur a bien mis ses coordonnees
    //C'est un processus qui consiste à determiner si l'utilisateur a fait des erreus
    //Ce sont des error handling fonctions

    if (emptyInputSignup($name, $lastname, $username, $email, $pwd, $pwdRepeat) !== false) { //return true ( ya des erreurs dans le code) or false ( 0 erreur)
        //function emptyInputSignup. Pourquoi !== false et non pas == true?
        //si cela renvoie autre chose à part true ou false, alors il va comprendre cela comme n'etant pas une erreur
        //techniquement c'est une erreur car on a besoin false ( 0 erreur) pour avancer

        //Vu qu'on ne peut pas sasvoir qu'est ce que l'utilisateur a mis dans le formulaire donc il va falloir verifier toutes les variables
        //si elles sont vides

        header("location: ../signup.php?error=emptyinput");
        //On doit inclure une erreur lorqu'on renvoit l'utilisateur à la page d'inscription
        //si erreur = emptyInput alors que clairement utilisateur a oublié de taper quelque chose dans la formulaire

        exit(); //exit s'arrete ce script de s'executer entierement
    }

//    ici on va verifier si l'utilisateur a bien saisi un pseudonyme ou non
    if (invalidUid($username) !== false) {
        header("location: ../signup.php?error=invaliduid");
        exit(); //exit s'arrete ce script de s'executer entierement
    }
    //    ici on va verifier si l'utilisateur a bien saisi un email ou oublier @ ou non
    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit(); //exit s'arrete ce script de s'executer entierement
    }
    //on va verifier si les mdp n'etaiennt pas les memes (pwd et pwdrepeat)
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=passwordsdontmatchbro");
        exit(); //exit s'arrete ce script de s'executer entierement
    }
    //on va verifier si le pseudo existait djj ou non

    if (uidExist($dbconnect , $username) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit(); //exit s'arrete ce script de s'executer entierement
    }
}
else {
    header("location: ../signup.php");
    exit();
}
?>