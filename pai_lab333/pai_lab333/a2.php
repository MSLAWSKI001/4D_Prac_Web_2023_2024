<!DOCTYPE html>
<html>
<head>
    <title>Potwierdzenie rezerwacji</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nazwisko = htmlspecialchars($_POST["nazwisko"]);
        $telefon = htmlspecialchars($_POST["telefon"]);
        $sprzet = htmlspecialchars($_POST["sprzet"]);
        $data = htmlspecialchars($_POST["data"]);
        $ilosc = htmlspecialchars($_POST["ilosc"]);
        $uwagi = htmlspecialchars($_POST["uwagi"]);

        $kask = isset($_POST["kask"]) ? "Tak" : "Nie";
        $ubezpieczenie = isset($_POST["ubezpieczenie"]) ? "Tak" : "Nie";

        echo "<h2>Potwierdzenie rezerwacji:</h2>";
        echo "Nazwisko: " . $nazwisko . "<br>";
        echo "Telefon kontaktowy: " . $telefon . "<br>";
        echo "Wybrany sprzęt: " . $sprzet . "<br>";
        echo "Data rezerwacji: " . $data . "<br>";
        echo "Ilość sztuk: " . $ilosc . "<br>";
        echo "Kask ochronny: " . $kask . "<br>";
        echo "Ubezpieczenie sprzętu: " . $ubezpieczenie . "<br>";
        echo "Uwagi: " . nl2br($uwagi) . "<br>";
    }
    ?>
</body>
</html>