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
	$sql = 'SELECT title, content, autodate FROM rss order by autodate DESC';
	$result = mysql_query($sql, $con);
	if(!$result)
	{
		echo "Query error";
		mysql_close($con);
		die();
	}

// Begin generate products.
  while($record = mysql_fetch_array($result))
  {


  	echo "<table>";

		echo "<tr>";
    	echo "<th>" . $record['title'] . "</th>";
    	echo "</tr>";

    	echo "<br>";

    	echo "<tr>";
    	echo "<td>" . $record['autodate'] . "</td>";
    	echo "</tr>";

    	echo "<br>";

    	echo "<tr>";
    	echo "<td>" . $record['content'] . "</td>";
    	echo "</tr>";




	echo "</table>";
   
  }

?>

</body>


