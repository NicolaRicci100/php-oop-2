<?php
class Product
{
  public $id;
  public $animal;
  public $name;
  public $img;
  public $type;

  public function __construct(int $id, string $animal, string $name, $img, string $type)
  {
    $this->id = $id;
    $this->animal = $animal;
    $this->name = $name;
    $this->img = $img;
    $this->type = $type;
  }
}
