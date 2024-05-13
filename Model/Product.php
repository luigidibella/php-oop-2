<?php 

require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/Position.php';

class Product{
  use Position;
  
  public $img;
  public $title;
  public $price;
  public $type;
  public $category;

  function __construct(string $_img, string $_title, float $_price, string $_type, Category $_category){
    if ($_title == ''){
      throw new Exception("Inserisci un titolo.");
    }
    $this->img = $_img;
    $this->title = $_title;
    $this->price = $_price;
    $this->type = $_type;
    $this->category = $_category;
  }
}