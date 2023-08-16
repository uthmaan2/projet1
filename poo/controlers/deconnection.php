<?php require_once('bd_connect.php');
if (isset($_POST['deconnection'])) {
    session_destroy();
    header("location:../view/connection.php");
}
