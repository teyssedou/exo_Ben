<?php
require_once 'component/header.php';
?>
<body>
  <h2>Exercice Voiture donnée par Ben</h2>

<p uk-margin>
     <a class="uk-button uk-button-default" href="ajout.php">Nouvelle Voiture</a>
</p>
<?php
require './vue/list.php';
?>
<?php
require_once 'component/footer.php';
?>
</body>