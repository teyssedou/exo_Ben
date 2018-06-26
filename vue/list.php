<?php

require_once 'voiture.php';

$resultat = Voiture::affiche();
?>
   <div class="uk-child-width-1-2@s uk-grid-match" uk-grid>
      
    <?php
foreach ($resultat as $donnee) {
    echo '<div>
        <div class="uk-card uk-card-default uk-card-hover uk-card-body">   
    <h3 class="uk-card-title"><img class="uk-border-circle" width="150" height="150" src="'.$donnee['image'].'">'.$donnee['marquenom'].' '.$donnee['modele'].'</h3>';

    echo '<p uk-margin>
            <a href="vue/technique.php?afficher='.$donnee['idvoiture'].'" uk-icon="settings" name="technique"></a>
            <a class="uk-button uk-button-secondary" href="modif.php?modifier='.$donnee['idvoiture'].'">Modifier</a>
            <a class="uk-button uk-button-danger" href="access.php?supprimer='.$donnee['idvoiture'].'">Supprimer</a>
            </p>
            </div>
    </div>';
}
        ?>
         
         </div>




<!-- <table class="uk-table uk-table-hover uk-table-divider">
    <thead>
        <tr>
            <th>Marque</th>
            <th>Modèle</th>
            <th>Type</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody> -->
     <!-- echo '<tr id="'.$donnee['idvoiture'].'">';
     echo '<td>'.$donnee['marquenom'].'</td>';
     echo '<td>'.$donnee['modele'].'</td>';
     echo '<td>'.$donnee['nomtype'].'</td>';
     echo '<td><p uk-margin>
     <a href="vue/technique.php?afficher='.$donnee['idvoiture'].'" uk-icon="settings" name="technique"></a>
     <a class="uk-button uk-button-secondary" href="modif.php?modifier='.$donnee['idvoiture'].'">Modifier</a>
     <a class="uk-button uk-button-danger" href="access.php?supprimer='.$donnee['idvoiture'].'">Supprimer</a>
     </p></td>';
     echo '</tr>'; -->
          <!-- </tbody>
</table> -->
