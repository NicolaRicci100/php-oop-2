<?php

class Animal
{
  public $id;
  public $type;

  public function __construct(int $id, string $type)
  {
    $this->id = $id;
    $this->type = $type;
  }
}
