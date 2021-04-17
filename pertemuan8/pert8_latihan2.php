<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>
<html>

<head>
    <title>Contoh Penggunaan UDF</title>
</head>

<body>
    <! Menentukan Form Input>
        <form method="POST">
            Masukkan Bilangan Pertama : <br>
            <input type="text" name="A" size=10><br>
            Masukkan Bilangan Kedua : <br>
            <input type="text" name="B" size=10><br>
            <input type="submit" value="hitung">
        </form>
        <!membandingkan 2 buah bilangan yang diinput>
            <?php
            $a = $_POST["A"];
            $b = $_POST["B"];
            function jumlah($a, $b)
            {
                $jumlahbil = $a + $b;
                return $jumlahbil;
            }
            function kurang($a, $b)
            {
                $kurangbil = $a - $b;
                return $kurangbil;
            }
            function kali($a, $b)
            {
                $kalibil = $a * $b;
                return $kalibil;
            }
            function bagi($a, $b)
            {
                $bagibil = $a / $b;
                return $bagibil;
            }
            echo "<br>";
            echo ("Bilangan Pertama : ");
            echo $a;
            echo "<br>";
            echo ("Bilangan Kedua : ");
            echo $b;
            echo "<br><br>";
            echo "Hasil Penjumlahan 2 buah bilangan ";
            echo "<br>";
            $jumlahbil = &jumlah($a, $b);
            Printf("Penjumlahan antara : %d + %d = %d ", $a, $b, $jumlahbil);
            echo "<br><br>";
            echo "Hasil Pengurangan 2 buah bilangan ";
            echo "<br>";
            $kurangbil = &kurang($a, $b);
            Printf("Pengurangan antara : %d - %d = %d ", $a, $b, $kurangbil);
            echo "<br><br>";
            echo "Hasil Perkalian 2 buah bilangan ";
            echo "<br>";
            $kalibil = &kali($a, $b);
            Printf("Perkalian antara : %d * %d = %d ", $a, $b, $kalibil);
            echo "<br><br>";
            echo "Hasil Pembagian 2 buah bilangan ";
            echo "<br>";
            $bagibil = &bagi($a, $b);
            Printf("Pembagian antara : %d / %d = %d ", $a, $b, $bagibil);
            echo "<br><br>";
            ?>
</body>

</html>