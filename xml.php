<?php
$xml=simplexml_load_file("test.xml") 
or die("Error: Cannot create object");

$xml = $xml->Cube[0]->Cube[0];

$max = count($xml);

for($i = 0; $i < 3; $i++){
    
$index = rand(0, $max);
echo $xml->Cube[$index]  ["currency"] .' '. $xml->Cube[$index]  ["rate"] . "<br />";

}

?> 