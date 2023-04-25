<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="76x76" href="img/icon.png">
    <link rel="icon" type="image/png" href="img/icon.png">
    <title>CBU | Yamaha Bisma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="asset/main.css">
</head>
<body>
  <?php 
    include('component/navigation.html');
    include('component/banner.html'); 
  ?>
    <div class="parallax2">
  <?php
    include('component/product.html');
    include('component/cta.html');
    include('component/video.html');
  ?>
    </div>
  <?php
    include('component/footer.html');
    include('component/floating-btn.html');
  ?>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
  <script src="asset/sidenav.js"></script>
  <script src="asset/link-wa.js"></script>
</body>
</html>