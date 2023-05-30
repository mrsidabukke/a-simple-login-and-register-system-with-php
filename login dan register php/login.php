<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<?php
    $error = "";
 require_once 'core/init.php';
// jika user sudah login
 if(isset($_SESSION['user'])){
    header('Location: index.php');
 }
// validasi pendaftaran / register
 if(isset($_POST['submit'])){
    $nama = $_POST['username'];
    $pass = $_POST['password'];
    if(!empty(trim($nama)) && !empty(trim($pass))){
        if (login_cek_nama($nama)){      
        if (cek_data($nama,$pass)){
        $_SESSION['user'] = $nama;
        header('Location: index.php');
        }else{
            $error = 'data ada yang salah';}
        }else{
         
            $error = 'namanya belum terdaftar di database';
        }
        }else{

     $error = 'tidak boleh kosong';
    }
}
 

 

 require_once 'view/header.php';
?>
 <?php // menguji pesan session?>
 <?php if(isset($_SESSION['msg'])){ ?>
  <div id="sempak">
   <?php echo $_SESSION['msg']; ?>
 </div>
   <?php unset( $_SESSION['msg']);?>
<?php } ?>





<form action= "login.php" method="post">
  <div class="mb-3">
    <label for="" class="form-label">nama</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">masukan nama anda disini</div>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">verifikasi bahwa anda bukan robot</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">login</button>
  
  <?php if ($error!=''){ ?>
     <div id="error">
        <?php echo $error; ?>
    </div>
    <?php } ?>
</form>

    


<?php require_once 'view/footer.php'; ?>

a80 
r90
h80
k73