<?php
class BankAccountsManager extends manager
{

  public function getAccount($id)
  {
    $id = (int) $id;
    $q = $this->_db->prepare('SELECT * FROM bankAccount WHERE id = ?');
    $q->execute([$id]);
    $donnees = $q->fetch(PDO::FETCH_ASSOC);
    return new BankAccount($donnees);
  }

  public function getList()
    {
      $list = [];
      $q = $this->_db->query('SELECT id, name, money FROM bankAccount');
      while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
      {
        $list[] = new BankAccount($donnees);
      }
      return $list;
    }

///////////////////////////////////////////////////////////////////////

  public function add(BankAccount $account) {
    $q = $this->_db->prepare('INSERT INTO bankAccount(name, money) VALUES(:name, :money)');
    $q->bindValue(':name', $account->getName());
    $q->bindValue(':money', $account->getMoney(), PDO::PARAM_INT);
    $q->execute();
  }

  ///////////////////////////////////////////////////////////////////////

  public function delete($id)
  {
    $q = $this->_db->prepare("DELETE FROM bankAccount WHERE id = ?");
    $result = $q->execute([$id]);
    return $result;
  }

  ///////////////////////////////////////////////////////////////////////
  public function update(BankAccount $account)
  {
    $q = $this->_db->prepare('UPDATE bankAccount SET name = :name, money = :money WHERE id = :id');
    $q->bindValue(':name', $account->getName());
    $q->bindValue(':money', $account->getMoney(), PDO::PARAM_INT);
    $q->bindValue(':id', $account->getId(), PDO::PARAM_INT);
    $q->execute();
  }
  public function updateTransfert(BankAccount $account)
  {
    $q = $this->_db->prepare('UPDATE bankAccount SET money = :money WHERE id = :id');
    $q->bindValue(':money', $account->getMoney(), PDO::PARAM_INT);
    $q->bindValue(':id', $account->getId(), PDO::PARAM_INT);
    $q->execute();
  }


}
?>
