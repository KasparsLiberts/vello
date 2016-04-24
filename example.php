<?php
// Set MIME type to application/xml
	header("Content-type: application/xml; charset=utf-8");
	mysql_query ("SET NAMES utf8");

// Create connection to database
//=====================================================================================
// Set Your connection parameters !
	$con = mysql_connect("localhost", "root", "root");
//=====================================================================================
	if(!$con)
	{
		echo "Connection error.";
		die();
	}
// Select database
//=====================================================================================
// Set Your database name !
	mysql_select_db("vello_db");
//=====================================================================================
// Create query.
	$sql = 'SELECT title, link, description FROM rss';
	$result = mysql_query($sql, $con);
	if(!$result)
	{
		echo "Query error";
		mysql_close($con);
		die();
	}
// Write into file XML file header.
	echo("<?xml version='1.0' encoding='utf-8' ?>");
// Write root tag.
	echo("<products>\n");
// Begin generate products.
  while($record = mysql_fetch_array($result))
  {
    echo("<rss>\n");
    echo("<title>" . $record["title"] . "</title>\n");
    echo("<description>" . $record["description"] . "</description>\n");
    echo("<link>" . $record["link"] . "</link>\n");
    echo("</rss>");  
  }
  echo("</rsszina>");
?>

</body>


