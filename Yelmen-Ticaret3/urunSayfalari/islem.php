<?php
include 'baglan.php';
require 'verotnet.php';
require 'config.php';

ob_start(); session_start();

//kullanıcının ilk kayıt bilgilerini burdan alıyoruz ve veritabanına kayıt ediyoruz
if (isset($_POST["btnsubmit"])){
    $name=ucfirst($_POST["name"]);
    $lastname=strtoupper( $_POST["lastname"]);
    $email=$_POST["email"];
    $password=$_POST["password"];
    $passwordagain=$_POST["passonay"];
    $telefon=$_POST["telefon"];
    if(!$email){
        echo "lütfen mail adresinizi giriniz";
    }else if(!$password){
        echo "lütfen şifrenizi giriniz";
    }else{
        //veritabanı kayıt işlemleri
        $sorgu= $conn1->prepare("INSERT INTO users SET username=?, userlastname=?, email=?, Pass=?, userphone=?");
        $ekle=$sorgu->bind_param("sssss",$name, $lastname, $email, $password, $telefon);
        $sorgu->execute();
         if($ekle){
             echo "Kayıt İşlemi Başarılı Giriş Sayfasına Yönlendiriliyorsunuz...";
             header("Refresh:2; girisyap.php");
         }else{
             echo "Başarısız ";
         }

    }
}


//kullanıcının hesap açması için gereken bilgileri kontrol edip session başlatıyoruz. 
    if(isset($_POST["login"])){
      $email=$_POST["email"];
      $Pass=$_POST["Pass"];
      $select= mysqli_query($conn1, "SELECT username, userlastname,email, userphone, useraddres,id FROM users WHERE email='$email' AND Pass='$Pass' ");
      $row=mysqli_fetch_array($select);
      if(is_array($row)){
        $_SESSION["id"]=$row["id"];
        $_SESSION['email']=$row['email'];
        $_SESSION['Pass']=$row["Pass"];
        $_SESSION['username']=$row['username'];   
        $_SESSION['userlastname']=$row['userlastname'];    
        $_SESSION['userphone']=$row['userphone'];
        $_SESSION['useraddres']=$row['useraddres'];
        
      }else{
        echo '<script>alert("şifre veya isim yanlış") </script> ';
        header("Refresh:1; girisyap.php");

      }
      if(isset($_SESSION["username"])|| isset($_SESSION["email"]) || isset($_SESSION["userlastname"]) || isset($_SESSION["userphone"]) || isset($_SESSION["useraddres"])){
        header ("location:profil.php");
      }
      
      
      
 
    }

// kullanıcının bilgilerini güncellemesini sağlıyoruz
if (isset($_POST["submit"])){
    $uid=$_SESSION["id"];
    $uname=$_POST["ufirstname"];
    $ulastname=$_POST["ulastname"];
    $uemail=$_POST["uemail"];
    $uphone=$_POST["uphone"];
    $uuseradd=$_POST["uuseradd"];
    $sorgu= $conn1->prepare("UPDATE users SET username=?, userlastname=?, email=?,userphone=?, useraddres=? WHERE id='$uid'");
    $ekle=$sorgu->bind_param("sssss",$uname, $ulastname, $uemail, $uphone, $uuseradd);
    $sorgu->execute();
     if($ekle){
         echo "Güncelleme Başarılı";
         
         header("Refresh:1; profil.php");
     }else{
         echo "Başarısız ";
     }
     

}
//ürünleri yüklemek için class oluşturdum burdan direkt olarak ürünün adını alıp kategorileştirilmiş halde db ye kaydediyorum
class urunyukle{

