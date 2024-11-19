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
    <h1>Merhaba</h1>
    <!--Bu alana PHP komutu yazma-->
    <?php
    //Bu bir açıklama satırı. Buraya HTML taglarını direkt yazma.
    #Bu da başka bir açıklama satırı.
    /*Burada çok satırlı açıklama satırı var.
    */
    echo "Dünya";//çift tırnak yerine tek tırnak ta kullanılabilir.
    print "<strong>Bu İlk Sayfam</strong>";//HTML tagları echo veya print komutları içinde kullanılır.
    echo '<br/>Tek tırnak ile yazdık.';
    print '<br/>print ile tek tırnak';
    ?>
</body>
</html>