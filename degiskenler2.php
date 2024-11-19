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
    $degisken="MMYO";
    echo "Değişkenin değeri $degisken değişkenin türü ".gettype($degisken)."<br/>";
    $degisken=25;
    echo "Değişkenin değeri $degisken değişkenin türü ".gettype($degisken)."<br/>";
    $degisken=1.05;
    echo "Değişkenin değeri $degisken değişkenin türü ".gettype($degisken)."<br/>";
    $degisken=TRUE;
    echo "Değişkenin değeri $degisken değişkenin türü ".gettype($degisken)."<br/>";
    ?>
</body>
</html>