<?php
require 'config.php';
session_start();

$icerikler=DB::get("SELECT * FROM urunler WHERE kategoriId='1' ORDER BY id DESC");


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
                <li <?php if(!isset($_SESSION["email"])):?> style="display:none;" <?php endif ?> ><a href="sepetim.php"><i class="fa fa-shopping-bag" ></i></a></li>
                <li <?php if(isset($_SESSION["email"])):?> style="display:none;" <?php endif ?> ><a href="../girisyap.php"><i class="fa fa-shopping-bag" ></i></a></li>
               <li <?php if(!isset($_SESSION["email"])):?> style="display:none";
                <?php endif ?> ><a href="../profil.php" ><i class="fad fa-user"></i></a></li>
                <li  <?php if(isset($_SESSION["email"])):?> style="display:none";
                <?php endif ?>  ><a href="../girisyap.php"><i class="fad fa-user"></i></a></li>
            </ul>
        </div>
    </section>
    <section class="title tite-primary">
       <h1 style="text-align: center; padding-top: 50px;"> Patates Üreticileri</h1>
    </section>
        <ul class="cards">
          
        <?php foreach($icerikler as $k => $v): ?>
          <form action="addtocart.php" method="post">
          <?php 
            $resim = PATH."Resimler/urunler/$v->urunGorsel ";
            ?>
            <li>
              <a href="" class="card">
                <img name="cartgorsel" src=" <?php echo $resim ?> " class="card__image" alt="" />
                <div class="card__overlay">
                  <div class="card__header">               
                    <div class="card__header-text">
                      <h3 name="cartureticiadi" class="card__title"><?php echo $v->ureticiAdi ?></h3>          
                      <h3 name="cartureticisoyadi" class="card__title"><?php echo $v->ureticiSoyadi ?></h3>            
                      <span name="cartureticiilce" class="card__status"><?php echo $v->ureticiIlce ?></span>
                    </div>
                    <span name="carturunfiyat" class="card__status" style="color:red;"><?php echo $v->urunFiyat ?>  ₺</span>
                    <input type="hidden" name="id" value=" <?php echo $v->id ?>" >
                    <input type="hidden" name="ureticiAdi" value=" <?php echo $v->ureticiAdi ?>" >
                    <input type="hidden" name="ureticiSoyadi" value=" <?php echo $v->ureticiSoyadi ?>" >
                    <input type="hidden" name="ureticiIlce" value=" <?php echo $v->ureticiIlce ?>" >
                    <input type="hidden" name="urunFiyat" value=" <?php echo $v->urunFiyat ?>" >
                    <input type="hidden" name="urunAdi" value=" <?php echo $v->urunAdi ?>" >
                    
                    <button <?php if(isset($_SESSION["email"])):?> type="submit" name="ekle" id="sepeteekle"  style="display:visible"; <?php endif ?> <?php if(!isset($_SESSION["email"])): ?> style="display:none;" <?php endif ?>><i class="fas fa-shopping-cart"></i> </button >
                   
                     
                  </div>
                  <p name="carturunaciklama" class="card__description"> <?php echo $v->urunAciklama ?> </p>
                </div>
              </a>     
            </li>
            </form>
          <?php endforeach; ?>

        </ul>
</body>
</html>
<?php
     $veriTabaniBaglantisi=null;
?>