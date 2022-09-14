<!DOCTYPE html>
<html>
<head>
  <title>login form</title>
  <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body>
    
<!--  <h2>login form </h2>  -->
<form action="tampil.php" method="POST">
  <h2>Form Login </h2>
  <div class="imgcontainer">
    <img src="icon.png" alt="Avatar" class="avatar"
  </div>
  
  <div class="container">
    <label><b>username</b></label>
    <input type="text" placeholder="Masukan username" name="username" required>
    
    <label><b>password</b></label>
    <input type="password" placeholder="masukkan password" name="email" required>
    
    <button type="submit">masuk</button>
    <input type="checkbox" checked="checked"><span>ingat saya</span>
    </div>
    
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" class="cancelbtn">Batal</button>
      <span class="psw">lupa  <a  href="#">password?</a></span>
    </div>
    </form>
  
  </body>
  </html>
