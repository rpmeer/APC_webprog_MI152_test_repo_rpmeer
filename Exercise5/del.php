<?php
  include("db.php");  

	$id =$_REQUEST['id'];
	
	
	// sending query
	mysql_query("DELETE FROM example WHERE id = '$id'")
	or die(mysql_error());  	
	
	header("Location: index.php");
?> 