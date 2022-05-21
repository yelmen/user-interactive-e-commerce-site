<?php 
require 'baglan.php';

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
            <div class='welcome'>Kayıt Ol</div>
            <div class='input-fields'>
             <form action="islem.php" method="post">
            <input type='text' placeholder='İsim' class='input-line full-width' name="name" ></input>
            <input type='text' placeholder='Soyisim' class='input-line full-width' name="lastname"></input>
            <input type='email' placeholder='Email' class='input-line full-width' name="email"></input>
            <input type='password' placeholder='Şifre' class='input-line full-width' name="password"></input>
            <input type='password' placeholder='Şifre Onay' class='input-line full-width' name="passonay"></input>
            <input type='text' placeholder='Telefon' class='input-line full-width' name="telefon"></input>
            <input type="submit" class='ghost-round full-width' value='Kayıt Ol' name="btnsubmit">
            </form>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
