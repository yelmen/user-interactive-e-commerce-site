<?php 
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scripts-css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="profil.css">
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
                <li><a href="urunSayfalari/sepetim.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                <li <?php if(!isset($_SESSION["email"])):?> style="display:none";
                <?php endif ?> ><a href="profil.php" ><i class="fad fa-user"></i></a></li>
                <li  <?php if(isset($_SESSION["email"])):?> style="display:none";
                <?php endif ?>  ><a href="girisyap.php"><i class="fad fa-user"></i></a></li>
            </ul>
        </div>
    </section>
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-6 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white ">
                                <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                <h6 class="f-w-600"><h2>Hoşgeldin <?php echo $_SESSION["username"]; ?> </h2></h6>
                               <a href="ureticipaneli.php"><button class="noselect"> <span style="opacity:0; " >.</span>Ürün <span style="opacity:0; " >.....</span>Sat<span style="opacity:0; " >....</span></button></a>
                               <a href="urunSayfalari/urunbilgileri.php"><button class="noselect"> <span style="opacity:0; " >.</span> Ürün<span style="opacity:0; " >....</span> Bilgilerim </button></a>
                               <a href="urunSayfalari/sepetim.php"> <button class="noselect" style="text-size:14px;" ><span style="opacity:0; " >....</span>Sepetime <span style="opacity:0; " >....</span> Git <span style="opacity:0; " >.</span></button></a>
                               <a href="bilgileriguncelle.php"><button class="noselect">Bilgilerimi Güncelle</button></a>
                               <a href="logout.php"> <button class="noselect">Hesaptan Çıkış Yap</button></a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Bilgiler</h6>
                                <div class="row">
                                    <div class="col-sm-6 pd">
                                    <label class="pdtop" for="">Adınız</label>
                                        <h5 class="m-b-10 f-w-600"><?php echo $_SESSION["username"];  ?></h5>
                                    </div>
                                    <hr>
                                    <div class="col-sm-6 pd">
                                    <label class="pdtop" for="">Soy Adınız</label>
                                        <h5 class="m-b-10 f-w-600"><?php echo $_SESSION["userlastname"];  ?></h5>
                                    </div>
                                    <hr>
                                    <div class="col-sm-6 pd">
                                    <label class="pdtop" for="mail">Email Adresiniz</label>
                                        <h5 class="m-b-10 f-w-600" name="mail"><?php echo $_SESSION["email"];  ?></h5>
                                    </div>
                                    <hr>
                                    <div class="col-sm-6 pd">
                                    <label class="pdtop" for="">Telefon Numaranız</label>
                                        <h5 class="m-b-10 f-w-600"><?php echo $_SESSION["userphone"];  ?></h5>
                                    </div>
                                    <hr>
                                    <div class="col-sm-6 pd">
                                        <label for="">Teslimat Adresi</label>
                                        <h5 class="m-b-10 f-w-600"><?php echo $_SESSION["useraddres"]; ?> </h5>
                                        <input type="text" id="adname" name="uuseradd" disabled placeholder="Henüz adres bilgilerinizi girmediniz, Bilgilerimi güncelle seçeneği ile adresinizi ekleyebilirsiniz" value="<?php echo $_SESSION["useraddres"]; ?>" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>