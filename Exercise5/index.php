<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>

</head>

<body id="main">
	<div id="mySidenav" class="sidenav">
	  <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
	  
	  <a href="HomePage.html" style="position: absolute; top: 120px; left: 50px;"><img src="house.png" style="height: 40px; width: 40px; position: absolute; top: -40px; left: 15px;">Home</a>
	  <a href="About.html" style="position: absolute; top: 250px; left: 50px;"><img src="me.png" style="height: 40px; width: 40px; position: absolute; top: -40px; left: 15px;">About</a>
	  <a href="info.php" style="position: absolute; top: 380px; left: 25px;"><img src="info.png" style="height: 40px; width: 40px; position: absolute; top: -40px; left: 40px;">Information</a>
	  <a href="index.php" style="position: absolute; top: 500px; left: 50px;"><img src="create.png" style="height: 40px; width: 40px; position: absolute; top: -40px; left: 10px;">Create</a>
	</div>

	<div style = "background-color: #F2E9E1; width: 1365px; height: 612px; margin: 0px; position: absolute; top: 0px; left: 0px;">
  <div id="main">
     <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
  </div>

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
	</div>

	<div style = "background-color: #1C140D; width: 1366px; height: 50px; position: absolute; top: 612px; left: 0px;">
            <div style="position: absolute; top: 10px; left:10px;color: white; font-size: 13px;"><i>Web Programming: Exercise 2</i></div>
            <div style="position: absolute; top: 30px; left:600px;color: white; font-size: 13px;"><i>Copyright 2016. Reinan Meer.</i>
    </div>
</div>
</body>
</html>
