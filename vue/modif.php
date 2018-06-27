<?php

require_once '../component/header.php';
require_once '../class/voiture.php';

?>
<link rel="stylesheet" type="text/css" media="screen" href="/assets/css/modif.css" />
<h2>Modification</h2>

<div class="uk-child-width-1-2@s uk-grid-match" uk-grid>
    <div class="modifVoiture">
        <div class="uk-card uk-card-default uk-card-hover uk-card-body">
  
			<form class="uk-grid-small" uk-grid action="access.php" method="post">
<?php
if (isset($_GET['modifier'])) {
    $modifier = $_GET['modifier'];

    $res2 = Voiture::afficheUneSeule($modifier);

    foreach ($res2 as $donnee) {
        echo '
		<div class="uk-width-1-1">
        	<input class="uk-input" type="text" name="modeleModif" value="'.$donnee['modele'].'">
    	</div>
        
    	<div class="uk-width-1-2@s">
        	<input class="uk-input" type="text" name="puissanceModif" value="'.$donnee['puissance'].'">
  		</div>
    
    	<div class="uk-width-1-2@s">
        	<input class="uk-input" type="text" name="poidsModif" value="'.$donnee['poids'].'">
    	</div>
    
    	<div class="uk-width-1-2@s">
        	<input class="uk-input" type="text" name="vitesseModif" value="'.$donnee['vitesse_max'].'">
    	</div>
    
    	<div class="uk-width-1-2@s">
        	<input class="uk-input" type="text" name="accelerationModif" value="'.$donnee['acceleration'].'">
    	</div>
    
    	<div class="uk-width-1-2@s">
        	<input class="uk-input" type="text" name="consommationModif" value="'.$donnee['consommation'].'">
    	</div>
    
    	<div class="uk-width-1-2@s">
       		<input class="uk-input" type="date" name="dates" value="'.$donnee['dates'].'">
    	</div>
   
 		<div class="uk-card-footer">
            <button class="iconModif" value="'.$modifier.'" type="submit" name="modifi" title="Modifier"><a class="uk-icon-link" uk-icon="sign-in" ratio="2" ></a></button>

            <a href="../index.php" ratio="2" uk-icon="home" title="Accueil" name="accueil"></a>
        </div>';
    }
}

require_once '../component/footer.php';
?>
			</form>
        </div>
    </div>
</div>