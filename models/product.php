<?php
class Product
{
  public $id;
  public $animal;
  public $name;
  public $img;

  public function __construct(int $id, string $animal, string $name, $img)
  {
    $this->id = $id;
    $this->animal = $animal;
    $this->name = $name;
    $this->img = $img;
  }
}
