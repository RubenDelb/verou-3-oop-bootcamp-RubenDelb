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
    public bool $alcoholOrNot;
    public float $discount;

    function __construct(string $name, int $amount, float $price, bool $alcoholOrNot, float $discount = 1)
    {
        $this->name = ucfirst($name);
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
            return round($this->getPrice() * 0.21, 2);
        } else {
            return round($this->getPrice() * 0.06, 2);
        }
    }
}

$banana = new Product('banana', 6, 1, false, 0.5);
$apple = new Product('apple', 3, 1.5, false, 0.5);
$wine = new Product('wine', 2, 10, true);

$basket = [$banana, $apple, $wine];

function checkDiscount($product)
{
    if ($product->discount != 1) {
        echo " <b>BUT you're lucky!<i></b> {$product->name} has a " . ($product->discount * 100) . "% discount today!</i> <br>";
    }
}

echo "<b><u>Your Basket: </u></b><br>";
foreach ($basket as $basketItem) {
    echo "<i>{$basketItem->amount}x {$basketItem->name} at €{$basketItem->price}/pc </i>";
    checkDiscount($basketItem);
}
echo "<br>";

echo "<br> Total price: €" . ($banana->getPrice() + $apple->getPrice() + $wine->getPrice()) . "<br>";
echo "The total paid taxes on all your products is: €" . ($banana->getTax() + $apple->getTax() + $wine->getTax()) . "<br>";
