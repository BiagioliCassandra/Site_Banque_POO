<?php 
class Transaction extends BankAccount
{
    protected $getter;
    protected $sender;
    protected $amount;

    public function setGetter(string $getter)
    {
        $this->getter = $getter;
    }

    public function setSender(string $sender)
    {
        $this->sender = $sender;
    }

    public function setAmount(string $amount)
    {
        $this->amount = $amount;
    }

    public function getGetter() 
    {
        return $this->getter;
    }

    public function getSender() 
    {
        return $this->sender;
    }

    public function getAmount() 
    {
        return $this->amount;
    }

    //Versement
    public function payment($bankAccount, $accountManager)
    {
        if(!empty($_POST)) 
        {
            if($_POST["amount"] <= 1000)
            {
                $finalMoney = $bankAccount->getMoney() + $_POST["amount"];
                $bankAccount->setMoney($finalMoney);
                $accountManager->update($bankAccount); 
                redirectTo("single?id=" . $bankAccount->getId());
                }    
        }
    }

    //Retrait
    public function withdrawal($bankAccount, $accountManager)
    {
        if(!empty($_POST)) 
        {
            if($_POST["amount"] <= 1000)
            {
                $finalMoney = $bankAccount->getMoney() - $_POST["amount"];
                if($finalMoney >= -1000)
                {
                    $bankAccount->setMoney($finalMoney);
                    $accountManager->update($bankAccount); 
                    redirectTo("single?id=" . $bankAccount->getId());
                }
            }  
        }
    }

    //Virement
    public function transfer($amount, $getter, $sender)
    {
        if(isset($transfer))
        {

        }
    }
}
?>