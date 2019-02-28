<form class="w-50 m-5" method="post" action="<?php makeAction($value); ?>">
  <div class="form-group">
    <label for="numberBankAccount">Nom du compte :</label>
    <input type="text" class="form-control" name="name" id="numberBankAccount" placeholder="123654S">
  </div>
  <div class="form-group">
    <label for="amount">Montant du <?php echo $value; ?>: </label>
    <input type="number" class="form-control" name="amount" id="amount">
  </div>
  <button type="submit" value="<?php echo $value; ?>" class="btn btn-primary">Enregistrer le <?php echo $value ?></button>
</form>