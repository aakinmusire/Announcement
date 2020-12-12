<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Create an Announcement</title>
	<link href="styles.css" rel="stylesheet">


	
</head>
<body background="download.jpg">
<div class="container">
<nav>
   <ul>
   	<li><a href="announcement.php">View Announcements</a></li>
   	<li><a href="new.php">Create Announcement</a></li>
   </ul>
</nav>

<form action="insert.php" method="POST">
	Title : <input type="text" name="title" required >
	<br>
	<!--Body : <input type="text" name="body" >-->
	<br>
	Announcement: <textarea required name="body"></textarea >
	<br>
	<button type="submit" name="submit">Submit</button>
</form>


</div>
</body>
</html>