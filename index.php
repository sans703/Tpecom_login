<!DOCTYPE html>
<html>
<head>
 <title>LOGIN MULTIUSER PHP</title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

 <h1>Selamat Datang Di Portal Jasa Sulap Ruang <br/> Masuknya Lewat Form Dibawah Ini Ya Guys :D</h1>

 <?php
 if(isset($_GET['pesan'])){
  if($_GET['pesan']=="gagal"){
   echo "<div class='alert'>Username dan Password Salah !</div>";
  }
 }
 ?>

 <div class="panel_login">
  <p class="tulisan_atas">Silahkan Masuk</p>

  <form action="exa_login.php" method="post">
   <label>Username</label>
   <input type="text" name="username" class="form_login" placeholder="Username" required="required">

   <label>Password</label>
   <input type="password" name="password" class="form_login" placeholder="Password" required="required">

   <input type="submit" class="tombol_login" value="LOGIN">

   <br/>
   <br/>
   
  </form>
  
 </div>


</body>
</html>