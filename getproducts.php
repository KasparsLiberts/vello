<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>
    <style type="text/css"> </style>
    <link rel="stylesheet" type="text/css" href="vello2.css" />
</head>

<body>

  <table width="100%">
    <tr>
      <th>Nosaukums</th>
      <th>Apraksts</th>
      <th>Kategorija</th>
      <th>Cena</th>
      <th>Attēls</th>
      <th>Vairāk par preci</th>
    </tr>

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
  $sql = 'SELECT * FROM products';
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


    echo "<table id='products'>";
    echo "<tr>";
    echo "<td>" . $record['name'] . "</td>";
    echo "<td>" . $record['description_short'] . "</td>";
    echo "<td>" . $record['category'] . "</td>";
    echo "<td>" . $record['price'] . "</td>";
    echo "<td><img height='75px' src='../../../2010/photo/" . $record["image"] . "' /></td>";
    echo "<a href='productinfo.php?id=" . $record["id"] . "'>Details...</a>";
    echo "</tr>";
    echo "</table>";
   
  }

?>
</body>
</html>
