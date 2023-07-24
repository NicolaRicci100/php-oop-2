<?php
class Product
{
  public $id;
  public $animal;
  public $type;

  public function __construct(int $id, string $animal, string $type)
  {
    $this->id = $id;
    $this->animal = $animal;
    $this->type = $type;
  }
}
