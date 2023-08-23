<?php
  include("config.php");

  session_start(); 
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="box form-box">
      <header>Signup</header>
      <?php
         if(isset($error)){
            foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            }
         }
      ?>
      <form action="regist.php" method="POST">
        <div class="field input">
          <label for="username">Userame</label>
          <input type="text" name="name" id="name" autocomplete="off" required placeholder="John Doe">
        </div>

        <div class="field input">
          <label for="username">Email</label>
          <input type="email" name="email" id="email" autocomplete="off" required>
        </div>

        <div class="field input">
          <label for="username">Password</label>
          <input type="password" name="password" id="password" autocomplete="off" required>
        </div>

        <div class="field input">
          <label for="username"> Confirm Password</label>
          <input type="password" name="cpassword" id="cpassword" autocomplete="off" required>
        </div>

        <div class="field">
          <input type="submit" class="btn" name="submit" value="Register" required>
        </div>
        <div class="links">
          Already have an account? <a href="index.php">Login</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>