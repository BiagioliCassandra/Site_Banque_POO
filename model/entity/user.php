<?php

/**
 *
 */
class user extends entity
{
  // protected $status;
  protected $name;
  protected $password;

  // public function setStatus($status) {
  //   $this->status = $status;
  // }
  // 
  // public function getStatus() {
  //   return $this->status;
  // }

  public function setName(string $name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setPassword(string $password)
  {
    $this->password = $password;
  }

  public function getPassword()
  {
    return $this->password;
  }

  function __construct(array $data)
  {
    $this->hydrate($data);
  }
}

 ?>
