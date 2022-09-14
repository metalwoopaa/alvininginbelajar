<!DOCTYPE html>
<html>
<head>
  <title>hasil login</title>
  <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body>
    
<?php
$nama = $POST["username"];
$email = $POST["email"];
    
?>
<form action="tampil.php" method="POST">
  <h2>Selamat Anda berhasil login </h2>
  <div class="imgcontainer">
    <img src="icon.png" alt="Avatar" class="Avatar">
  </div>
  
  <div class="container">
    <label><b>Username  :  <?php echo $nama;?></b></label><br><br>
    
    <label><b>Password  :  <?php echo $email;?></b></label></div>
  
  <div class="containeer"  style="background-color:#f1f1f1">
    
    </dif>
  </form>
    
  </body>
  <?html>
