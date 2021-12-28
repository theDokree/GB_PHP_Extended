<?php

class Product{
	
	public $id;
	public $title;
	public $price;
	public $count;
	
	
	function getInfo(){
		echo "Товар {$this->title} стоит {$this->price} руб. В наличии: {$this->count} шт.";
	}
}


$product = new Product;

$product->id = 0;
$product->title = "Лампочка";
$product->price = 50;
$product->count = 12;
$product->getInfo();

?>