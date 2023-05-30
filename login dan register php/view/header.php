<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login register</title>
   <link rel="stylesheet" href="view/style.css">
</head>

<body>

   <header>
      <?php echo date('d-m-Y'); ?> <br>
      <h1>login dan register</h1>
      <nav>
         <a href="index.php">Home</a>

         <?php if (!isset($_SESSION['user'])) { ?>
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
         <?php } else { ?>
            <a href="logout.php">Logout</a>
         <?php } ?>


      </nav>
   </header>