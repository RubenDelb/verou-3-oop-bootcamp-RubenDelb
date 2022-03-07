<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

function pre($input)
{
    echo "<pre>";
    var_dump($input);
    echo "</pre>";
}

class Product
{
    public string $name;
    public int $amount;
    public float $price;
    public bool $isAlcohol;

    function __construct(string $name, int $amount, float $price, bool $isAlcohol = false)
    {
        $this->name = $name;
        $this->amount = $amount;
        $this->price = $price;
        $this->isAlcohol = $isAlcohol;
    }

    public function getPrice()
    {
        return $this->amount * $this->price;
    }

    public function getTax()
    {
        if ($this->isAlcohol) {
            return $this->getPrice() * 0.21;
        } else {
            return $this->getPrice() * 0.06;
        }
    }
}

$basket = [
    'banana' => new Product('banana', 6, 1),
    'apple' => new Product('apple', 3, 1.5),
    'wine' => new Product('wine', 2, 10, true)
];

$totalPrice = 0;
$totalTax = 0;

foreach ($basket as $i => $product) {
    $totalPrice += $product->getPrice();
    $totalTax += $product->getTax();
}

echo "Total Price: €{$totalPrice} <br>";

echo "The total paid taxes on all your products is: €{$totalTax}";