<?php

require_once './class/voiture.php';

$resultat = Voiture::affiche();
?>
   <div class="uk-child-width-1-2@s uk-grid-match" uk-grid>
          
    <?php
foreach ($resultat as $donnee) {
    echo '
      <div> 
    <div class="uk-card uk-card-default uk-card-hover uk-card-body carte">
        <div class="uk-card-title"><img class="uk-border-circle" src="'.$donnee['image'].'"><h3 class="nomVoiture">'.$donnee['marquenom'].' '.$donnee['modele'].'</h3></div>';

    echo '<div class="uk-inline">
            <a uk-icon="settings" title="Fiche Technique" name="technique"></a>
            <div uk-dropdown="mode: click">';

    echo '<h2>Fiche Technique:  </h2>
        <ul class="uk-list uk-list-divider" id="'.$donnee['idvoiture'].'">
            <li><b><u>Modele:</u></b> '.$donnee['modele'].'</li>
            <li><b><u>Marque:</u></b> '.$donnee['marquenom'].'</li>
            <li><b><u>Type:</u></b> '.$donnee['nomtype'].'</li>
            <li><b><u>Puissance:</u></b> '.$donnee['puissance'].' CV</li>
            <li><b><u>Poids:</u></b> '.$donnee['poids'].' KG</li>
            <li><b><u>Vitesse Max.:</u></b> '.$donnee['vitesse_max'].' km/h</li>
            <li><b><u>Accélération:</u></b> '.$donnee['acceleration'].' secondes</li>
            <li><b><u>Consommation:</u></b> '.$donnee['consommation'].' litres/100</li>
            <li><b><u>Dates:</u></b> '.$donnee['dates'].'</li>
        </ul>';

    echo '</div>
        <a uk-icon="file-edit" href="/vue/modif.php?modifier='.$donnee['idvoiture'].'" title="Modifier"></a>
        <a class="uk-icon-link" uk-icon="trash" href="/vue/access.php?supprimer='.$donnee['idvoiture'].'" title="Supprimer"></a>
     
        </div>
        </div></div>
         ';
}
?>
</div>