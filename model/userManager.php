<?php
/**
 *
 */
class userManager extends manager
{

  public function addU(user $user)
  {
    $query = $this->_db->prepare("INSERT INTO user(name, password) VALUES(:name, :password)");
    $query->bindValue(':name', $user->getName());
    $query->bindValue(':password', $user->getPassword());
    $query->execute();
  }

  public function searchUser($id)
  {
    $id = (int) $id;
    $query= $this->_db->prepare("SELECT * FROM user WHERE id = ?");
    $query->execute([$id]);
    $donnees = $query->fetch(PDO::FETCH_ASSOC);
    return new user($donnees);
  }

  public function getListUser()
    {
      $list = [];
      $q = $this->_db->query('SELECT id, name, password FROM user');
      while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
      {
        $list[] = new user($donnees);
      }
      return $list;
    }
}


?>
