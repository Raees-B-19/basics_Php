<?php
$num = 20;

if ($num < 12) {
    echo 'U less than 12';
} else if ($num = $num) {
    echo 'U the same number';
} else {
    echo 'U not less than 12';
}


$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

// foreach($products as $product){

// 	// if($product['price'] < 15 && $product['price'] > 2){
// 	// 	echo $product['name'] . '<br />';
// 	// }

// 	// if($product['price'] > 20 || $product['price'] < 10){
// 	// 	echo $product['name'] . '<br />';
// 	// }

// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php conditions</title>
</head>

<body>
    <div>
        <ul>
            <?php foreach ($products as $product) { ?>
                <?php if ($product['price'] > 15) { ?>
                    <li><?php echo $product['name'] ?></li>
                <?php } ?>
            <?php } ?>
        </ul>
    </div>
</body>

</html>