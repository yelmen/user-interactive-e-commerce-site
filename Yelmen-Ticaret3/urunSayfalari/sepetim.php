<?php 
session_start();

$musteriid= $_SESSION["id"];
require 'config.php';
$icerikler=DB::get("SELECT * FROM sepet WHERE musteriId='$musteriid'");
foreach($icerikler as $k => $v)



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../scripts-css/profil.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
<section id="header">
        <a href="../index.php"><img src="../Resimler/dv7y2020140912020-02-243524491M2-removebg-preview (2).png" class="logo"></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="../index.php">Anasayfa</a></li>
                <li><a href="../alisveris.php">Alışveriş</a></li>
                <li><a href="../firsatlar.php">İndirimdekiler</a></li>
                <li><a href="../yeniurunler.php">Yeni Ürünler</a></li>
                <li><a href="../iletisim.php">İletişim</a></li>
                <li><a href="../sepetim.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                <li <?php if(!isset($_SESSION["email"])):?> style="display:none";
                <?php endif ?> ><a href="../profil.php" ><i class="fad fa-user"></i></a></li>
                <li  <?php if(isset($_SESSION["email"])):?> style="display:none";
                <?php endif ?>  ><a href="../girisyap.php"><i class="fad fa-user"></i></a></li>
            </ul>
        </div>
    </section>


    <div class="container">
        <h2>Sepetim</h2>            
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Ürün Adı</th>
              <th>Ürün Kilo Fiyatı</th>
              <th>Ürün Miktarı (Kg)</th>
              <th>Tutar</th>
            </tr>
          </thead>
          <?php foreach($icerikler as $k => $v): ?>
          <tbody>
            <tr>
              <td> <?php echo $v->urunAd ?> </td>
              <td> <?php echo $v->urunFiyat ?>  ₺</td>
              <td><form action="" method="post"> <input name="miktar" type="number" > <button name="hesaplamayayolla" type="submit" class="btn btn-primary">Ekle</button></form> </td>
              <td><?php
              if(isset($_POST["miktar"])){
                $miktar=$_POST["miktar"];
                $urunfiyati=$v->urunFiyat;
                $urunmiktari=$miktar;
                $sonuc=$urunfiyati*$urunmiktari;
              
              
              echo $sonuc; }?> ₺</td>
            </tr>
          </tbody>
         <?php endforeach;?> 
        </table>
        <div class="text-right">
            <button type="button" class="btn btn-warning float-end ">Alışverişi Tamamla</button>
        </div> 
    </div> 
    <div class="container">
        <h2>Aktif Sipraşilerim</h2>            
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Ürün Adı</th>
              <th>Ürün Miktarı</th>
              <th>Tutar</th>
              <th>Durum</th>
            </tr>
            <tr>
                <td>Ispanak</td>
                <td>35 Kg</td>
                <td>186 ₺</td>
                <td> Siparişiniz Hazırlanıyor</td>
            </tr>
          </thead>
          </tbody>
        </table>
        <div class="text-right">
            <button type="button" class="btn btn-outline-primary float-end ">Detaylar</button>
        </div>         
    </div>    
    
    <div class="container">
        <h2>Geçmiş Sipraişlerim</h2>            
        <table class="table table-dark table-hover">
          <thead>
            <tr>
              <th>Ürün Adı</th>
              <th>Ürün Miktarı</th>
              <th>Tutar</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>patates</td>
              <td>15 kg</td>
              <td>60 ₺</td>
            </tr>
            <tr>
                <td>elma</td>
                <td>22 kg</td>
                <td>86 ₺</td>
              </tr>
              <tr>
                <td>patlıcın</td>
                <td>12 kg</td>
                <td>48 ₺</td>
              </tr>
          </tbody>
        </table>
        <div class="text-right">
            <button type="button" class="btn btn-outline-primary float-end ">Detaylar</button>
        </div> 
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>