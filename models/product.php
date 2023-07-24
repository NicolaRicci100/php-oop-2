<?php
class Product
{
  public $id;
  public $animal;
  public $type;
  public $img;

  public function __construct(int $id, string $animal, string $type, $img)
  {
    $this->id = $id;
    $this->animal = $animal;
    $this->type = $type;
    $this->img = $img;
  }
}
