<?php include "connection.php"; ?>


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


$result=mysql_query("select * from rss order by ID DESC");

header('Content-Type: text/xml; charset=utf-8', true);

$xml=new DOMDocument ("1.0", "UTF-8");


$xml->formatOutput=true;
$chanel=$xml->createElement("chanel");
$xml -> appendChild($chanel);

    while($row = mysql_fetch_assoc($result)){

 	$item=$xml->createElement("item");
 	$chanel->appendChild($item);

 	$title=$xml->createElement("title", $row['title']);
 	$item->appendChild($title);

 	$link=$xml->createElement("link", $row['link']);
 	$item->appendChild($link);

 	$description=$xml->createElement("description", $row['description']);
 	$item->appendChild($description);

 	$content=$xml->createElement("content", $row['content']);
 	$item->appendChild($content);


 }


$xml->save("rss.xml");



?>







