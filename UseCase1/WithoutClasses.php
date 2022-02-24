<?php

function pre($input)
{
    echo "<pre>";
    var_dump($input);
    echo "</pre>";
}

// Create an array for the items in the basket
$products = [
    ['name' => 'banana', 'amount' => 6, 'price' => 1, 'alcohol' => false],
    ['name' => 'apple', 'amount' => 3, 'price' => 1.5, 'alcohol' => false],
    ['name' => 'wine bottle', 'amount' => 2, 'price' => 10, 'alcohol' => true]
];

// TODO: Calculate the total price
$prices = [];
$taxes = [];
foreach ($products as $product) {
    array_push($prices, $product['amount'] * $product['price']);
    if ($product['alcohol'] == false) {
        array_push($taxes, ($product['amount'] * $product['price']) * 0.06);
    } else {
        array_push($taxes, ($product['amount'] * $product['price']) * 0.21);
    }
}
pre($prices);
pre($taxes);
echo "The total price of the products is: €" . array_sum($prices);
echo "<br>";
// TODO: Calculate how much of the total price is tax (fruit= 6%, wine= 21%)
echo "The total paid taxes on the products is: €" . array_sum($taxes);
