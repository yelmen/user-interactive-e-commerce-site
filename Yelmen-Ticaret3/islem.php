<?php
include 'baglan.php';
require 'verotnet.php';
require 'config.php';
require 'guvenlikvekontroller.php';

ob_start(); session_start();

//kullanıcının ilk kayıt bilgilerini burdan alıyoruz ve veritabanına kayıt ediyoruz
if (isset($_POST["btnsubmit"])){
    $name=ucfirst($_POST["name"]);
    $lastname=strtoupper( $_POST["lastname"]);
    $email=$_POST["email"];
    $password=$_POST["password"];
    $passwordagain=$_POST["passonay"];
    $telefon=$_POST["telefon"];
        if(!$name){
            echo "lütfen isminizi giriniz";
            header("Refresh:2; hesapolustur.php");
        }else if(!$lastname){
            echo "lütfen soyisminizi giriniz";
            header("Refresh:2; hesapolustur.php");
        }else if(!$email){
            echo "lütfen email adresinizi giriniz";
            header("Refresh:2; hesapolustur.php");
        }else if(!$password){
            echo "lütfen şifrenizi giriniz";
            header("Refresh:2; hesapolustur.php");
        }else if(!$passwordagain){
            echo "lütfen şifrenizi giriniz";
            header("Refresh:2; hesapolustur.php");
        }else if($password!=$passwordagain){
            echo "Şifreleriniz eşleşmiyor";
            header("Refresh:2; hesapolustur.php");
        }else if(!$telefon){
            echo "lütfen telefon numaranızı giriniz";
            header("Refresh:2; hesapolustur.php");
        }
        else{
            //veritabanı kayıt işlemleri
            $sorgu= $conn1->prepare("INSERT INTO users SET username=?, userlastname=?, email=?, Pass=?, userphone=?");
            $ekle=$sorgu->bind_param("sssss",$name, $lastname, $email, $password, $telefon);
            $sorgu->execute();
             if($ekle){
                 echo "Kayıt İşlemi Başarılı Giriş Sayfasına Yönlendiriliyorsunuz...";
                 header("Refresh:2; girisyap.php");
             }else{
                 echo "Başarısız ";
                 header("Refresh:2; hesapolustur.php");
             }
    
        }
    
    
}


//kullanıcının hesap açması için gereken bilgileri kontrol edip session başlatıyoruz. 
    if(isset($_POST["login"])){
      $email=$_POST["email"];
      $Pass=$_POST["Pass"];
      $guvenlikler=new guvenlikler();
      $guvenlikler->girisyapnullkontrol($email,$Pass);
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





// kullanıcı ürün veritabanına yüklemesini burada yapıyoruz

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