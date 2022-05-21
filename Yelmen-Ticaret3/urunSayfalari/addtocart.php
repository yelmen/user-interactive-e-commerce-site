<?php
include 'islem.php';


if(isset($_POST["ekle"])){
    $id=$_POST["id"];
    $urunad=$_POST["urunAdi"];
    $ureticiAdi=$_POST["ureticiAdi"];
    $ureticiSoyadi=$_POST["ureticiSoyadi"];
    $ureticiIlce=$_POST["ureticiIlce"];
    $urunFiyat=$_POST["urunFiyat"];
    $musteriid= $_SESSION["id"];
    $musteriadi=$_SESSION['username'];  
    $musterisoyadi=$_SESSION['userlastname']; 
    $musteritelefon=$_SESSION['userphone'];
    $musteriadres=$_SESSION['useraddres'];
    $sql=$conn1->prepare("INSERT INTO sepet SET urunId=?, urunAd=?, urunUretici=?, urunFiyat=?, musteriId=?, musteriAd=?, musteriSoyad=?,musteriAdres=?, musteriTelefon=?" );
    $ekle=$sql->bind_param('sssssssss',$id,$urunad,$ureticiAdi,$urunFiyat,$musteriid, $musteriadi, $musterisoyadi,$musteriadres, $musteritelefon);
    $sql->execute();
    header("location:sepetim.php");

}






?>