<?php 
include("template/header.php");
?>
<h1 class="m-5">Formulaire de <?php echo $value; ?></h1>
<a class="btn btn-info mx-5" <?php setHref("single?id=" . $bankAccount->getId())?>>Retour</a>
<?php 
include("form/paymentWithdrawalForm.php");
include("template/footer.php");
?>