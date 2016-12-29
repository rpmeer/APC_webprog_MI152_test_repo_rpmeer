<?php 
    $user_id                 = $user->user_id;
if($this->input->post('is_submitted'))
{
        $fullname           = set_value('fullname');
        $nickname           = set_value('nickname');
        $email       = set_value('email');
        $address           = set_value('address');
        $gender         = set_value('gender');
        $phoneNum         = set_value('phoneNum');
        $comment       = set_value('comment');
}else{

        $fullname           = $user->fullname;
        $nickname           = $user->nickname;
        $email           = $user->email;
        $address         = $user->address;
        $gender             = $user->gender;
        $phoneNum         = $user->phoneNum;
        $comment             = $user->comment;
}//end if   is_submitted
    
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: #F2E9E1; position: absolute; top: 40px; left: 550px;">
<h2>Personal Information</h2>
<?php echo validation_errors();?>
<?php echo form_open('Users/edit/'.$user_id); ?>
<!--Name-->
    <label for="fullname">Full Name</label>
    <input type="input" name="fullname" value="<?php echo $fullname; ?>" /><br />
<!--Nickname-->
    <label for="nickname">Nickname</label>
    <input type="input" name="nickname" value="<?php echo $nickname; ?>" /><br />
<!--email-->
    <label for="email">Email Address</label>
    <input type="input" name="email" value="<?php echo $email; ?>" /><br />
<!--add-->
    <label for="address">Address</label>
    <input type="input" name="address" value="<?php echo $address; ?>" /><br />
<!--gen-->
    <label for="gender">Gender</label>
    <select type="text" name="gender" value="<?php echo $gender; ?>">
    <option value="">Choose your gender</option>
    <option>Male</option>
    <option>Female</option>   
    </select>
    <br />
<!--contact-->
    <label for="phoneNum">Phone No.</label>
    <input type="input" name="phoneNum" value="<?php echo $phoneNum; ?>"/><br />
<!--comment-->
    <label for="comment">Comment</label>
    <input type="input" name="comment" value="<?php echo $comment; ?>"/><br />

    <input type="submit" name="submit" value="Update User" />

<?php echo form_close(); ?>
<br/>
<?php echo $this->session->flashdata('msg'); ?>
</form>
</body>
</html>