<?php

class Product
{
// Best practice is to put the curly bracket opening on a new line

    public $name;
    public $price;

    # constructors start with a double underscore
    # constructors do whatever should always be done and done first
    # when an object of this class is made
    public function __construct($name = 'Tom', $price = 987)
    {
        $this->name = $name;
        $this->price = $price;
    }

    # function to turn price from cents into currency
    # $currencySymbol = '$' default value
    public function priceAsCurrency($divisor = 100, $currencySymbol = '$')
    {
        # $this is a pseudo-variable, uses whichever price you are using at the time.
        $priceAsCurrency = $this->price / $divisor;

        return $currencySymbol . $priceAsCurrency;
    }

}

$product = new Product('Sopap', 100);
print $product->name . $product->price . PHP_EOL;

$product3 = new Product();
print $product3->name . $product3->price . PHP_EOL;

# named argument used below
$product2 = new Product(price: 700);
print $product2->name . $product2->price . PHP_EOL;
