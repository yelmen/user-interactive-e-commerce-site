<?php
require 'config.php';

$icerikler=DB::get("SELECT * FROM urunler where kategoriId='13' ORDER BY id DESC");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="revisit-after" content="8 Days">
    <meta name="description" content="<?php echo $siteDescription; ?>">
    <meta name="keywords" content="<?php echo $siteKeywords; ?>">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="ureticipatates.css ">
    <link rel="stylesheet" href="style.css ">
    <script type="text/javascript" src="FrameWorks/jquery/jquery-3.6.0.min.js" language="javascript"></script>
    <script type="text/javascript" src="Ayarlar/fonksiyonlar.js" language="javascript"></script>
    <title>Yelmen Ticaret</title>
</head>
<body>
<section id="header">
        <a href="../index.php"><img src="dv7y2020140912020-02-243524491M2-removebg-preview (2).png" class="logo"></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="../index.php">Anasayfa</a></li>
                <li><a href="../alisveris.php">Alışveriş</a></li>
                <li><a href="../firsatlar.php">İndirimdekiler</a></li>
                <li><a href="../yeniurunler.php">Yeni Ürünler</a></li>
                <li><a href="../iletisim.php">İletişim</a></li>
                <li><a href="../sepetim.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                <!-- <li <?php if(!isset($_SESSION["email"])):?> style="display:none";
                <?php endif ?> ><a href="profil.php" ><i class="fad fa-user"></i></a></li>
                <li  <?php if(isset($_SESSION["email"])):?> style="display:none";
                <?php endif ?>  ><a href="girisyap.php"><i class="fad fa-user"></i></a></li>-->
            </ul>
        </div>
    </section>
    <section class="title tite-primary">
       <h1 style="text-align: center; padding-top: 50px;"> Elma Üreticileri</h1>
    </section>
    <ul class="cards">
    <?php foreach($icerikler as $k => $v): ?>
      <?php 
        $resim = PATH."Resimler/urunler/$v->urunGorsel ";
        ?>

        <li>
          <a href="" class="card">
            <img src=" <?php echo $resim ?> " class="card__image" alt="" />
            <div class="card__overlay">
              <div class="card__header">
                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                <i class="fas fa-shopping-basket" style="height:40px; width:80px;  "></i>
                <div class="card__header-text">
                  <h3 class="card__title"><?php echo $v->ureticiAdi ?></h3>            
                  <h3 class="card__title"><?php echo $v->ureticiSoyadi ?></h3>            
                  <span class="card__status"><?php echo $v->ureticiIlce ?></span>
                </div>
                <span class="card__status" style="color:red;"><?php echo $v->urunFiyat ?>  ₺</span>  
              </div>
              <p class="card__description"> <?php echo $v->urunAciklama ?> </p>
            </div>
          </a>      
        </li>
      <?php endforeach; ?>
    </ul>
    
</body>
</html>
<?php
     $veriTabaniBaglantisi=null;
?>