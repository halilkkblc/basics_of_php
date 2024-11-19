<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Değişken Tanımlama</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
    $adi="Mutlu";//String değişken tek tırnak ta kullanılabilirdi.
    $soyadi='YALI';
    $sayi=125;#Tam sayı değişken int
    $ondalik=5.123;#float ondalık sayı
    $mantik=TRUE;#boolean değişken
    echo $adi."<br/>";#nokta metin birleştirme karakteri
    print $sayi.'<br/>';
    echo "Adı Soyadı: $adi $soyadi <br/>";//Print ilede olur
    echo 'Adı Soyadı: $adi $soyadi <br/>';#Tek tırnak içinde bu şekilde yazılamaz.
    print 'Adı Soyadı: '.$adi.' '. $soyadi.' <br/>';
    echo "\$adi= $adi, \$soyadi= $soyadi <br/>";# ters bölü özel karakterleri yazdırmak için kullanılır.
    ?>
</body>
</html>