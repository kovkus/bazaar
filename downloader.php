<meta charset="utf-8">
<?php

$source = file_get_contents('http://restauracie.sme.sk/restauracia/bazaar-pizza-and-pub_240-kosice_2914/denne-menu');

$html = new DOMDocument();
@$html-> loadHtml($source);

$pr_xpath = new DOMXPath($html);
$pr_nodelist = $pr_xpath->query( "//div[@class='dnesne_menu']/div[@class='jedlo_polozka']/div[@class='left']" );
$products = array();

$i = 0;
foreach ($pr_nodelist as $n) {
    $products[$i] = $n->nodeValue;
    $i ++;
}
foreach($products as $key => $one) {
    if(strpos($one, 'DON') !== false)
        unset($products[$key]);
}


$ce_xpath = new DOMXPath($html);
$ce_nodelist = $ce_xpath->query( "//div[@class='dnesne_menu']/div[@class='jedlo_polozka']/span[@class='right']" );
$prices = array();

$i = 0;
foreach ($ce_nodelist as $n) {
    $prices[$i] = $n->nodeValue;
    $i ++;
}
foreach($prices as $key => $one) {
    if(strpos($one, 'DON') !== false)
        unset($prices[$key]);
}
$products = array_values($products);
$prices = array_values($prices);

foreach ($products as $key => $value) {
    if ($key >= "2" && $value == $products[0]) {
       echo "Donáška";
       echo "<br>";
    }
	echo $value;
	echo $prices[$key];
	echo "<br>";
}


?>