<?php

function formatProduct($product){
    return "<b>{$product['name']}</b> costs is <b>{$product['price']}</b> to buy <br />";
};

$formatted = formatProduct([
    'name' => 'Apple',
    'price' => 200,
]);
echo $formatted;

?>