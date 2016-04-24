<?php include "connection.php"; ?>


<?php
mysql_query ("SET NAMES utf8");

$name=$_POST[name];
$description_short=$_POST[description_short];
$description_long=$_POST[description_long];
$category=$_POST[category];
$price=$_POST[price];
$image=$_POST[image];



$ievieto = mysql_query("INSERT INTO products (name, category, description_short, description_long, price, image)
	VALUES('$name', '$category', '$description_short', '$description_long', '$price', '$image') ");

if( $ievieto > "0") 

{
echo "<p>Produkts veiksmīgi pievienots!</p>";

} else {
	echo "<p>Produktu neizdevās pievienot</p>";

}

?>
