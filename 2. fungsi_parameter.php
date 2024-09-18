<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width+device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php 
        //membuat fungsi
        function perkenalan(){
            echo "Halooo, <br/>";
            echo "Perkenalan, nama saya Ardianta<br/>";
            echo "Senang berkenalan dengan anda<br/>";
        }
        //memanggil fungsi yang sudah dibuat
        perkenalan("Muhardian", "Hi");

        echo "<hr>";

        $saya = "Indry";
        $ucapanSalam = "Selamat pagi";
        //memanggilnya lagi
        perkenalan($saya, $ucapanSalam);
        ?>
    </body>
</html>