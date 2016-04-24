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


	echo "RSS kanālu saraksts";
	echo "<br>";

// Write into file XML file header.
	echo("<?xml version='1.0' encoding='utf-8' ?>");
// Write root tag.
	echo("<products>\n");

// Begin generate products.
  while($record = mysql_fetch_array($result))
  {
	$url = $record ['link'];

  	echo "<table>";

		echo "<tr>";
    	echo "<th>" . $record['title'] . "</th>";
    	echo "</tr>";
    	echo "<br>";
    	echo "<tr>";
    	echo "<td>" . $record['description'] . "</td>";
    	echo "</tr>";
    	echo "<tr>";
    	echo "<td> <a href='" . $url . "'>" . "Apskatīt pilnu ziņu" . "</a> </td>"; 
    	echo "</tr>";

	echo "</table>";
   
  }



?>

</body>


