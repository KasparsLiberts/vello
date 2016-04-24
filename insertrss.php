<?php include "connection.php"; include"updateXML.php"; ?>


<?php

mysql_query ("SET NAMES utf8");

$title=$_POST[title];
$link=$_POST[link];
$description=$_POST[description];
$content=$_POST[content];

$ievieto = mysql_query("INSERT INTO rss (title, link, description, content) 
	VALUES('$title', '$link', '$description', '$content') ");

if( $ievieto > "0") 

{
echo "<p>RSS ziņa veiksmīgi pievienota!</p>";

} else {
	echo "<p>Ziņu neizdevās pievienot</p>";

}

updateXML();
?>







