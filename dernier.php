<h2>Derniers Ajouts</h2>
<?php

require_once 'component/header.php';
require_once 'voiture.php';
require_once 'nav.php';

$resultat = Voiture::vueDernier();
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
}

require_once 'component/footer.php';
?>
</body>
