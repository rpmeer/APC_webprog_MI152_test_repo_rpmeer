<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysqli_query($link, $sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $complete_name = $_POST['complete_name'];
 $nickname = $_POST['nickname'];
 $email = $_POST['email'];
 $address = $_POST['address'];
 $gender = $_POST['gender'];
 $cellnumber = $_POST['cellnumber'];
 $comment = $_POST['comment'];
 // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE users SET complete_name='$complete_name',nickname='$nickname',email='$email',address='$address' ,gender='$gender',cellnumber='$cellnumber',comment='$comment' WHERE user_id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysqli_query($link, $sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Page</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body style="background-image: url(background.jpg);">
<center>

<div id="header">
 <div id="content">
    <label>Edit Now</label>
    </div>
</div>

<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="complete_name" placeholder="Complete Name" value="<?php echo $fetched_row['complete_name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nickname" placeholder="Nickname" value="<?php echo $fetched_row['nickname']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="email" placeholder="Email address" value="<?php echo $fetched_row['email']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="address" placeholder="Home address" value="<?php echo $fetched_row['address']; ?>" required /></td>
    </tr>
	<tr>
    <td>
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo $fetched_row['gender']; ?> value="Female">Female
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo $fetched_row['gender']; ?> value="Male">Male
	</td>
    </tr>
	<tr>
    <td><input type="text" name="cellnumber" placeholder="Cellphone Number" value="<?php echo $fetched_row['cellnumber']; ?>" required /></td>
    </tr>
	 <td>Comment: <br>
	 <textarea name="comment" rows="10" cols="144"><?php echo $fetched_row['comment']; ?></textarea>
	 </td>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>