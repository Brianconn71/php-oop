<?php

class Product
{
// Best practice is to put the curly bracket opening on a new line

    //  creating a public property of product class
    public $name = 'soap';

}

// Make a new assignment
$product = new Product();

$differentProduct = new Product();

// var_dump lets us inspect a variable
var_dump($product);
var_dump($differentProduct);