<?php

$nom = $_POST['nom'];
$mail = "";
$sujet = "Test";
$message ="Ceci est un test" ;

$retour = mail('', $sujet, $message);
if ($retour){
    echo "Votre mail a bien été envoyé.";
}