<?php require_once('bd_connect.php');
$req = $db->query("SELECT nom,quantité,num_magas  FROM produits WHERE nature = 'DEPOT'");
$req->execute();
$produits = $req->fetchAll();
