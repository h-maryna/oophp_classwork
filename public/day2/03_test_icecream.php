<?php

require __DIR__ . '/../../config.php';

use classes\Foods\Icecream;

$vanilla = new Icecream('Vanilla');
$choc = new Icecream('Chocolate');
$caramel = new Icecream('Caramel');
$blue_liq = new Icecream('Blue Liqorice');
$mint_cc = new Icecream('Mint_cc');

/*
use classes\Foods\Icecream as ice;

$vanilla = new ice('Vanilla');
$choc = new ice('Chocolate');
$caramel = new ice('Caramel');
$blue_liq = new ice('Blue Liqorice');
$mint_cc = new ice('Mint_cc');
 */

echo '<pre>';
var_dump($vanilla->getFlavor());
var_dump($choc->getFlavor());
var_dump($caramel->getFlavor());
var_dump($blue_liq->getFlavor());
var_dump($mint_cc->getFlavor());
echo '</pre>';

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<title></title>
</head>
<body>

<h1></h1>



</body>
</html>