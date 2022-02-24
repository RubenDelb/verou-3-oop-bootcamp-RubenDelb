<?php

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

$banana = new Product('banana', 6, 1);
$apple = new Product('apple', 3, 1.5);
$wine = new Product('wine', 2, 10, true);

echo "Total Price: €" . ($banana->getPrice() + $apple->getPrice() + $wine->getPrice()) . "<br>";

echo "The total paid taxes on all your products is: €" . ($banana->getTax() + $apple->getTax() + $wine->getTax());