    function urunyukle($kategoriid){
        $this->kategoriid=$kategoriid;
        if($kategoriid=='Patates'){
            $kategoriid=1;
        }elseif($kategoriid=="Domates"){
            $kategoriid=2;
        }elseif($kategoriid=="Armut"){
            $kategoriid=3;
        }elseif($kategoriid=="Ayva"){
            $kategoriid=4;
        }elseif($kategoriid=="Ahududu"){
            $kategoriid=5;
        }elseif($kategoriid=="Akai"){
            $kategoriid=6;
        }elseif($kategoriid=="Ananas"){
            $kategoriid=7;
        }elseif($kategoriid=="Armut"){
            $kategoriid=8;
        }elseif($kategoriid=="Avakado"){
            $kategoriid=9;
        }elseif($kategoriid=="Ayva"){
            $kategoriid=10;
        }elseif($kategoriid=="Böğürtlen"){
            $kategoriid=11;
        }elseif($kategoriid=="Dut"){
            $kategoriid=12;
        }elseif($kategoriid=="Elma"){
            $kategoriid=13;
        }elseif($kategoriid=="Erik"){
            $kategoriid=14;
        }elseif($kategoriid=="Guava"){
            $kategoriid=15;
        }elseif($kategoriid=="Hurma"){
            $kategoriid=16;
        }elseif($kategoriid=="İncir"){
            $kategoriid=17;
        }elseif($kategoriid=="Karpuz"){
            $kategoriid=18;
        }elseif($kategoriid=="Kayısı"){
            $kategoriid=19;
        }elseif($kategoriid=="Kiraz"){
            $kategoriid=20;
        }elseif($kategoriid=="Kivi"){
            $kategoriid=21;
        }elseif($kategoriid=="Kuru Üzüm"){
            $kategoriid=22;
        }elseif($kategoriid=="Kızılcık"){
            $kategoriid=23;
        }elseif($kategoriid=="Limon"){
            $kategoriid=24;
        }elseif($kategoriid=="Mandalina"){
            $kategoriid=25;
        }elseif($kategoriid=="Mango"){
            $kategoriid=26;
        }elseif($kategoriid=="Muz"){
            $kategoriid=27;
        }elseif($kategoriid=="Nar"){
            $kategoriid=28;
        }elseif($kategoriid=="Nektarin"){
            $kategoriid=29;
        }elseif($kategoriid=="Portakal"){
            $kategoriid=30;
        }elseif($kategoriid=="Rambutan"){
            $kategoriid=31;
        }elseif($kategoriid=="Trabzon Hurması"){
            $kategoriid=32;
        }elseif($kategoriid=="Yabanmersini"){
            $kategoriid=33;
        }elseif($kategoriid=="Yayla Muzu"){
            $kategoriid=34;
        }elseif($kategoriid=="Yıldız Meyvesi"){
            $kategoriid=35;
        }elseif($kategoriid=="Zeytin"){
            $kategoriid=36;
        }elseif($kategoriid=="Çilek"){
            $kategoriid=37;
        }elseif($kategoriid=="Üzüm"){
            $kategoriid=38;
        }elseif($kategoriid=="Şeftali"){
            $kategoriid=39;
        }elseif($kategoriid=="Nektari"){
            $kategoriid=40;
        }elseif($kategoriid=="Acur"){
            $kategoriid=41;
        }elseif($kategoriid=="Bamya"){
            $kategoriid=42;
        }elseif($kategoriid=="Bayırturpu"){
            $kategoriid=43;
        }elseif($kategoriid=="Bezelye"){
            $kategoriid=44;
        }elseif($kategoriid=="Biber"){
            $kategoriid=45;
        }elseif($kategoriid=="Brokoli"){
            $kategoriid=46;
        }elseif($kategoriid=="Brüksel Lahanası"){
            $kategoriid=47;
        }elseif($kategoriid=="Dolmalık Kabak"){
            $kategoriid=48;
        }elseif($kategoriid=="Domates"){
            $kategoriid=49;
        }elseif($kategoriid=="Enginar"){
            $kategoriid=50;
        }elseif($kategoriid=="Frenksoğanı"){
            $kategoriid=51;
        }elseif($kategoriid=="Hardal Otu"){
            $kategoriid=52;
        }elseif($kategoriid=="Hindiba"){
            $kategoriid=53;
        }elseif($kategoriid=="Siyah Zeytin"){
            $kategoriid=54;
        }elseif($kategoriid=="Soğan"){
            $kategoriid=55;
        }elseif($kategoriid=="Su Kabağı"){
            $kategoriid=56;
        }elseif($kategoriid=="Tatlı Patates"){
            $kategoriid=57;
        }elseif($kategoriid=="Turp"){
            $kategoriid=58;
        }elseif($kategoriid=="Yabani Havuç"){
            $kategoriid=59;
        }elseif($kategoriid=="Yapraklı Turp"){
            $kategoriid=60;
        }elseif($kategoriid=="Yer Lahanası"){
            $kategoriid=61;
        }elseif($kategoriid=="Yeşil Fasülye"){
            $kategoriid=62;
        }elseif($kategoriid=="Yeşil Soğan"){
            $kategoriid=63;
        }elseif($kategoriid=="Yeşil Zeytin"){
            $kategoriid=64;
        }elseif($kategoriid=="Zeytin"){
            $kategoriid=65;
        }elseif($kategoriid=="Şalgam"){
            $kategoriid=66;
        }elseif($kategoriid=="Çeri Domates"){
            $kategoriid=67;
        }elseif($kategoriid=="Kavun"){
            $kategoriid=68;
        }
        $foo = new \Verot\Upload\Upload($_FILES['gorsel']); 
        if ($foo->uploaded) {
            $foo->file_new_name_body="ornekresim";
           $foo->process('Resimler/urunler');
           if ($foo->processed) {
    
             $resim_adi=$foo->file_dst_name;
             DB::insert("INSERT INTO urunler(ureticiAdi,ureticiSoyadi,ureticiIlce,urunAdi, urunStok, urunFiyat, urunAciklama, urunGorsel, kategoriId) VALUES(?,?,?,?,?,?,?,?,?)", array(
                 $_POST["ufirstname"],
                 $_POST["ulastname"],
                 ucfirst($_POST["urunuretim"]),
                 $_POST["urunadi"],
                 $_POST["urunstok"],
                 $_POST["urunfiyat"],
                 $_POST["urunaciklama"],
                 $resim_adi,
                 $kategoriid,
                
             ));
             
             header("location:ureticilerpatates.php");
           } else {
             echo 'error : ' . $foo->error;
           }
          
        }else{
            header("location:ureticipaneli.php?resimhata=1");
        } 
    }
}






// kullanıcı ürün yüklemesini burada yapıyoruz

if(isset($_POST["sbmt"])){
    $urunadi=$_POST['urunadi'];
   $urunyukle= new urunyukle($urunadi);
     
}


// kullanıcının ürün seçmesi için options sorgusu
$querry="SELECT * FROM urunadlari ORDER BY urunAdi ASC  ";
$sonuc=mysqli_query($conn1,$querry);
// kullanıcının üretim yeri seçmesi için options sorgusu
$querrry="SELECT * FROM uretimyeri ORDER BY ilce ASC ";
$sonucc=mysqli_query($conn1,$querrry);




    

?>