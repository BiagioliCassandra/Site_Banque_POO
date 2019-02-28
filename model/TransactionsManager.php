<?php 
class TransactionsManager extends manager 
{
    public function addTransaction(Transaction $transaction) {
      $q = $this->_db->prepare('INSERT INTO transaction(getter, sender, amount) VALUES(:getter, :sender, :amount)');
      $q->bindValue(':getter', $transaction->getGetter());
      $q->bindValue(':sender', $transaction->getSender());
      $q->bindValue(':amount', $transaction->getAmount(), PDO::PARAM_INT);
      $q->execute();
    }

    public function updateTransaction(Transaction $transaction)
    {
      $q = $this->_db->prepare('UPDATE transaction SET getter = :getter, sender = :sender, amount = :amount WHERE id = :id');
      $q->bindValue(':getter', $transaction->getGetter());
      $q->bindValue(':sender', $transaction->getSender());
      $q->bindValue(':amount', $transaction->getAmount(), PDO::PARAM_INT);
      $q->bindValue(':id', $transaction->getId(), PDO::PARAM_INT);
      $q->execute();
    }
} 
?>