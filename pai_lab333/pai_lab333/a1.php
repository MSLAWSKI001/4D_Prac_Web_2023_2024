<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles.css">
<title>Formularz – Rezerwacja Sprzętu Sportowego</title>
</head>
<body>

<header><h1>Panel Rezerwacji</h1></header>

<nav class="top">
<ul>
    <li><a href="a1.php">FORMULARZ A1</a></li>
    <li><a href="index.php?pion=1&poziom=1">Poziom 1</a></li>
    <li><a href="index.php?pion=1&poziom=2">Poziom 2</a></li>
    <li><a href="index.php?pion=1&poziom=3">Poziom 3</a></li>
</ul>
</nav>

<section class="main">
<nav class="left">
<ul>
    <li><a href="index.php?pion=1&poziom=1">Pion 1</a></li>
    <li><a href="index.php?pion=2&poziom=1">Pion 2</a></li>
    <li><a href="index.php?pion=3&poziom=1">Pion 3</a></li>
    
</ul>
</nav>

<article>
<form method="post" action="a2.php">

<label for="nazwisko">Nazwisko:</label>
<input type="text" id="nazwisko" name="nazwisko"><br>

<label for="telefon">Telefon kontaktowy:</label>
<input type="tel" id="telefon" name="telefon"><br>

<label for="sprzet">Wybierz sprzęt do wypożyczenia:</label>
<select id="sprzet" name="sprzet">
<option value="rower">Rower górski</option>
<option value="narty">Narty</option>
<option value="kayak">Kajak</option>
</select><br>

<label for="data">Data rezerwacji:</label>
<input type="date" id="data" name="data"><br>

<label for="ilosc">Ilość sztuk:</label>
<input type="number" id="ilosc" name="ilosc" min="1" max="10"><br>

<label>Opcje dodatkowe:</label>
<input type="checkbox" id="kask" name="kask" value="kask">
<label for="kask">Kask ochronny</label>

<input type="checkbox" id="ubezpieczenie" name="ubezpieczenie" value="ubezpieczenie">
<label for="ubezpieczenie">Ubezpieczenie sprzętu</label><br>

<label for="uwagi">Uwagi dodatkowe:</label><br>
<textarea id="uwagi" name="uwagi" rows="4" cols="40"></textarea><br>

<input type="submit" value="Zarezerwuj">

</form>
</article>
</section>

<footer>Data wykonania: Czas:</footer>

</body>
</html>