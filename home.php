<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>
  <link rel="stylesheet" href="./Css and js/home.css">
<body>
  <!-- Header Section -->
<header class="header">
  <a href="#" class="logo">
    <img src="./img/logo.png"  alt="">
  </a>

  <nav class="navbar">
    <div id="close" class="fas fa-times"></div>

    <a href="#" class="nav_item">Home</a>
    <a href="#" class="nav_item">About</a>
    <a href="#" class="nav_item">Menu</a>
    <a href="#" class="nav_item">Contact</a>
  </nav>

  <div id="menu" class="fas fa-bars"></div>


</header>
  <!-- Header Section ends -->

  <!-- Home section -->

  <section class="home">
    <div class="content">
    <h1 class="title">fresh <span>Coffee</span> in the <span>morning</span></h1>
    <p class="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima ab magni nemo provident, nihil aperiam eius neque veritatis repellendus eveniet enim modi iure ad iusto unde quisquam! Quidem, alias eaque!</p>
    <a href="products.php" class="btn">Get Started</a>
    </div>

    <div class="image">
      <img src="./img/home.png" alt="" data-speed="-3" class="move">
    </div>
  </section>


  <!-- GSAp CDN link-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>


  <!-- js file -->
  <script src="app.js"></script>
</body>
</html>