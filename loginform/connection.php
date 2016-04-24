<?php

session_start();

$db_host = "localhost";
$db_username = "root";
$db_pass = "root";
$db_name = "vello_db";



@mysql_connect("$db_host", "$db_username", "$db_pass") or die ("Nevar pieslegties");

@mysql_select_db ("$db_name") or die ("No database");


?>
