<form method="post" action="access.php">
    <fieldset class="uk-fieldset">

        <legend class="uk-legend">Nouvelle Voiture :</legend>
        <div class="uk-margin">
            <input class="uk-input" type="text" name="modele" placeholder="Nom du Modèle">
        </div>

        <div class="uk-margin">
            <input class="uk-input" type="text" name="puissance" placeholder="Puissance en CV">
        </div>

        <div class="uk-margin">
            <input class="uk-input" type="text" name="poids" placeholder="Poids">
        </div>

        <div class="uk-margin">
            <input class="uk-input" type="text" name="image" placeholder="Image">
        </div>

        <div class="uk-margin">
            <input class="uk-input" type="text" name="vitesse" placeholder="Vitesse Max">
        </div>

          <div class="uk-margin">
            <input class="uk-input" type="text" name="acceleration" placeholder="Accélération">
        </div>
        
        <div class="uk-margin">
            <input class="uk-input" type="text" name="conso" placeholder="Consommation">
        </div>
    
               <div class="uk-margin">
            <select class="uk-select" name="marque">
                <option selected>Marque</option>
        <?php
            // $req = Connexion::getLink()->query('SELECT * FROM marque');
            // while ($donnee = $req->fetch()) {
            //     echo '<option value="'.$donnee['id'].'">'.$donnee['nom'].'</option>';
            // }
        ?>
            </select>
        </div>

        <div class="uk-margin">
            <select class="uk-select" name="type">
                <option selected>Type</option>
        <?php 
        // $req = Connexion::getLink()->query('SELECT * FROM type');
        // while ($donnee = $req->fetch()) {
        //     echo '<option value="'.$donnee['id'].'">'.$donnee['nom'].'</option>';
        // }
        ?>
            </select>
        </div>

        <div class="uk-margin">
            <input class="uk-input" type="datetime" name="dates" placeholder="dates">
        </div>
               
        <button type="submit" name="ajouter">Ajouter</button>
    
    </fieldset>
</form> -->