<?php
include("template/header.php");
?>
<h1 class="m-5">Formulaire Création d'un compte</h1>
<a <?php setHref("login"); ?> class="container">Retour</a>
<?php
include("form/registerUserForm.php");
include("template/footer.php");
?>
