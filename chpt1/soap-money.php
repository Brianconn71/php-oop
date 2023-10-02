<?php

class Product
{
// Best practice is to put the curly bracket opening on a new line

    //  creating a public property of product class
    public $name = 'soap';
    public $price; # this is in cents

    # function to turn price from cents into currency
    public function priceAsCurrency()
    {
        # $this is a pseudo-variable, uses whichever price you are using at the time.
        $priceAsCurrency = $this->price / 100 ;

        return $priceAsCurrency;
    }

}

// Make a new assignment
$soapProduct = new Product();

// access class property using object operator
$soapProduct->price = 550;

$priceAsCurrency = $soapProduct->priceAsCurrency();

#PHP_EOL is a constant which means a new line.
#VAR_DUMP basically gives value of the variable.
var_dump($priceAsCurrency) . PHP_EOL;

$soapProduct2 = new Product();

// access class property using object operator
$soapProduct2->price = 850;

$priceAsCurrency = $soapProduct2->priceAsCurrency();

#PHP_EOL is a constant which means a new line.
#VAR_DUMP basically gives value of the variable.
var_dump($priceAsCurrency) . PHP_EOL;
