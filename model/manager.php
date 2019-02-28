<?php

/**
 * Classe abstraite dont toutes les entitées ont vocation à hériter, il permet d'intégrer automatique la BD
 */
abstract class manager
{
  protected $_db;

  public function __construct() {
    $this->setDb(dataBase::BD());
  }

  public function setDb($connection) {
  $this->_db = $connection;
  }

  public function getDb() {
    return $this->_db;
  }
}


 ?>
