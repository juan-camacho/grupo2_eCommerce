<?php
class Usuario
{	private $id;
  private $first_name;
  private $last_name;


  public function __construct($first_name, $last_name)
  {
    $this->first_name = $first_name;
    $this->last_name = $last_name;

  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }
  public function setFirst_Name($first_name)
  {
    $this->first_name = $first_name;
  }

  public function getFirst_Name()
  {
    return $this->first_name;
  }

  public function setLast_Name($last_name)
  {
    $this->last_name = $last_name;
  }

  public function getLast_Name()
  {
    return $this->last_name;
  }
}
   ?>
