<?php

$nom = $_POST['nom'];
$mail = "hortensere@aol.com";
$sujet = "Test";
$message ="Ceci est un test" ;

$retour = mail('hortensere@aol.com', $sujet, $message);
if ($retour){
    echo "Votre mail a bien été envoyé.";
}