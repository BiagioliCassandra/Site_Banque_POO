<?php
require "config/global.php";
require "service/autoloader.php";
require "service/router.php";
require "service/urlManager.php";
require "service/sessionManager.php";
require "service/formChecker.php";
require "model/manager.php";
require "model/BankAccountsManager.php";
require "model/TransactionsManager.php";
require "model/userManager.php";
require "model/entity/entity.php";
require "model/entity/BankAccount.php";
require "model/entity/Transaction.php";
require "model/entity/user.php";

autoloader::autoload();
route();
?>
