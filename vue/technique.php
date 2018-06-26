<?php
require_once '../component/header.php';
?>
<h2>Fiche Technique</h2>
 
  <div class="uk-card uk-card-default uk-width-1-2@m">
    <div class="uk-card-header">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
<?php

require_once '../voiture.php';

if (isset($_GET['afficher'])) {
    $afficher = $_GET['afficher'];
    $res = Voiture::afficheUneSeule($afficher);

    foreach ($res as $donnee) {
        // if ($donnee['idvoiture'] == $afficher) {
        echo '<img class="uk-border-circle" width="150" height="150" src="'.$donnee['image'].'">
        </div>';
        echo '<div class="uk-width-expand">
                <h3 class="uk-card-title uk-margin-remove-bottom">'.$donnee['modele'].' '.$donnee['marquenom'].'</h3>
              </div>
            </div>
        </div>';
        echo '<div class="uk-card-body">
        <ul class="uk-list uk-list-divider" id="'.$donnee['idvoiture'].'">';
        echo '<li>Modele: '.$donnee['modele'].'</li>';
        echo '<li>Marque: '.$donnee['marquenom'].'</li>';
        echo '<li>Type: '.$donnee['nomtype'].'</li>';
        echo '<li>Puissance: '.$donnee['puissance'].' CV</li>';
        echo '<li>Poids: '.$donnee['poids'].' KG</li>';
        echo '<li>Vitesse Max.: '.$donnee['vitesse_max'].' km/h</li>';
        echo '<li>Accélération: '.$donnee['acceleration'].' secondes</li>';
        echo '<li>Consommation: '.$donnee['consommation'].' litres/100</li>';
        echo '</ul>';
        echo '</div>
             <div class="uk-card-footer">
               <a href="../index.php" uk-icon="home" name="accueil"></a>
            </div>
            </div>';
    }
}

require_once '../component/footer.php';
?>