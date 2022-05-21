<?php 

require 'islem.php';
$kullanici=$_SESSION['id'];
$icerikler=DB::get("SELECT * FROM urunler where ureticiId='$kullanici' ORDER BY id DESC");

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
    <link rel="stylesheet" href="style.css ">
    <link rel="stylesheet" href="urunbilgileri.css" >
    <script type="text/javascript" src="FrameWorks/jquery/jquery-3.6.0.min.js" language="javascript"></script>
    <script type="text/javascript" src="Ayarlar/fonksiyonlar.js" language="javascript"></script>
    <title>Ürün Bilgilerim</title>

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

<h3>Ürün Bilgilerim</h3>
<ul id="ulmiz">
    <li>Ürün Ad</li>
    <li>Miktar</li>
    <li>Fiyat</li>
    <li>Sipariş Bilgisi</li>
    <li>Ürünü Satıştan Kaldır</li>
</ul>
<hr>
<?php foreach($icerikler as $k => $v): ?>
<ul id="ulmizalt">
    <li><?php echo $v->urunAdi  ?></li>
    <li><?php echo $v->urunStok ?> <?php echo $v->urunStokbirim ?></li>
    <li><?php echo $v->urunFiyat ?>₺ </li>
    <a href="siparisdetayi.php"><li>3 Sipariş </li></a> 
    <li>  <button class="buton" name="buton" >Ürünü Kaldır</button> </li>
</ul>
<?php endforeach ?>


    
</body>
</html>