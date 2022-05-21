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
    <link rel="stylesheet" href="scripts-css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script type="text/javascript" src="FrameWorks/jquery/jquery-3.6.0.min.js" language="javascript"></script>
    <script type="text/javascript" src="Ayarlar/fonksiyonlar.js" language="javascript"></script>
    <title>Yelmen Ticaret </title>
</head>
<body>

    <section id="header">
        <a href="index.php"><img src="Resimler/dv7y2020140912020-02-243524491M2-removebg-preview (2).png" class="logo"></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Anasayfa</a></li>
                <li><a href="alisveris.php">Alışveriş</a></li>
                <li><a href="firsatlar.php">İndirimdekiler</a></li>
                <li><a href="urunler1">Yeni Ürünler</a></li>
                <li><a href="iletisim.php">İletişim</a></li>
                <li <?php if(!isset($_SESSION["email"])):?> style="display:none;" <?php endif ?> ><a href="urunSayfalari/sepetim.php"><i class="fa fa-shopping-bag" ></i></a></li>
                <li <?php if(isset($_SESSION["email"])):?> style="display:none;" <?php endif ?> ><a href="girisyap.php"><i class="fa fa-shopping-bag" ></i></a></li>
                <li <?php if(!isset($_SESSION["email"])):?> style="display:none";
                <?php endif ?> ><a href="profil.php" ><i class="fad fa-user"></i></a></li>
                <li  <?php if(isset($_SESSION["email"])):?> style="display:none";
                <?php endif ?>  ><a href="girisyap.php"><i class="fad fa-user"></i></a></li>
            </ul>
        </div>
    </section>
    <section id="anagorsel">
        <h4>Hızlı ve Güvenilir</h4>
        <h2>Yiyeceklerinizi daha ucuza almak</h2>
        <h2>Artık mümkün</h2>
        <button>Alışverişe Başla</button>
    </section>
    <div class="conatiner">
        <div class="wrap">
            <div class="box bir">
                <div class="date">
                </div>
                <h1>En Çok Satanlar</h1>
                <div class="poster p1">
                </div>
            </div>
            
            <div class="box iki">
                <div class="date">
                </div>
                <H1>İndirimdekiler</H1>
                <div class="poster p2">
                </div>
            </div>
            
            <div class="box uc">
                <div class="date">
                </div>
                <h1>Hızlı Alışveriş</h1>
                <div class="poster p3">
                </div>
            </div>
            
            <div class="box dort">
                <div class="date">
                </div>
                <h1>Yeni Ürünler</h1>
                <div class="poster p4">
                </div>
            </div>
            
            
        </div>
    </div>
    <section id="urunler1" class="section-p1">
        <h2>Ürünler</h2>
        <div class="urun-icerik">
            <a href="urunSayfalari/ureticilerpatates.php">
                <div class="urunler">
                    <img src="Resimler/urunler/ornekresim_3.jpeg " alt="">
                    <div class="aciklama">
                        <span>Patates</span>
                        <h5>Niğde Patatesi</h5>
                        <div class="yildiz">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h6>Ortalama Fiyat</h6>
                        <h4>4₺ Kilo</h4>
                    </div>
                    <a href="urunSayfalari/ureticilerpatates.php"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
            </a> 
            <div class="urunler">
                <a href="urunSayfalari/ureticiarmut.php">
                    <img src="Resimler/urunler/armut.png" alt="">
                    <div class="aciklama">
                        <span>Armut</span>
                        <h5>Armut</h5>
                        <div class="yildiz">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h6>Ortalama Fiyat</h6>
                        <h4>2.5₺ Kilo</h4>
                    </div>
                    <a href="urunSayfalari/ureticiarmut.php"><i class="fal fa-shopping-cart cart"></i></a>
                </a>
            </div>
            <div class="urunler">
                <a href="urunSayfalari/ureticibiber.php">
                        <img src="Resimler/urunler/biber.png" alt="">
                        <div class="aciklama">
                            <span>Biber</span>
                            <h5>Biber</h5>
                            <div class="yildiz">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h6>Ortalama Fiyat</h6>
                            <h4>4₺ Kilo</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </a>
            </div>
            <div class="urunler">
                <a href="urunSayfalari/ureticidomates.php">
                        <img src="Resimler/urunler/domates-removebg-preview.png" alt="">
                        <div class="aciklama">
                            <span>Domates</span>
                            <h5>Domates</h5>
                            <div class="yildiz">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h6>Ortalama Fiyat</h6>
                            <h4>3₺ Kilo</h4>
                        </div>
                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                    </a>      
            </div>
            <div class="urunler">
                <a href="urunSayfalari/ureticielma.php">
                    <img src="Resimler/urunler/elma.png" alt="">
                    <div class="aciklama">
                        <span>Elma</span>
                        <h5>Amasya Elması</h5>
                        <div class="yildiz">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h6>Ortalama Fiyat</h6>
                        <h4>2₺ Kilo</h4>
                    </a>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="urunler">
                <a href="urunSayfalari/ureticipatlican.php">
                    <img src="Resimler/urunler/ornekresim_4.png" alt="">
                    <div class="aciklama">
                        <span>Patlıcan</span>
                        <h5>Patlıcan</h5>
                        <div class="yildiz">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h6>Ortalama Fiyat</h6>
                        <h4>6₺ Kilo</h4>
                    </a>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        </div>
    </section>
    <section id="banner" class="section-m1">
        <h4>Fırsatlar</h4>
         <h2>Açılışa Özel Tüm Ürünlerde <span>50 ₺</span>  ve Üzeri Alışverişlerde Kargo Ücretsiz</h2> 
        <button class="normal">Alışverişe Başla</button>
    </section>
    <section id="urunler1" class="section-p1">
        <h2>Yeni Ürünler</h2>
        <div class="urun-icerik">
            <div class="urunler">
                <img src="Resimler/urunler/ornekresim_3.jpeg" alt="">
                <div class="aciklama">
                    <span>Patates</span>
                    <h5>Niğde Patatesi</h5>
                    <div class="yildiz">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>4₺ Kilo</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="urunler">
                <img src="Resimler/urunler/armut.png" alt="">
                <div class="aciklama">
                    <span>Armut</span>
                    <h5>Kırıkkale Armutu</h5>
                    <div class="yildiz">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>2.5₺ Kilo</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="urunler">
                <img src="Resimler/urunler/armut.png" alt="">
                <div class="aciklama">
                    <span>Armut</span>
                    <h5>Kırıkkale Armutu</h5>
                    <div class="yildiz">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>2.5₺ Kilo</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="urunler">
                <img src="Resimler/urunler/armut.png" alt="">
                <div class="aciklama">
                    <span>Armut</span>
                    <h5>Kırıkkale Armutu</h5>
                    <div class="yildiz">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>2.5₺ Kilo</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="urunler">
                <img src="Resimler/urunler/armut.png" alt="">
                <div class="aciklama">
                    <span>Armut</span>
                    <h5>Kırıkkale Armutu</h5>
                    <div class="yildiz">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>2.5₺ Kilo</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="urunler">
                <img src="Resimler/urunler/armut.png" alt="">
                <div class="aciklama">
                    <span>Armut</span>
                    <h5>Kırıkkale Armutu</h5>
                    <div class="yildiz">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>2.5₺ Kilo</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="urunler">
                <img src="Resimler/urunler/biber.png" alt="">
                <div class="aciklama">
                    <span>Biber</span>
                    <h5>Ayaş Biberi</h5>
                    <div class="yildiz">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>4₺ Kilo</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="urunler">
                <img src="Resimler/urunler/domates-removebg-preview.png" alt="">
                <div class="aciklama">
                    <span>Domates</span>
                    <h5>Ayaş Domatesi</h5>
                    <div class="yildiz">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>3₺ Kilo</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="urunler">
                <img src="Resimler/urunler/elma.png" alt="">
                <div class="aciklama">
                    <span>Elma</span>
                    <h5>Amasya Elması</h5>
                    <div class="yildiz">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>2₺ Kilo</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="urunler">
                <img src="Resimler/urunler/kabak.jpg" alt="">
                <div class="aciklama">
                    <span>Kabak</span>
                    <h5>Kabak</h5>
                    <div class="yildiz">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>6₺ Kilo</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="urunler">
                <img src="Resimler/urunler/karnabahar.jpg" alt="">
                <div class="aciklama">
                    <span>Karnabahar</span>
                    <h5>Karnabahar</h5>
                    <div class="yildiz">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>6₺ Kilo</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="urunler">
                <img src="Resimler/urunler/kivi.jpg" alt="">
                <div class="aciklama">
                    <span>Kivi</span>
                    <h5>Kivi</h5>
                    <div class="yildiz">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>6₺ Kilo</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="urunler">
                <img src="Resimler/urunler/muz.jpg" alt="">
                <div class="aciklama">
                    <span>Muz</span>
                    <h5>Muz</h5>
                    <div class="yildiz">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>3.5₺ Kilo</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="urunler">
                <img src="Resimler/urunler/ornekresim_2.png" alt="">
                <div class="aciklama">
                    <span>Portakal</span>
                    <h5>Adana Portakalı</h5>
                    <div class="yildiz">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>4₺ Kilo</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        </div>
    </section>
    <section id="yarimfoto" class="section-p1">
        <div class="yarimbanner">
            <h4>Fırsatlar</h4>
            <h2>2 Al 1 Öde</h2>
            <span>Bugüne özel 2 Al 1 Öde Fırsatını Kaçırma</span>
            <button class="beyaz">Alışverişe Başla</button>
        </div>
        <div class="yarimbanner yarimbanner2">
            <h4>Fırsatlar</h4>
            <h2>%50 İndirim</h2>
            <span>Bugüne özel 100 tl ve üzeri alışverişlerinizde 50 tl hediye!</span>
            <button class="beyaz">Alışverişe Başla</button>
        </div>
    </section>
    <section id="uclufoto">
        <div class="yarimbanner">
            <h2>En Çok Satanlar</h2>
            <h3>Yaz Mevsiminin Favorileri</h3>
        </div>
        <div class="yarimbanner yarimbanner2">
            <h2>En Çok Satanlar</h2>
            <h3>Yaz Mevsiminin Favorileri</h3>
        </div>
        <div class="yarimbanner yarimbanner3">
            <h2>En Çok Satanlar</h2>
            <h3>Yaz Mevsiminin Favorileri</h3>
        </div>
    </section>
    <section id="indirimfirsatlar" class="section-p1" style="margin-top: 80px;">
        <div class="indirimtext">
            <h4> Fırsatlar ve İndirimlerden Haberdar Olmak İçin</h4>
            <p>E-mail adresinizi girerek özel fırsatlardan ve <span>indirim kuponlarından</span> yararlanabilirsiniz</p>
        </div>
        <div class="form">
            <input type="text" placeholder="Lütfen E-mail adresinizi giriniz">
            <button class="normal">
                Kayıt Ol
            </button>
        </div>
    </section>
    <footer class="section-p1">
        <div class="col">
            <img src="Resimler/logomuz).png" alt="" style="height:70px; width:80px; margin-bottom: 20px;">
            <h4>İletişim</h4>
            <p><strong>Adres : </strong>Topçu Mahallesi 1534.sokak 24/22 <br><strong>Telefon: </strong>0554 863 4430</p>
            <div class="takip">
                <h4>Bizi Takip Edin</h4>
                <div class="icon">
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-github"></i>
                    <i class="fab fa-facebook-f"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>Yelmen Ticaret</h4>
            <a href="#">Hakkımızda</a>
            <a href="#">Teslimat Bilgileri</a>
            <a href="#">Gizlilik Politikası</a>
            <a href="#">Koşullar ve Şartlar</a>
            <a href="#">Bizimle İletişime Geç</a>
        </div>
        <div class="col">
            <h4>Hesabım</h4>
            <a href="#">Giriş Yap</a>
            <a href="#">Sepetim</a>
            <a href="#">Favorilerim</a>
            <a href="#">Sipariş Takibi</a>
            <a href="#">Yardım</a>
        </div>
        <div class="col indir">
            <h4>Mobil Uygulamamızı Yükle</h4>
            <p>Google Play Store veya App Storde'dan mobil uygulamamızı indir</p>
            <div class="row">
                <img src="Resimler/download-on-app-store-icon-24-removebg-preview.png" >
            </div>
            <h5>Ödeme Yöntemleri</h5>
            <img src="Resimler/png-clipart-mastercard-visa-credit-card-paypal-logo-mastercard-text-display-advertising-removebg-preview.png" style="height:150px; width:550px" >
        </div>
        <div class="telifhaklari">
            <p>2022- Yelmen Ticaret- Tüm Telif Hakları Saklıdır.</p>
        </div>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>

