<?php
/**
 * Class to connect to the data base
 */
class dataBase {
  const host  = "localhost";
  const dbName = "POO_bank";
  const login = "phpmyadmin";
  const mdp = "AdaLinkLoulouZelda";
  static public function BD() {
    $db = new PDO("mysql:host=" . self::host .";dbname=" . self::dbName , self::login, self::mdp);
    return $db;
  }
}
