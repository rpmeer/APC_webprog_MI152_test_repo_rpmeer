<html>

<head>

<title> My Home Page </title>

<link rel="stylesheet" type="text/css" href="Css.css">

<h1>HTML //CSS //JAVA //PHP //<a href="index.php">SQL</a></h1>
<style>
#form {
	font-size: 18px;
	font-weight: bold;
}

.error {
	color: red;
}
</style>
</head>
<hr>
<body>
<table border="0">
  <tr>
    <th>Name</th>
    <th></th>
    <th></th>
    <th></th>
    <td>Reinan Pabustan Meer</td>
    <th></th>
    <th></th>
    <th></th>
   </tr>
   <tr>
   </tr>
   <tr>
   </tr>
   <tr>
    <th>Nickname</th>
    <th></th>
    <th></th>
    <th></th>
    <td>Reinan</td>
    <th></th>
    <th></th>
    <th></th>
   </tr>
   
   <tr>
   </tr>
   <tr>
   </tr>
   
   <tr>
    <th>Hobbies</th>
    <th></th>
    <th></th>
    <th></th>
    <td>Cooking<br>
    <img src="cook.jpg" style="width:400px;height:300px;"> <br>
    </td>
    <th></th>
    <th></th>
    <th></th>
    <td>Traveling <br>
    <img src="travel.jpg" style="width:400px;height:300px;"> <br>
    </td>
    <th></th>
    <th></th>
    <th></th>
   </tr>
   
   <tr>
   </tr>
   <tr>
   </tr>
   
   <tr>
    <th>Interest</th>
    <th></th>
    <th></th>
    <th></th>
    <td>Discover<br>
    <img src="discover.jpg" style="width:400px;height:300px;"> <br>
    </td>
    <th></th>
    <th></th>
    <th></th>
    <td>Learn<br>
    <img src="learn.jpg" style="width:400px;height:300px;"> <br>
    </td>
    <th></th>
    <th></th>
    <th></th>
   </tr>
   <tr>
   </tr>
   <tr>
   </tr>
   <tr>
    <th>Favorite Websites</th>
    <th></th>
    <th></th>
    <th></th>
    <td><a href="http://www.youtube.com"><img src="youtube.png" width="42" height="42">
    Youtube.com</a></td>
    <th></th>
    <th></th>
    <th></th>
    <td><a href="http://www.facebook.com"><img src="facebook.png" width="42" height="42">
    Facebook.com</font></td>
    <th></th>
    <th></th>
    <th></th>
    <td><a href="http://www.stackoverflow.com"><img src="sflow.png" width="42" height="42">
    Stackoverflow.com</a></td>
    <th></th>
    <th></th>
    <th></th>
   </tr>
   <tr>
   </tr>   
</table>

<h3>What is my favorite study place?</h3>	
<p id="t1" style="display:none">
<br> I'd love visiting different coffee shops and have a sip of their mouthwatering coffee
</p>
<button type="button" onclick="document.getElementById('t1').style.display='block'">CLICK THIS!</button>

<h3>What is my favorite italian dish?</h3>	
<p id="t2" style="display:none">
<br> Puttanesca and pesto 
</p>
<button type="button" onclick="document.getElementById('t2').style.display='block'">CLICK THIS!</button>

<h3>What books I'm interested at?</h3>	
<p id="t3" style="display:none">
<br> Any adventure and scifi novels are the best
</p>
<button type="button" onclick="document.getElementById('t3').style.display='block'">CLICK THIS!</button>

<h3>What hobbies I'm usually do during my free time</h3>	
<p id="t4" style="display:none">
<br> Appreciating architectural designs in different places esp in restaurants and visiting the church
</p>
<button type="button" onclick="document.getElementById('t4').style.display='block'">CLICK THIS!</button>

<h3>What is my favorite sports?</h3>
<p id="t5" style="display:none">
<br> I love playing golf
<button type="button" onclick="document.getElementById('t5').style.display='block'">CLICK THIS!</button>

<div id="form">
<?php	
// define variables and set to empty values
$full_nameErr = $emailErr = $genderErr = $nicknameErr = "";
$full_name = $email = $gender = $comment = $nickname = $home_address = $cellphone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["full_name"])) {
    $full_nameErr = "Full Name is required";
  } else {
    $full_name = test_input($_POST["full_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["home_address"])) {
    $home_address = "";
  } else {
    $home_address = test_input($_POST["home_address"]);
  }
  
  if (empty($_POST["cellphone"])){
	  $cellphone = "";
  } else {
	  $cellphone = test_input($_POST["cellphone"]);
  }
  
  if (empty($_POST["nickname"])) {
	  $nicknameErr = "Nickname is required";
  } else {
	  $nickname = test_input($_POST["nickname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nickErr = "Only letters and white space allowed"; 
    }
  }
  
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
  

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Fill Up the form</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Complete Name: <input type="text" name="full_name" value="<?php echo $full_name;?>">
  <span class="error">* <?php echo $full_nameErr;?></span>
  <br><br>
  Nickname: <input type="text" name="nickname" value="<?php echo $nickname;?>">
  <span class="error">* <?php echo $nicknameErr;?></span>
  <br><br>
  Email Address: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error"><?php echo $emailErr;?></span>
  <br><br>
  Home Address: <input type="text" name="home_address" value="<?php echo $home_address;?>">
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Cellphone Number: <input type="number" name="cellphone" value="<?php echo $cellphone;?>">
  <br><br>
  Comment: <br><textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Results:</h2>";
echo $full_name;
echo "<br>";
echo $nickname;
echo "<br>";
echo $email;
echo "<br>";
echo $home_address;
echo "<br>";
echo $gender;
echo "<br>";
echo $cellphone;
echo "<br>";
echo $comment;
echo "<br>";

?>
</div>
</body>

</html>
