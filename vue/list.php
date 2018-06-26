<?php

require_once 'voiture.php';

$resultat = Voiture::affiche();
?>
<table class="uk-table uk-table-hover uk-table-divider">
    <thead>
        <tr>
            <th>Marque</th>
            <th>Modèle</th>
            <th>Type</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
      <?php
foreach ($resultat as $donnee) {
    echo '<tr id="'.$donnee['idvoiture'].'">';
    echo '<td>'.$donnee['marquenom'].'</td>';
    echo '<td>'.$donnee['modele'].'</td>';
    echo '<td>'.$donnee['nomtype'].'</td>';
    echo '<td><p uk-margin>
    <a href="vue/technique.php?afficher='.$donnee['idvoiture'].'" uk-icon="settings" name="technique"></a> 
    <a class="uk-button uk-button-secondary" href="modif.php?modifier='.$donnee['idvoiture'].'">Modifier</a>
    <a class="uk-button uk-button-danger" href="access.php?supprimer='.$donnee['idvoiture'].'">Supprimer</a>
    </p></td>';
    echo '</tr>';

    // echo "<div id='".$donnee['idvoiture']."'>";
    // echo 'La voiture de modele <b>'.$donnee['modele'].' </b>a pour marque '.$donnee['marquenom'].' et est de type '.$donnee['nomtype'].'<br />';
    // echo 'Elle a une puissance de '.$donnee['puissance'].' CV!<br />';
    // echo 'Son poids est de '.$donnee['poids'].' kg pour une vitesse max de '.$donnee['vitesse_max'].' km/h.<br />';
    // echo 'La voiture passe de 0 à 100km/h en '.$donnee['acceleration'].' secondes.<br />';
    // echo 'Elle consomme '.$donnee['consommation'].' l/100<br />';
    // echo '<a href="access.php?supprimer='.$donnee['idvoiture'].'">Supprimer</a>';
    // echo '</div><br />';
}
?>
  </tbody>
</table>