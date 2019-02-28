<?php
include "template/header.php";
?>
<div class="justify-content-end">
<a <?php setHref("addAccount"); ?> class="btn btn-primary btn-lg btn-block col-md-3 offset-md-8">Rajouter un nouveau compte</a>
</div>

<h1 class="m-5">Liste de tous les comptes</h1>
  <table class="table container">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">money</th>
        <th scope="col">delete</th>
        <th scope="col">update</th>

      </tr>
    </thead>
<?php foreach ($list as $key => $value): ?>
    <tbody>
      <tr>
        <th scope="row"><?php echo $value->getId();?></th>
        <td><a href="single?id=<?php echo $value->getId();?>"><?php echo $value->getName();?></a></td>
        <?php echo $value->viewMoney();?>
        <td><a href="deleteAccount?id=<?php echo $value->getId(); ?>"><i class="fas fa-trash-alt"></i> </a> </td>
        <td> <a href="#"><i class="fas fa-pen-nib"></i></a> </td>
      </tr>
    </tbody>
    <?php endforeach; ?>
  </table>

<?php
include "template/footer.php";
?>
