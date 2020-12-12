<?php
$host = "localhost:3306";
$user = "root";
$passw = "";
$db = "announcement.db";
 $connection = mysqli_connect($host,$user,$passw,$db);
// if (!$connection)
// {
 //	echo "not connected"
 //}
 //if(!mysqli_select_db($connection, "announcement.db"))
 //{
 //	echo "Database not selected"
 //}

$Title = $_POST["title"];
$Body = $_POST["body"];
$fetchDataQuery = "INSERT INTO announcement (Title, Body) VALUES ('$Title', '$Body')";

if(!mysqli_query($connection, $fetchDataQuery))
{
	echo "not inserted";
}
else
  {
  	echo "inserted";
  }
  header("refresh:2; url=announcement.php");
?>