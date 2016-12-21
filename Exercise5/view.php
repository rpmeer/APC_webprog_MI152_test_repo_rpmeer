<?php
require("db.php");
$id =$_REQUEST['id'];

$result = mysql_query("SELECT * FROM example WHERE id  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$fname=$test['fname'] ;
				$lname= $test['lname'] ;					
				$email=$test['email'] ;
				$contact=$test['contact'] ;

if(isset($_POST['save']))
{	
	$fname_save = $_POST['fname'];
	$lname_save = $_POST['lname'];
	$email_save = $_POST['email'];
	$contact_save = $_POST['contact'];

	mysql_query("UPDATE example SET fname ='$fname_save', lname ='$lname_save',
		email='$email_save',contact ='$contact_save' WHERE id = '$id'")
				or die(mysql_error()); 
	echo "Saved!";
	
	header("Location: index.php");			
}
mysql_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
<title>phptaab.blogspot.in</title>
</head>

<body>
<form method="post">
<table>
	<tr>
		<td>First Name:</td>
		<td><input type="text" name="fname" class="form-control"/></td>
	</tr>
	<tr>
		<td>Last Name</td>
		<td><input type="text" name="lname" class="form-control"/></td>
	</tr>
	<tr>
		<td>E-mail</td>
		<td><input type="text" name="email" class="form-control"/></td>
	</tr>
	<tr>
		<td>Contact Number</td>
		<td><input type="text" name="contact" class="form-control"/></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="add" class="btn btn-success btn-lg"/></td>
	</tr>
</table>

</body>
</html>
 