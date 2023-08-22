<?php
  include("config.php");

  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $sql="SELECT * FROM register WHERE name='$name'";
    $result = mysqli_query($conn, $sql);
    $count_name = mysqli_num_rows($result);

    $sql="SELECT * FROM register WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result);

    if($count_name == 0 & $count_email==0){
      if($password==$cpassword){
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $result = "INSERT INTO register (name, email, password)
        VALUES('$name', '$email', '$hash')";
        $result = mysqli_query($conn, $result);
        
        if($result){
          header("location: home.php");
        }
      }
      else{
        echo '<script>
          alert("Password Do not match");
          window.location.href = "index.php";
        </script>';
      }
    }
    else{

      if($count_name>0){
        echo '<script>
            window.location.href="index.php";
            alert("Username already exists!!");
        </script>';
      }
      if($count_email>0){
        echo '<script>
            window.location.href="index.php";
            alert("Email already exists!!");
        </script>';
      }
    }
  }
  
?>

<!-- 
  
 -->