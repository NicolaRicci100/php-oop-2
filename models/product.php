<?php
include_once __DIR__ . '/Animal.php';
class Product
{
  public $id;
  public $animals;
  public $name;
  public $img;

  public function __construct(int $id, string $animals, string $name, $img)
  {
    $this->id = $id;
    $this->animals = $animals;
    $this->name = $name;
    $this->img = $img;
  }

  public function addAnimal(Animal $animal)
  {
    if ($animal instanceof Animal) {
      $this->animals[] = $animal;
    }
  }
  public function getAnimals()
  {
    return $this->animals;
  }
}
