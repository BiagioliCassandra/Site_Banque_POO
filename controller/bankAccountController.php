<?php
class BankAccountController
{
    public function payments()
    {
        $value = "versement";
        $id = $_GET["id"];

        $accountManager = new BankAccountsManager;
        $bankAccount = $accountManager->getAccount($id);  
        $transaction = new Transaction([]);
        $transaction->payment($bankAccount, $accountManager);
        
        require "view/paymentWithdrawalView.php";
    }

    public function withdrawals()
    {
        $value = "retrait";
        $id = $_GET["id"];

        $accountManager = new BankAccountsManager;
        $bankAccount = $accountManager->getAccount($id);  
        $transaction = new Transaction([]);
        $transaction->withdrawal($bankAccount, $accountManager);

        require "view/paymentWithdrawalView.php";
    }
    
    public function singleBankAccount() 
    {
        $id = $_GET["id"];
        $manager = new bankAccountsManager;
        $singleAccount = $manager->getAccount($id);
        require "view/singleBankAccountView.php";
    }

    // page of Account's list (show a table with all account with action to: update / delete / add)
    public function listAccount() {
        $account = new BankAccountsManager();
        $list = $account->getList();
        $compte = new BankAccount($_POST);
        $account->add($compte);

        require "view/listAccountView.php";
      }


      public function addNewAccount(){
        if (!empty($_POST)) {
          $compte = new BankAccount($_POST);
          $account = new BankAccountsManager();
          $account->add($compte);
          redirectTo("");
        }
          require "view/addAccountView.php";


      }
      public function deleteAccount(){

            $em = new BankAccountsManager();
            $em->delete($_GET["id"]);
            redirectTo("");
    }

    public function transfert()
    {
      // $getter = new BankAccountsManager();
      // $getter->getAccount();
      //

      require "view/transfertView.php";
    }
}
?>
