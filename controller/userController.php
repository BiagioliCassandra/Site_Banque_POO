<?php
/**
 *
 */
class userController
{

  public function welcomeUser()
  {
    $manager = new userManager();
    $users = $manager->getListUser();
    if (!empty($_POST))
    {
      foreach ($users as $key => $user) {
        if ($_POST["name"] === $user->getName() && $_POST["password"] === $user->getPassword())
        {
          initializeUserSession($user);
          redirectTo("listAccount?id=" . $user->getId());
        }
      }
    }
    require "view/loginUserView.php";
  }

  public function registerUser()
  {
    require "view/registerUserView.php";
  }
}




?>
