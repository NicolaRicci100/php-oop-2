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

$products = [
  new Product(
    1,
    'Cani',
    'Croccantini',
    'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg',
    'cibo'
  ),
  new Product(
    2,
    'Gatti',
    'Scatoletta',
    'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg',
    'cibo'
  ),
  new Product(
    3,
    'Pesci',
    'Mangime',
    'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg',
    'cibo'
  ),
  new Product(
    4,
    'Uccelli',
    'Voliera',
    'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg',
    'casa'
  ),
  new Product(
    5,
    'Gatti',
    'Peluche',
    'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg',
    'giocattolo'
  ),
  new Product(
    6,
    'Pesci',
    'Filtri',
    'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg',
    'casa'
  )
];
