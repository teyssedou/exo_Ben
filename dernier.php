<h2>Derniers Ajouts</h2>
<?php

require_once 'component/header.php';
require_once 'voiture.php';
require_once 'nav.php';

$resultat = Voiture::vueDernier();
?>
 <ul uk-accordion>
        
      <?php
foreach ($resultat as $donnee) {
    echo '<li>
   
    <a class="uk-accordion-title" href="#"> <img class="uk-border-circle" width="150" height="150" src="'.$donnee['image'].'"> '.$donnee['marquenom'].' '.$donnee['modele'].'</a>
                <div class="uk-accordion-content">';
    echo '<p uk-margin>
            <a href="vue/technique.php?afficher='.$donnee['idvoiture'].'" uk-icon="settings" name="technique"></a>
            <a class="uk-button uk-button-secondary" href="modif.php?modifier='.$donnee['idvoiture'].'">Modifier</a>
            <a class="uk-button uk-button-danger" href="access.php?supprimer='.$donnee['idvoiture'].'">Supprimer</a>
            </p>';
    echo '</div></li>';
}
require_once 'component/footer.php';
?>
       
        </ul>
</body>
