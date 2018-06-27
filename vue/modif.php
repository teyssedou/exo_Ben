<?php

require_once '../component/header.php';
require_once '../class/voiture.php';

?>
<h2>Modification</h2>
<form method="post" action="access.php">
    <fieldset class="uk-fieldset">
        <legend class="uk-legend">Modifier Voiture :</legend>
<?php
if (isset($_GET['modifier'])) {
    $modifier = $_GET['modifier'];

    $res2 = Voiture::afficheUneSeule($modifier);

    foreach ($res2 as $donnee) {
        echo '<div class="uk-margin">
                <input class="uk-input" type="text" name="modeleModif" value="'.$donnee['modele'].'">
              </div>';
        echo '<div class="uk-margin">
                <input class="uk-input" type="text" name="puissanceModif" value="'.$donnee['puissance'].'">
              </div>';
        echo '<div class="uk-margin">
                <input class="uk-input" type="text" name="poidsModif" value="'.$donnee['poids'].'">
              </div>';

        echo '<div class="uk-margin">
                <input class="uk-input" type="text" name="vitesseModif" value="'.$donnee['vitesse_max'].'">
              </div>';
        echo '<div class="uk-margin">
                <input class="uk-input" type="text" name="accelerationModif" value="'.$donnee['acceleration'].'">
              </div>';
        echo '<div class="uk-margin">
                <input class="uk-input" type="text" name="consommationModif" value="'.$donnee['consommation'].'">
              </div>';
        echo '<div class="uk-margin">
                <input class="uk-input" type="date" name="dates" value="'.$donnee['dates'].'">
              </div>';
        echo '<button value="'.$modifier.'" type="submit" name="modifi">Modifier</button>';
        echo '</div>
             <div class="uk-card-footer">
               <a href="../index.php" uk-icon="home" name="accueil"></a>
            </div>
            </div>';
        echo '</fieldset>
</form>';
    }
}

require_once '../component/footer.php';
?>