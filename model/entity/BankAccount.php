<?php
class BankAccount extends entity
{
    protected $name;
    protected $money;

    const MINSUM = 50;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setMoney(int $money)
    {
        $this->money = $money;
    }

    public function getMoney()
    {
        return $this->money;
    }

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function viewMoney() 
    {
      if ($this->getMoney() >= 0) 
      {
        echo '<td>' . $this->getMoney() . '</td>';
      }
      else {
        echo '<td class="warningMoney">' . $this->getMoney() . ' <i class="fas fa-exclamation-triangle"></i> </td>';
      }
    }
}
?>
