<?php 

    try {

        $veriTabaniBaglantisi= new PDO("mysql:host=localhost;dbname=yelmenticaret;charset=UTF8;", "root","");
        }catch(PDOException $hata){
            //echo "Bağlanti Hatasi <br/> " .$hata -> getMessage();
            die();
        }

$ayarlarSorgusu = $veriTabaniBaglantisi->prepare("SELECT * FROM ayarlar LIMIT 1");
$ayarlarSorgusu->execute();
$ayarSayisi = $ayarlarSorgusu->rowCount();
$ayarlar= $ayarlarSorgusu->fetch(PDO::FETCH_ASSOC);

if($ayarSayisi>0){
    $siteAdi   =   $ayarlar["siteAdi"];
    $siteTitle =   $ayarlar["siteTitle"];
    $siteDescription   =   $ayarlar["siteDescription"];
    $siteKeywords   =   $ayarlar["siteKeywords"];
    $siteCopyrightMeti   =   $ayarlar["siteCopyrightMeti"];
    $siteLogosu   =   $ayarlar["siteLogosu"];
    $siteEmailAdresi   =   $ayarlar["siteEmailAdresi"];
    $siteEmailSifresi   =   $ayarlar["siteEmailSifresi"];
 
}else{
    echo "Site ayar sorgusu hatalı";
    die();
}











?>

