<?php 

include 'islem.php';
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
    <link rel="stylesheet" href="scripts-css/ureticipaneli.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script type="text/javascript" src="FrameWorks/jquery/jquery-3.6.0.min.js" language="javascript"></script>
    <script type="text/javascript" src="Ayarlar/fonksiyonlar.js" language="javascript"></script>
    <title><?php echo $siteTitle; ?> </title>
</head>
<body>
    <div class="body">
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
        <section id="section1">
            <div class="form-group" style="padding-bottom:50px;">
                <div class="initialism container-fluid" id="title">
                    <h3>Lütfen Ürün Yükleyiniz.</h3> 
                    <?php if(isset($_GET["resimhata"])):  ?>
                        <div><h3>Lütfen Resim Seçiniz</h3></div>
                        <?php endif; ?>
                </div>
                <form action="islem.php" method="post" class="form-control " enctype="multipart/form-data">
                    <h6 style="margin-top:20px; margin-left:30px;" >Ürün Türünü Seçiniz</h6>
                    <select style="margin-top:0px;" placeholder="Ürün Adı" id="urunadi" class="form-control" name="urunadi" required >  
                        <?php while($row1=mysqli_fetch_array($sonuc)): ?>
                        <option name="<?php echo $row1[1]; ?>" value="<?php echo $row1[1]; ?>" > <?php echo $row1[1]; ?></option>
                        <?php endwhile; ?>
                    </select>
                    <input style="margin-bottom:0px;" type="number" placeholder="Ürün Stok Adeti/Kilogramı" id="urunstok" class="form-control" name="urunstok">
                    <div style="margin-left: 30px; margin-top:5px;">
                    <label for="kg">Adet</label>
                    <input name="kg" class="form-check-input" type="radio" value="adet" >
                    <label for="kg">Kilogram</label>
                    <input name="kg" class="form-check-input" type="radio" value="kg" >
                    <label for="kg">Ton</label>
                    <input name="kg" class="form-check-input" type="radio" value="ton" >
                    </div>
                    <input style="width:670px;" type="number" placeholder="Ürün Adet/Kilogram fiyatı" id="urunadi" class="form-control" name="urunfiyat" >
                    <h6 style="margin-top:20px; margin-left:30px;" >Üretim Yerini Seçiniz</h6>
                    <select style="margin-top:3px;" type="text"  placeholder="Üretim Yeri" id="urunaciklama" class="form-control" name="urunuretim" >
                    <?php while($row2=mysqli_fetch_array($sonucc)): ?>
                        <option value="<?php echo $row2[1]; ?>" > <?php echo $row2[1]; ?></option>
                        <?php endwhile; ?>
                    </select>
                    <input type="text" placeholder="Ürün Açıklaması" id="urunaciklama" class="form-control" name="urunaciklama" >
                    <label for="img" >Görsel Seçiniz</label>
                    <input type="file" id="img" name="gorsel" accept="image/*" class="btn btn-primary sm">
                    <input type="text" id="fname" name="ufirstname" value=" <?php echo $_SESSION["username"];  ?> " style="display:none;">
                    <input type="text" id="lname" name="ulastname" value="<?php echo $_SESSION["userlastname"]; ?> " style="display:none;">
                    <input type="text" id="lname" name="id" value="<?php echo $_SESSION["id"]; ?> " style="display:none;">
                    <button class="btn btn-secondary" name="sbmt" method="submit">Ürünü Yükle</button>
                </form>
            </div>
        </div>
        
        </section>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" ></script>
</body>
</html>
