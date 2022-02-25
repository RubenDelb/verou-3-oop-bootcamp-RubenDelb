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

// Calculate how much of the total price is tax (fruit= 6%, wine= 21%)
function checkTax($product) {
    if ($product['alcohol'] == false) {
        return ($product['amount'] * $product['price']) * 0.06;
    } else {
        return ($product['amount'] * $product['price']) * 0.21;
    }
}

// Calculate the total price
$prices = [];
$taxes = [];
foreach ($products as $product) {   
    array_push($prices, $product['amount'] * $product['price']);
    array_push($taxes, checkTax($product));
}

echo "The total price of the products is: €" . array_sum($prices) 
    . "<br> The total paid taxes on the products is: €" . array_sum($taxes);
