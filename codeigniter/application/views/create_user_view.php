<!DOCTYPE html>
<html>
<head>
	<title>Marc Nares</title>
</head>
<body>
<h2>Personal Information</h2>
<?php echo validation_errors();?>
<?php echo form_open('Users/index'); ?>
    <label for="fullname">Full Name</label>
    <input type="input" name="fullname" /><br />

    <label for="nickname">Nickname</label>
    <input type="input" name="nickname" /><br />

    <label for="email">Email Address</label>
    <input type="input" name="email" /><br />

    <label for="address">Address</label>
    <input type="input" name="address" /><br />

    <label for="gender">Gender</label>
    <select type="text" name="gender" value="<?php echo set_value('gender'); ?>">
    <option value="">Choose your gender</option>
    <option>Male</option>
    <option>Female</option>   
    </select>
    <br />

    <label for="phoneNum">Phone No.</label>
    <input type="input" name="phoneNum" /><br />

    <label for="comment">Comment</label>
    <input type="input" name="comment" /><br />

    <input type="submit" name="submit" value="Create User" />
<?php echo form_close(); ?>
<br/>
<?php echo $this->session->flashdata('msg'); ?>
</form>
</body>
</html>