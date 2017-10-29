<?php
$hostname="martenobrien.db.11006648.hostedresource.com"; //local server name default localhost
$username="martenobrien";  //mysql username default is root.
$password="Youngn@1987";       //blank if no password is set for mysql.
$database="martenobrien";  //database name which you created
$con=mysql_connect($hostname,$username,$password);
if(! $con)
{
die('Connection Failed'.mysql_error());
}

mysql_select_db($database,$con);
?>