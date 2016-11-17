<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Database // CodeIgniter</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">

<script type="text/javascript">
function show_confirm(act,gotoid)
{
if(act=="Users_edit")
var r=confirm("Do you really want to edit?");
else
var r=confirm("Do you really want to delete?");
if (r==true)
{
window.location="<?php echo base_url();?>index.php/users/"+act+"/"+gotoid;
}
}
</script>

</head>

<body style="background-image: url(http://localhost/codeigniter/pics/background.jpg);">
<div id="goto" style="margin-top: 50px;text-align: center;">
<h2><a href="<?php echo base_url();?>index.php" >Go to Main Page</a></h2>
</div>
<div id="body" style="margin-left: 160px;">
	<div id="content">
		<table align="center">
			<tr>
				<td colspan="9" align="center"> <a href="<?php echo base_url();?>index.php/users/add_form">Add user here.</a></td>
			</tr>
			<tr>
				<th>Complete Name</th>
				<th>Nickname</th>
				<th>Email Address</th>
				<th>Home Address</th>
				<th>Gender</th>
				<th>Cellphone Number</th>
				<th>Comment</th>
				<th colspan="2">Operations</th>
			</tr>
			
		<?php foreach ($user_list as $u_key){ ?>

			<tr>

				<td><?php echo $u_key->complete_name; ?></td>

				<td><?php echo $u_key->nickname; ?></td>

				<td><?php echo $u_key->Email_Address; ?></td>

				<td><?php echo $u_key->Home_Address; ?></td>
				
				<td><?php echo $u_key->gender; ?></td>
				
				<td><?php echo $u_key->cellphone; ?></td>
				
				<td><?php echo $u_key->comment; ?></td>

				<td width="40" align="left" ><a href="#" onClick="show_confirm('Users_edit',<?php echo $u_key->user_id;?>)">EDIT</a></td>

				<td width="40" align="left" ><a href="#" onClick="show_confirm('delete',<?php echo $u_key->user_id;?>)">DELETE</a></td>

			</tr>

<?php }?>
			
			
		</table>
	</div>
</div>

</body>

</html>	