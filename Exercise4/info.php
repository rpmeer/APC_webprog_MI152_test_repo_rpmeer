<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css" />

</head>
<body id="main">

<!--nav-->
<div id="mySidenav" class="sidenav">
  <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
  
  <a href="HomePage.html" style="position: absolute; top: 120px; left: 50px;"><img src="house.png" style="height: 40px; width: 40px; position: absolute; top: -40px; left: 15px;">Home</a>
  <a href="About.html" style="position: absolute; top: 250px; left: 50px;"><img src="me.png" style="height: 40px; width: 40px; position: absolute; top: -40px; left: 15px;">About</a>
  <a href="information.php" style="position: absolute; top: 380px; left: 25px;"><img src="info.png" style="height: 40px; width: 40px; position: absolute; top: -40px; left: 40px;">Information</a>
</div>

<!--first layer-->
<div style = "background-color: #F2E9E1; width: 1365px; height: 612px; margin: 0px; position: absolute; top: 0px; left: 0px;">
  <div id="main">
     <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
  </div>

    <?php
    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $nicknameErr = $cellnoErr = "";
    $name = $email = $gender = $comment = $address = $cellno = $nickname = "";

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
      if (empty($_GET["name"])) {
        $nameErr = "Name is required";
      } else {
        $name = test_input($_GET["name"]);
      }
      
      if (empty($_GET["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_GET["email"]);
      }

      if (empty($_GET["cellno"])) {
        $cellnoErr = "Cellphone Number is required";
      } else {
        $cellno = test_input($_GET["cellno"]);
      }
      

      if (empty($_GET["nickname"])) {
        $nicknameErr = "Nickname is required";
      } else {
        $nickname = test_input($_GET["nickname"]);
      }

              
      if (empty($_GET["address"])) {
        $address = "";
      } else {
        $address = test_input($_GET["address"]);
      }

      if (empty($_GET["comment"])) {
        $comment = "";
      } else {
        $comment = test_input($_GET["comment"]);
      }

      if (empty($_GET["gender"])) {
        $genderErr = "Gender is required";
      } else {
        $gender = test_input($_GET["gender"]);
      }
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>


    <form method="GET" style="position: absolute; top: 10px; left: 300px;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

      <p style="font-size: 30px;"><b>Personal Information</b></p>
      
      Name: <input type="text" name="name">
      <span class="error">* <?php echo $nameErr;?></span>
      <br><br>
      Nickname: <input type="text" name="nickname">
      <span class="error">* <?php echo $nicknameErr;?></span>
      <br><br>
      E-mail:
      <input type="text" name="email">
      <span class="error">* <?php echo $emailErr;?></span>
      <br><br>
      Home Address:
      <input type="text" name="address">
      <br><br>
      Gender:
      <input type="radio" name="gender" value="female">Female
      <input type="radio" name="gender" value="male">Male
      <span class="error">* <?php echo $genderErr;?></span>
      <br><br>
      Cellphone Number: <input type="text" name="cellno">
      <span class="error">* <?php echo $cellnoErr;?></span>
      <br><br>
      Comment: <textarea name="comment" rows="5" cols="40"></textarea>
      <br><br>
      
      <input type="submit" name="submit" value="Submit">

    </form> 

    <div style="position: absolute;top: 50px; left: 900px;">

    <?php
    
    echo "<h4>Your Input:</h4>";
    echo $name;
    echo "<br>";
    echo $nickname;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $address;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $cellno;
    echo "<br>";
    echo $comment;
    echo "<br>";
   
    
    ?>

    </div>
</div>

 <!--second layer-->
<div style = "background-color: #1C140D; width: 1366px; height: 50px; position: absolute; top: 612px; left: 0px;">
            <div style="position: absolute; top: 10px; left:10px;color: white; font-size: 13px;"><i>Web Programming: Exercise 2</i></div>
            <div style="position: absolute; top: 30px; left:600px;color: white; font-size: 13px;"><i>Copyright 2016. Reinan Meer.</i></div>
</div>

        
<script>
  function openNav() {
      document.getElementById("mySidenav").style.width = "190px";
      document.getElementById("main").style.marginLeft = "190px";
  }

  function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
  }

  
</script>
     
</body>
</html> 