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
    public bool $alcoholOrNot;
    public float $discount;

    function __construct(string $name, int $amount, float $price, bool $alcoholOrNot, float $discount = 1)
    {
        $this->name = $name;
        $this->amount = $amount;
        $this->price = $price;
        $this->alcoholOrNot = $alcoholOrNot;
        $this->discount = $discount;
    }

    public function getPrice()
    {
        return $this->amount * $this->price * $this->discount;
    }

    public function getTax()
    {
        if ($this->alcoholOrNot) {
            return $this->getPrice() * 0.21;
        } else {
            return $this->getPrice() * 0.06;
        }
    }
}

$banana = new Product('banana', 6, 1, false, 0.5);
$apple = new Product('apple', 3, 1.5, false, 0.5);
$wine = new Product('wine', 2, 10, true);

echo "Total Price: €" . ($banana->getPrice() + $apple->getPrice() + $wine->getPrice()) . "<br>";

echo "The total paid taxes on all your products is: €" . ($banana->getTax() + $apple->getTax() + $wine->getTax());
