<html>
<?php

include "head.php";
include "navigation.php";

?>
<body>
<div class="container-fluid text-center">
    <div class="container">
            <div class="row">


     <form id ="upload" method="POST" action="" enctype="multipart/form-data">
       <div class="form-group">
         <label for="email">email address:</label>
         <input type="text" class="form-control" name="email">
       </div>
       <div class="form-group">
         <label for="username">Username:</label>
         <input type="text" class="form-control" name="username">
       </div>
      <div class="form-group">
        <label for="phone">phone number:</label>
        <input type="text" class="form-control" name="phone">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="text" class="form-control" name="password">
      </div>
      <button type="submit" name = "register" class="btn btn-default">Create Account</button>
      <p><a href="login.php">login</a></p>
    </form>
      </div>
    </div>
  </div>
  <?php
    require_once "initializedb.php";
    $errors = array();

    // form validation
    if (isset($_POST['submit'])){
      $email = mysql_real_escape_string($_POST[email]);
      $username = mysql_real_escape_string($_POST[username]);
      $phone = mysql_real_escape_string($_POST[phone]);
      $password = mysql_real_escape_string($_POST[password]);


      //empty fields
      if (empty($email)){
        array_push($errors, "email is required");
      }
      if (empty($username)){
        array_push($errors, "username is required");
      }
      if (empty($phone)){
        array_push($errors, "phone is required");
      }
      if (empty($password)){
        array_push($errors, "password is required");
      }

    if (count($errors) == 0){

      $pass = md5($password);
      $sql = "INSERT INTO login (email, username, phno, pass) VALUES($email,$username,$phone,$pass)";
      //mysql_query($sql);
      $result=mysql_query($sql);
      if($result==TRUE){
        echo "<div class = 'alert alert-success alert-dismissible' id = 'alert'>";
            echo "successfull";
        echo "</div>";
    }else {
      echo "<div class = 'alert alert-danger alert-dismissible' id = 'alert'>";
          echo "unsuccessfull!";
      echo "</div>";
    }

    }
  }
  ?>
</body>
</html>
