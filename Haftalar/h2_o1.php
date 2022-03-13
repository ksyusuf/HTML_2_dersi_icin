<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hafta 2</title>
</head>
<body class="w3-container">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="stil.css">

    <div class="header">
      <a href="../haftalar.html" style="text-decoration: none"> <h1><<< GERİ</h1></a>
    </div>

    <!-- @@@@@@@@  RENDER BODY BAŞLANGICI @@@@@@@@ -->
    

    <?php

        $dizi = array("veri 1", "veri 2", "veri 3", "veri 4", );

        foreach ($dizi as $değer) {
            echo $değer."<br><br>";
        }

    ?>

    BU VERİLER FOREACH DÖNGÜSÜ İLE OLUŞTURULMUŞTUR


    
    <!-- @@@@@@@@  RENDER BODY BİTİŞİ @@@@@@@@ -->

</body>
</html>