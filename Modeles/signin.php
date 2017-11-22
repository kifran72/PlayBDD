<?php

include_once 'index.php?page=dbconnect';


// Récupération des champs d'inscription //

$Speudo = $_POST["speudo"];
$Mail = $_POST["mail"];
$MDP = md5($_POST["pass"]);
$MDP_conf = $_POST["pass-verif"];


// Insertion des données utilisateurs //

$db = new PDO("mysql:host=" . Config::SERVERNAME . ";dbname=" . Config::DBNAME, Config::USER, Config::PASSWORD);
$req = $db->prepare("INSERT INTO utilisateurs(speudo, mail, password) VALUES (:speudo, :mail, :pass)");
$req->bindParam(":speudo", $Speudo);
$req->bindParam(":pass", $MDP);
$req->bindParam(":mail", $Mail);
$req->execute();

// Test pour s'avoir si la requête c'est bien executé //

if ($req->errorInfo()[0] == '00000') {
    header("location: index.php");
    ob_flush();
}else{
    echo "ça marche pas!!";
}
