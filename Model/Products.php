<?php 

class Products{
  public $img;
  public $title;
  public $price;
  public $icon;
  public $type;

  function __construct($_img, $_title, $_price, $_icon, $_type){
    $this->img = $_img;
    $this->title = $_title;
    $this->price = $_price;
    $this->icon = $_icon;
    $this->type = $_type;
  }
}