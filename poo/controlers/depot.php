<?php require_once('bd_connect.php');
if (isset($_POST['benreg']) && isset($_POST['nom']) && isset($_POST['quantite']) && isset($_POST['numero'])) {
    $req = $db->prepare("insert into produits(nom,quantité,nature,num_magas,date) values(:nom,:quantite,'DEPOT',:numero,now())");
    $req->execute(array(
        'nom' => $_POST['nom'],
        'quantite' => $_POST['quantite'],
        'numero' => $_POST['numero']
    ));
}
header("location:../view/dashboard.php");
