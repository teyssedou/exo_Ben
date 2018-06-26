<?php
require_once 'component/header.php';
?>
<h2>Exercice Voiture</h2>
<?php
require_once 'nav.php';
?>
<p uk-margin>
     <a class="uk-button uk-button-default" href="ajout.php">Nouvelle Voiture</a>
</p>

<?php
require './vue/list.php';
require_once 'component/footer.php';
?>
