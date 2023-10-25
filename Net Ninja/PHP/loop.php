<?php
$products = [
    
    ['name' => 'A', 'price' => 23444],
    ['name' => 'B', 'price' => 483763],
    ['name' => 'C', 'price' => 636363],

];

// foreach($products as $product){
//     echo $product['name'].' - '. $product['price'];
//     echo "<br />";
// }



// $i = 0;
// while($i < count($products)){
//     echo $products[$i]['name'];
//     echo "<br  />"; 
//     $i++;
// };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    <h1>Products</h1>
    <ul>
        <?php foreach ($products as $product) { ?>
            <h3><?php echo $product['name'] ?></h3>
            <p><?php echo $product['price'] ?></p>
        <?php } ?>
    </ul>
</body>
</html>


