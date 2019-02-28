<?php
//Class pour la chargement automatique des class_exists
//On utilise principalement les constantes éviter l'instanciation d'un objet
class autoloader {
  //On enregistre dans des constantes de classe les entités, les services et les managers
  const entity = ["entity", "user"];
  const service= ["autoloader"];
  const manager = ["dataBase","manager"];
  //Fonction qui appelle l'autoload register qui se base sur la fonction statique loader
  static public function autoload() {
    spl_autoload_register(array(__CLASS__, 'loader'));
  }
  //Fonction qui require les fichiers selon leur nom de class
  //par exemple si le nom est trouvé dans le tableau des entités on charge une entité
  static public function loader($class){
    if(in_array($class, self::entity)) {
      require("model/entity/" . $class . ".php");
    }
    elseif (in_array($class, self::manager)) {
      require("model/" . $class . ".php");
    }
    else{
      if(in_array($class, self::service)) {
        require("service/" . $class . ".php");
      }
    }
  }
}
 ?>
