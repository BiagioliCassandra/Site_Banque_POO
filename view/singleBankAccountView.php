<?php
require("template/header.php");
?>
<a class="btn btn-info mx-5" <?php setHref("listAccount?id=" . $singleAccount->getId())?>>Retour</a>
<div class="card-deck m-5 d-flex text-center">
  <table class="table bg-light">
    <thead>
      <tr>
        <th scope="col">Nom</th>
        <th scope="col">Montant</th>
        <th scope="col">Versement</th>
        <th scope="col">Retrait</th>
        <th scope="col">transfert</th>
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <?php echo $singleAccount->getName();?>
        </td>
        <?php echo $singleAccount->viewMoney(); ?>
        <td><a href="versement?id=<?php echo $singleAccount->getId();?>" class="card-link"><i class="far fa-credit-card"></i></a></td>
        <td><a href="retrait?id=<?php echo $singleAccount->getId();?>" class="card-link"><i class="far fa-credit-card"></i></a></td>
        <td> <a href="transfert?id=<?php echo $singleAccount->getId();?>">faire un transfert</a> </td>
       </tr>
    </tbody>
  </table>
</div>
<?php
require("template/footer.php");
?>
