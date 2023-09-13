<?php

class Product
{
// Best practice is to put the curly bracket opening on a new line

    //  creating a public property of product class
    public $name = 'soap';

}

// Make a new assignment
$soapProduct = new Product();

// access class property using object operator
print $soapProduct->name . "\n";
$soapProduct->name = 'Not Soap';
print $soapProduct->name . "\n";
