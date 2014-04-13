<?php
	include('../functions.php');
	include('sfunctions.php');
	if(!isset($_SESSION['id'])){
	header('Location: ../index.php' );
}
if(isAdmin($_SESSION['id'])==0){
	header('Location: ../index.php' );
}
if(isset($_POST['name'])){
	addEvent($_POST['name'],$_POST['date'],$_POST['scope']);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/bootstrap.css" rel="stylesheet">
<title>ADD Event</title>
<style type="text/css">
body{
	overflow:hidden;
}
.addtask{
	margin:0 auto;
	overflow:hidden;
	text-align:center;
	padding: 20px;
}
</style>
</head>
<body>
<div class="addtask">
	<form action="addevent.php" method="post">
		<input type="text" name="name" placeholder="Event Name" required /><br />
		<input type="date" name="date" placeholder="Date" required /><br />
        <select name="scope">
        <option value="1">All</option>
        <option value="2">Leadership Body</option>
        </select><br />
		<button type="submit" name="submit" class="btn btn-primary" >Submit</button>
	</form>
</div>
</body>
</html>