<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<?php
require_once 'core/init.php'; 
include 'view/header.php';?>

   <?php if(!isset($_SESSION['user'])){ ?>
<div id="home">
   <?php $_SESSION['msg'] = 'anda harus login terlebih dahulu'; ?>
</div>
   <?php header('location:login.php'); ?>
   <?php } ?>


<br>

<h1>halaman profil &nbsp; <?php echo $_SESSION['user']; ?></h1>

<?php if (cek_status($_SESSION['user']) ){ ?>
   <div id="admin"> halo admin </div>


<div class="card" style="width: 80rem;">
  <img src="gambar/wakandaa.jpg" class="card-img-top" alt="haloooooooooooooooooooooooo" >
  <div class="card-body">
    <h5 class="card-title">Ini Angiiikkkkk</h5>
    <p class="card-text">hanya seorang biasa yang ingin masuk ke kedokteran ugm</p>
    <!-- <a href="../game catur/dist" class="btn btn-primary">klik disini jika anda ingin bermain game catur</a> -->
  </div>
  <div>
 <br>
   
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="../game catur/dist">klik disini untuk bermain game catur</a>
  </div>
</nav>

<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="../game labirin/dist">klik disini untuk bermain game labirin</a>
  </div>
</nav>

<?php }else ?>

<img src="gambar/sempak.png" class="img-fluid" alt="...">

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="register.php">fafd</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>







<?php include 'view/footer.php'; ?>

