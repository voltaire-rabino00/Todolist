<?php
include("config.php");
session_start(); // Start the session

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM register WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['email'] = $email;
            header("location: home.php"); // Redirect to the home page after successful login
        } else {
            echo '<script>
                alert("Incorrect password");
                window.location.href = "index.php";
            </script>';
        }
    } else {
        echo '<script>
            alert("Email not registered");
            window.location.href = "index.php";
        </script>';
    }
}
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
      <header>Login</header>
      <form action="" method="POST">
        <div class="field input">
          <label for="username">Email</label>
          <input type="email" name="email" id="email" required autocomplete="off">
        </div>

        <div class="field input">
          <label for="username">Password</label>
          <input type="password" name="password" id="password" required autocomplete="off">
        </div>

        <div class="field">
          <input type="submit" class="btn" name="submit" value="Login" required>
        </div>
        <div class="links">
          Don't have account? <a href="register.php">Signup</a>
        </div>
      </form>
    </div>
  </div>
  
</body>
</html>