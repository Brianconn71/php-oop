<?php

class Product
{
// Best practice is to put the curly bracket opening on a new line

    //  creating a public property of product class
    public $name = 'soap';

    // initializing like such basically gives it a null value to start
    public $price; # price is in cents

}

// Make a new assignment
$priceProduct = new Product();

var_dump($priceProduct);
