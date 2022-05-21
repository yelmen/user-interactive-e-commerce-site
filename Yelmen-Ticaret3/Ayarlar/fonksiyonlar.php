<?php 
$ipAdresi= $_SERVER['REMOTE_ADDR'];
$zamanDamgasi= time();
$tarihSaat= date("d.m.Y H:i:s", $zamanDamgasi);


function Guvenlik($deger){
    $boslukSil=trim($deger);
    $taglariTemizle=strip_tags($boslukSil);
    $etkisizlestir= htmlspecialchars($taglariTemizle);
    $sonuc= $etkisizlestir;
    return $sonuc;

}





?>