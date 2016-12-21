<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
<?php
if (isset($_POST['submit']))
	{	   
	include 'db.php';
	
			 		$fname=$_POST['fname'] ;
					$lname= $_POST['lname'] ;					
					$email=$_POST['email'] ;
					$contact=$_POST['contact'] ;
												
		 mysql_query("INSERT INTO `example`(fname,lname,email,contact) 
		 VALUES ('$fname','$lname','$email','$contact')"); 
				
				
	        }
?>
</form>
<table border="1">
	
			<?php
			include("db.php");
			
				
			$result=mysql_query("SELECT * FROM example");
			
			while($test = mysql_fetch_array($result))
			{
				$id = $test['id'];	
				echo "<tr align='center'>";	
				echo"<td><font color='black'>" .$test['id']."</font></td>";
				echo"<td><font color='black'>" .$test['fname']."</font></td>";
				echo"<td><font color='black'>". $test['lname']. "</font></td>";
				echo"<td><font color='black'>". $test['email']. "</font></td>";
				echo"<td><font color='black'>". $test['contact']. "</font></td>";	
				echo"<td> <a href ='view.php?id=$id'>Edit</a>";
				echo"<td> <a href ='del.php?id=$id'><center>Delete</center></a>";
									
				echo "</tr>";
			}
			mysql_close($conn);
			?>
</table>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
