<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product{

  public $age;
  public $material;

  function __construct(string $_img, string $_title, float $_price, string $_type, Category $_category, string $_age, string $_material){
  
    parent::__construct( $_img, $_title, $_price, $_type, $_category);
  
    $this->age = $_age;
    $this->material = $_material;

  }

}