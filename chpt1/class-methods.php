<?php

class Product
{
// Best practice is to put the curly bracket opening on a new line

    //  creating a public property of product class
    public $name = 'soap';
    public $price = 200; # this is in cents

    # function to turn price from cents into currency
    # $currencySymbol = '$' default value
    public function priceAsCurrency($divisor = 100, $currencySymbol = '$')
    {
        # $this is a pseudo-variable, uses whichever price you are using at the time.
        $priceAsCurrency = $this->price / $divisor;

        return $currencySymbol . $priceAsCurrency;
    }

}

$product = new Product();
print $product->priceAsCurrency(500, '€') . PHP_EOL;

$product2 = new Product();
# named arguments to specify a change in the currency symbol but not in the divisor
# named arguments needs php 8 or higher
print $product2->priceAsCurrency(currencySymbol: '£') . PHP_EOL;
