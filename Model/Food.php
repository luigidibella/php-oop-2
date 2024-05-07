<?php

require_once __DIR__ . '/Product.php';

class Food extends Product{

  public $weight;
  public $ingredients;

  function __construct(string $_img, string $_title, float $_price, string $_type, Category $_category, int $_weight, array $_ingredients){
  
    parent::__construct( $_img, $_title, $_price, $_type, $_category);
  
    $this->weight = $_weight;
    $this->ingredients = $_ingredients;

  }

}