<?php

require_once __DIR__ . '/Product.php';

class Kennel extends Product{

  public $size;
  public $material;

  function __construct(string $_img, string $_title, float $_price, string $_type, Category $_category, string $_size, string $_material){
  
    parent::__construct( $_img, $_title, $_price, $_type, $_category);
  
    $this->size = $_size;
    $this->material = $_material;

  }

}