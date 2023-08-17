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
      <form action="" method="POST">
        <div class="field input">
          <label for="username">Username</label>
          <input type="text" name="username" id="username" autocomplete="off" required>
        </div>

        <div class="field input">
          <label for="username">Email</label>
          <input type="email" name="email" id="email" autocomplete="off" required>
        </div>

        <div class="field input">
          <label for="age">Age</label>
          <input type="text" name="age" id="age" autocomplete="off" required>
        </div>

        <div class="field input">
          <label for="username">Password</label>
          <input type="password" name="password" id="password" autocomplete="off" required>
        </div>

        <div class="field">
          <input type="submit" class="btn" name="submit" value="Login" required>
        </div>
        <div class="links">
          Already have an account? <a href="index.php">Login</a>
        </div>
      </form>
    </div>
  </div>
  
</body>
</html>