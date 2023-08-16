<?php require_once('bd_connect.php');

if (isset($_POST['submit']) && isset($_POST['pseudo']) && isset($_POST['pass'])) {
    $req = $db->prepare('SELECT id FROM membres WHERE pseudo = :pseudo AND pass = :pass');
    $req->execute(array(
        'pseudo' => $_POST['pseudo'],
        'pass' => sha1($_POST['pass'])
    ));
    $resultat = $req->fetch();
    if (!$resultat) {
        echo 'mauvais identifiant';
    } else {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['pseudo'] = $_POST['pseudo'];
        header("location:../view/dashboard.php");
    }
}
