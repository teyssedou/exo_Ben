<?php
require '../class/connexion.php';
require '../component/header.php';

?> 
<link rel="stylesheet" type="text/css" media="screen" href="/assets/css/ajout.css" />

<a class="uk-icon-link iconAccueil" uk-icon="home" ratio="2" href="../index.php" title="Accueil"></a>


<div class="uk-child-width-1-2@s uk-grid-match" uk-grid>
    <div class="ajoutVoiture">
        <div class="uk-card uk-card-default uk-card-hover uk-card-body">
  
<form class="uk-grid-small" uk-grid action="access.php" method="post">
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
 <button class="iconAjout" type="submit" name="ajouter"><a class="uk-icon-link" uk-icon="sign-in" ratio="2" title="Ajouter"></a></button>
    
</form>
        </div>
    </div>
</div>
<?php
require '../component/footer.php';
?>
</body>
</html>