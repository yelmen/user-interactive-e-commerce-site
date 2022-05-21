<?php 



require 'islem.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="girisyap.css">
    <title>Kayıt Ol</title>
</head>
<body> 
    <div class='bold-line'></div>
    <div class='container'>
      <div class='window'>
        <div class='overlay'></div>
        <div class='content'>
            <div class='welcome'>Giriş Yap</div>
            <div class='input-fields'>
             <form action="islem.php" method="post">
            <input type='text' placeholder='Email' class='input-line full-width' name="email"></input>
            <input type='password' placeholder='Şifre' class='input-line full-width' name="Pass"></input>
            <input type="submit" class='ghost-round full-width' value='Giriş Yap' name="login">
           <a href="hesapolustur.php"><input type="button" class='ghost-round full-width' value='Kayıt Ol' name="signup"></a> 
            </form>
          </div>
        </div>
      </div>
    </div>
    
</body>
</html>
