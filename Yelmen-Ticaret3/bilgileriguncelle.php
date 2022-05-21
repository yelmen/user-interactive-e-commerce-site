<?php 
session_start();
include 'baglan.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="bilgileriguncelle.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section id="header">
        <a href="index.php"><img src="Resimler/dv7y2020140912020-02-243524491M2-removebg-preview (2).png" class="logo"></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Anasayfa</a></li>
                <li><a href="alisveris.php">Alışveriş</a></li>
                <li><a href="firsatlar.php">İndirimdekiler</a></li>
                <li><a href="yeniurunler.php">Yeni Ürünler</a></li>
                <li><a href="iletisim.php">İletişim</a></li>
                <li><a href="sepetim.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                <li <?php if(!isset($_SESSION["email"])):?> style="display:none";
                <?php endif ?> ><a href="profil.php" ><i class="fad fa-user"></i></a></li>
                <li  <?php if(isset($_SESSION["email"])):?> style="display:none";
                <?php endif ?>  ><a href="girisyap.php"><i class="fad fa-user"></i></a></li>
            </ul>
        </div>
    </section>
    <h2>Bilgileriniz</h2>

<div class="my" >
  <form action="islem.php" method="post"  >
    <label for="fname">Adınız</label>
    <input type="text" id="fname" name="ufirstname" value=" <?php echo $_SESSION["username"];  ?>">
    <label for="lname">Soyadınız</label>
    <input type="text" id="lname" name="ulastname" value="<?php echo $_SESSION["userlastname"]; ?> ">
    <label for="fname">Email Adresiniz</label>
    <input type="text" id="fname" name="uemail" value="<?php echo $_SESSION["email"]; ?> ">
    <label for="fname">Telefon Numaranız</label>
    <input type="text" id="fname" name="uphone" value="<?php echo $_SESSION["userphone"]; ?>">
    <label for="lname">Teslimat Adresiniz</label>
    <input type="text" id="adname" name="uuseradd" value="<?php echo $_SESSION["useraddres"]; ?>" style="hegiht: 150px;">
    <p>Not:   Bilgileriniz Oturumunuzu kapattıktan sonra yenilenecektir.</p>
    </select>
    <button class="noselect" method="submit" name="submit" >Kaydet</button>
  </form>
</div>

</body>
</html>