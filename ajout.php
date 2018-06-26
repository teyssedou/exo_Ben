<?php
require 'connexion.php';
require 'component/header.php';

?> 
<a class="uk-button uk-button-default" href="index.php">Accueil</a>

<div class="uk-child-width-1-2@s uk-grid-match" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-hover uk-card-body">
  
<form class="uk-grid-small" uk-grid>
    <div class="uk-width-1-1">
        <input class="uk-input" type="text" name="modele" placeholder="Nom du Modèle">
    </div>
    <div class="uk-width-1-2@s">
        <input class="uk-input" type="text" name="image" placeholder="Image">
    </div>
    <div class="uk-width-1-4@s">
        <input class="uk-input" type="text" name="puissance" placeholder="Puissance en CV">
    </div>
    <div class="uk-width-1-4@s">
        <input class="uk-input" type="text" name="poids" placeholder="Poids">
    </div>
    <div class="uk-width-1-4@s">
        <input class="uk-input" type="text" name="vitesse" placeholder="Vitesse Max">
    </div>
    <div class="uk-width-1-4@s">
        <input class="uk-input" type="text" name="acceleration" placeholder="Accélération">
    </div>
    <div class="uk-width-1-4@s">
        <input class="uk-input" type="text" name="conso" placeholder="Consommation">
    </div>
      <div class="uk-width-1-4@s">
        <input class="uk-input" type="date" name="dates" placeholder="dates">
    </div>

    <div class="uk-width-1-2@s">
            <select class="uk-select" name="marque">
                <option selected>Marque</option>
        <?php
            $req = Connexion::getLink()->query('SELECT * FROM marque');
            while ($donnee = $req->fetch()) {
                echo '<option value="'.$donnee['id'].'">'.$donnee['nom'].'</option>';
            }
        ?>
            </select>
        </div>

        <div class="uk-width-1-2@s">
            <select class="uk-select" name="type">
                <option selected>Type</option>
        <?php 
        $req = Connexion::getLink()->query('SELECT * FROM type');
        while ($donnee = $req->fetch()) {
            echo '<option value="'.$donnee['id'].'">'.$donnee['nom'].'</option>';
        }
        ?>
            </select>
        </div>

    <button type="submit" name="ajouter">Ajouter</button>
</form>
 </div>
    </div>
<?php
require 'component/footer.php';
?>
</body>
</html>