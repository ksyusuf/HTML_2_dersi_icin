<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Hafta 5</title>

</head>
<body class="w3-container">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="stil.css">

    <div class="header">
      <a href="../haftalar.html" style="text-decoration: none"> <h1><<< GER�</h1></a>
    </div>

    

    <div style="margin-left:8%; margin-top:1%">
        <?php
            /*$numara = $_GET["num"];
            $ad = $_GET["ad"];
            $adres= $_GET["adr"];
            echo "Numara: ".$numara."Ad: ".$ad."Adres: ".$adres
            */

            //php'yi sunucu ya da yerel sunucular yorumlayabiliyor. ona g�re.
            // yani php yorumlay�c�lar bu i�i yapar. sunucular da buna sahip.

            if(isset($_GET["num"])) $numara = $_GET["num"];
            else $numara = "";
            if(isset($_GET["ad"])) $ad= $_GET["ad"];
            else $ad= "";
            if(isset($_GET["adr"])) $adres = $_GET["adr"];
            else $adres = "";
            echo "<h2>HOŞGELDİN &nbsp".$ad."!</h2>";
            echo "Gönderdiğiniz veriler: </br></br>";
            echo "Numara: ".$numara."<br/>";
            echo "Ad: ".$ad."<br/>";
            echo "Adres: ".$adres;
        ?>
    <div>


</body>
</html>