<!doctype HTML>
<html>
<head>
<meta charset="UTF-8">
	<title> Announcement</title>
	<link href="styles.css" rel="stylesheet">

</head>
<body background="download.jpg">
<div class="container">
<h1> Announcement</h1>
	<nav>
   <ul>
   	
   	<li><a href="announcement.php">View Announcements</a></li>
   	<li><a href="new.php">Create Announcement</a></li>
   </ul>
</nav>
	

	<style>
		table {
			border-collapse: collapse;
			width: 100%;
			color: #588c7e;
			font-family: monospace;
			font-size: 25px;
			text-align: center;
		}
		th{
			background-color: #588c7e;
			color: white;
		}
		tr:nth-child(even) {background-color: #f2f2f2}
	</style>
<table>
	<tr>
		<th>Id</th>
		<th>Title</th>
		<th>Body</th>
	</tr>

<?php

$host = "localhost:3306";
$user = "root";
$passw = "";
$db = "announcement.db";

$connection = mysqli_connect($host,$user,$passw,$db);

if (!$connection){
	die("connection failed: ".mysqli_connect_error());
}
//$sql= "SELECT id, title, body from announcement";

$fetchDataQuery = "SELECT id, title, body from announcement";
$result = mysqli_query($connection, $fetchDataQuery);

if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)){
  	echo "<tr><td>". $row["id"] . "</td><td>". $row["title"]."</td><td>".$row["body"]. "</td></tr>";

  }
  echo "</table>";
}
else{
	echo "No record found <br>";
}
mysqli_close($connection);
?>
</table>
</div>
</body>
</html>