<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
    $degisken="100 yıllardır özgürüz.";
    echo "değişkenin değeri $degisken degişken türü ".gettype($degisken)."<br/>";
    //$degisken=(int) $degisken;#Tip dönüşümü için birinci yöntem
    settype($degisken,"int");
    echo "değişkenin değeri $degisken degişken türü ".gettype($degisken)."<br/>";
    ?>
</body>
</html>