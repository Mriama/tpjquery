<?php
try{
    $bdd = new PDO('mysql:host=;dbname=jma;charset=utf8', 'root', 'jinadiallo',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
}
catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table service
?>
