<?php

class Marque
{
    public static function affiche()
    {
        $req = Connexion::getLink()->query('SELECT * FROM marque');
        while ($donnee = $req->fetch()) {
            echo "<div id='".$donnee['id']."'>";
            echo "La voiture avec l'id n°".$donnee['id'];
            echo ' a comme marque <b>'.$donnee['nom'].'</b>';
            echo '</div><br />';
        }
    }
}
