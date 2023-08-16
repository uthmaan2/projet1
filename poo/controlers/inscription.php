<?php require_once('bd_connect.php');
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$login = $_POST["login"];
$pass = sha1($_POST["pass"]);
$cpass = sha1($_POST["confirmpass"]);
if (isset($_POST["submit"]) && !empty($nom) && !empty($prenom) && !empty($login) && !empty($pass) && !empty($cpass)) {

    $req = $db->prepare('SELECT * FROM membres WHERE pseudo = :pseudo');
    $req->execute(array('pseudo' => $login));
    $resultat = $req->fetch();
    if (!$resultat) {
        if ($pass != $cpass) {
            echo "mot de passe non identiques";
        } else {
            $req = $db->prepare('INSERT INTO membres(nom, prenom,pseudo,pass,dates) VALUES(:nom,:prenom,:pseudo, :pass, now())');
            $req->execute(array(
                'nom' => $nom,
                'prenom' => $prenom,
                'pseudo' => $login,
                'pass' => $pass
            ));
            echo "Inscription réussie";
            header('location:../view/connection.php');
        }
    } else {

        echo "pseudo deja utilisé";
    }
}
