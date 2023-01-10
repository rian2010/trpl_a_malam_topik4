<?php
session_start();
include "koneksi.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="assets/img/monocore.jpg" rel="icon">
<link href="assets/css/stylelogin.css" rel="stylesheet">
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login page</title>
  <link rel="stylesheet" href="login.css">
</head>

<body>
  <div class="login_card">
    <h1>welcome</h1>
  <form action="" method="post">
    <div class="input_field">
    <input type="text" name="username" id="username" required />
      <span></span>
      <label>username</label>
    </div>
    <div class="input_field">
    <input type="password" name="password" id="password" required />
      <span></span>
      <label>password</label>
    </div>
    <input type="submit" name="submit" value="submit" /><br><br>
  </form>
  
 
  </div>
</body>
</html>

<?php
 if(isset($_POST['submit'])){
    $query = "select * from laboran where username = '".$_POST['username']."' and password = '".$_POST['password']."'";
    
     $sql = mysqli_query($koneksi,$query);

     $cek = mysqli_num_rows($sql);    
     if($cek > 0) {
         session_start();

         $_SESSION ['username'] = $_POST ['username'];
         echo '<script type ="text/JavaScript">';
         echo 'alert("Login Berhasil")';  
         echo '</script>';
         echo "<meta http-equiv=refresh content=0,url='index_admin.php'>";
     }else{
         echo '<script type ="text/JavaScript">';  
               echo 'alert("silahkan periksa kembali email atau sandi anda    ")';  
               echo '</script>'; 
               echo "<meta http-equiv=refresh content=2;URL='login.php'>";

     }
 }
 

?>