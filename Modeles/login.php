<?php

    include_once 'index.php?page=dbconnect';

    $mail = $_POST["mail"];
    $pass = md5($_POST["pass"]);

    $db = new PDO("mysql:host=" . Config::SERVERNAME . ";dbname=" . Config::DBNAME, Config::USER, Config::PASSWORD);

    $req = $db->prepare("SELECT * FROM utilisateurs WHERE mail=:mail and password=:mdp");
    $req->bindParam(":mail", $mail);
    $req->bindParam(":mdp", $pass);
    $req->execute();

    $resultat = $req->fetchAll();

    if (count($resultat) == 0) {
        $req = $db->prepare("SELECT * FROM utilisateurs WHERE mail=:mail and password=:mdp");

        $req->bindParam(":mail", $mail);
        $req->bindParam(":mdp", $pass);
        $req->execute();

        $resultat = $req->fetchAll();
    }

    $db=null;

    if (count($resultat) == 0) {

        $_SESSION['logged'] = 0;
        header("location: index.php?page=Connexion");
        ob_flush();

    } else {
        $_SESSION['logged'] = 1;
        $_SESSION["Speudo"] = $resultat[0]["speudo"];
        $_SESSION["Mail"] = $resultat[0]["mail"];
        
        header("location: index.php");
        ob_flush();

    }

?>