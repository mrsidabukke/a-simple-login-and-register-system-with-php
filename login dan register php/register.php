<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<?php
 require_once 'core/init.php';
// jika user sudah login
$error = '';

$hasil = '';
if(isset($_SESSION['user'])){
    header('Location: index.php');
 }
 
// validasi pendaftaran / register
 if(isset($_POST['submit'])){
    $nama = $_POST['username'];
    $pass = $_POST['password'];
    if(!empty(trim($nama)) && !empty(trim($pass))){
        // memasukan data ke dalam database
        if(register_cek_nama($nama)){
            if (register_user($nama,$pass)){
                $hasil = 'berhasil';
            }else{
                $error = 'gagal';
            }
            }else{
                $error =  'nama sudah terpakai';
            }
        }else{
            $error = 'Data tidak boleh kosong!';
        }
 }
 

 

 require_once 'view/header.php';
?>

<form action= "register.php" method="post">
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
  <button type="submit" name="submit" class="btn btn-primary">daftar</button>
  
  <?php if ($error!=''){ ?>
     <div id="error">
        <?php echo $error; ?>
    </div>
    <?php } ?>

    <br>
    <?php if ($hasil!=''){ ?>
     <div id="hasil">
        <?php echo $hasil; ?>
    </div>
    <?php } ?>
    
</form>




    



<?php require_once 'view/footer.php'; ?>