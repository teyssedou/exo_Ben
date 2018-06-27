<?php

require_once 'connexion.php';

class Voiture
{
    public static function affiche()
    {
        $req = Connexion::getLink()->query('SELECT *, voiture.id AS idvoiture, type.nom AS nomtype, marque.nom AS marquenom   FROM voiture, type, marque WHERE voiture.marque=marque.id AND voiture.type=type.id ORDER BY idvoiture');

        return $req->fetchAll();
    }

    public static function vueDernier()
    {
        $req1 = Connexion::getLink()->query('SELECT *, voiture.id AS idvoiture, type.nom AS nomtype, marque.nom AS marquenom   FROM voiture, type, marque WHERE voiture.marque=marque.id AND voiture.type=type.id ORDER BY dates DESC LIMIT 3 ');

        return $req1->fetchAll();
    }

    public static function afficheUneSeule($voitureId)
    {
        $req2 = Connexion::getLink()->prepare('SELECT *, voiture.id AS idvoiture, type.nom AS nomtype, marque.nom AS marquenom   FROM voiture, type, marque WHERE voiture.marque=marque.id AND voiture.type=type.id AND voiture.id=:id ORDER BY idvoiture');
        $req2->execute([':id' => $voitureId]);

        return $req2->fetchAll();
    }

    public static function ajout($modele, $puissance, $poids, $image, $vitesse_max, $acceleration, $conso, $marque, $type, $dates)
    {
        $bdd = Connexion::getLink()->prepare('INSERT INTO `voiture`(`modele`, `puissance`, `poids`, `image`, `vitesse_max`, `acceleration`, `consommation`, `marque`, `type`, `dates`) VALUES (:modele, :puissance, :poids, :image, :vitesse_max, :acceleration, :consommation, :marque, :type, :dates)');
        $bdd->execute([':modele' => $modele, ':puissance' => $puissance, ':poids' => $poids, ':image' => $image, ':vitesse_max' => $vitesse_max, ':acceleration' => $acceleration, ':consommation' => $conso, ':marque' => $marque, ':type' => $type, ':dates' => $dates]);
    }

    public static function modif($modele, $puissance, $poids, $vitesse_max, $acceleration, $consommation, $dates, $id)
    {
        $stmt = Connexion::getLink()->prepare("UPDATE voiture SET modele='$modele', puissance=$puissance, poids=$poids, vitesse_max=$vitesse_max, acceleration=$acceleration, consommation=$consommation, dates='$dates' WHERE id=$id");
        $stmt->execute();
        // print_r($stmt);
        // var_dump($stmt->errorInfo());
        // die;
    }

    public static function supprime($id)
    {
        $stmt = Connexion::getLink()->prepare('DELETE FROM `voiture` WHERE id=:id');
        $stmt->execute([':id' => $id]);
    }
}
