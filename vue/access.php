<?php

require_once '../class/voiture.php';

if (isset($_POST['ajouter'])) {
    $modele = $_POST['modele'];
    $puissance = $_POST['puissance'];
    $poids = $_POST['poids'];
    $image = $_POST['image'];
    $vitesse = $_POST['vitesse'];
    $acceleration = $_POST['acceleration'];
    $conso = $_POST['conso'];
    $marque = $_POST['marque'];
    $type = $_POST['type'];
    $dates = $_POST['dates'];

    Voiture::ajout($modele, $puissance, $poids, $image, $vitesse, $acceleration, $conso, $marque, $type, $dates);
    echo "L'ajout a été effectué!";
    header('Refresh: 2; url=../index.php');
}

if (isset($_GET['supprimer'])) {
    $supprimer = $_GET['supprimer'];
    Voiture::supprime($supprimer);
    echo 'Suppression faite';
    header('Refresh: 2; url=../index.php');
}

if (isset($_POST['modifi'])) {
    $modifi = $_POST['modifi'];
    $modele1 = $_POST['modeleModif'];
    $puissance1 = intval($_POST['puissanceModif']);
    $poids1 = intval($_POST['poidsModif']);
    // $image1 = $_POST['imageModif'];
    $vitesse1 = intval($_POST['vitesseModif']);
    $acceleration1 = floatval($_POST['accelerationModif']);
    $conso1 = floatval($_POST['consommationModif']);
    $dates = $_POST['dates'];

    Voiture::modif($modele1, $puissance1, $poids1, $vitesse1, $acceleration1, $conso1, $dates, $modifi);
    echo 'Modification effectuée!';
    header('Refresh: 1; url=../index.php');
}
