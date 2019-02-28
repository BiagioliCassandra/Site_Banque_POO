<?php
include("template/header.php");
?>
<h1 class="m-5">Formulaire de connexion</h1>
<a <?php setHref("register"); ?> class="container">Créer un compte</a>
<?php
include("form/loginUserForm.php");
include("template/footer.php");
?>
