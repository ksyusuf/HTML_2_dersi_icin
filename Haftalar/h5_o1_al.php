<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Örnek 1</title>
</head>
<body class="w3-container">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="stil.css">

    <div class="header">
      <a href="../haftalar.html" style="text-decoration: none"> <h1><<< GERÝ</h1></a>
    </div>

    <?php
    /*$numara = $_GET["num"];
    $ad = $_GET["ad"];
    $adres= $_GET["adr"];
    echo "Numara: ".$numara."Ad: ".$ad."Adres: ".$adres
    */

    //php'yi sunucu ya da yerel sunucular yorumlayabiliyor. ona göre.
    if(isset($_GET["num"])) $numara = $_GET["num"];
    else $numara = "";
    if(isset($_GET["ad"])) $ad= $_GET["ad"];
    else $ad= "";
    if(isset($_GET["adr"])) $adres = $_GET["adr"];
    else $adres = "";
    echo "<h2>HOÞGELDÝNÝZ &nbsp".$ad."</h2>";
    echo "Gönderidiðiniz veriler: <br/>";
    echo "Numara: ".$numara."<br/>";
    echo "Ad: ".$ad."<br/>";
    echo "Adres: ".$adres;
    ?>


</body>
</html>