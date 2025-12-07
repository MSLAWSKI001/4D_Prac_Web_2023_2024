<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>De praca</title>
</head>
<body>
	<?php
		$Uno = 1;
		$Dos = 1;
		
		if (isset($_GET['pion']) && isset($_GET['poziom'])) {
			$Uno = $_GET['pion'];
			$Dos = $_GET['poziom'];
		}
	
		echo "
			<header>
				<h1>Igor Paluch 98405  Jacek Niedzielski 213767</h1>
			</header>
			<nav class='top'>
				<ul>
				    <li><a href='a1.php'>FORMULARZ A1</a></li>
					<li><a href='./index.php?pion=$Uno&poziom=1'>Poziom 1</a></li>
					<li><a href='./index.php?pion=$Uno&poziom=2'>Poziom 2</a></li>
					<li><a href='./index.php?pion=$Uno&poziom=3'>Poziom 3</a></li>
				</ul>
			</nav>
			<main class='main'>
				<nav class='left'>
					<ul>
						<li><a href='./index.php?pion=1&poziom=$Dos'>Pion 1</a></li>
						<li><a href='./index.php?pion=2&poziom=$Dos'>Pion 2</a></li>
						<li><a href='./index.php?pion=3&poziom=$Dos'>Pion 3</a></li>
						
					</ul>
				</nav>
				<article>
		";
					if ($Uno == 1 && $Dos == 1) {
						echo "
							<p class='level'>Wybrano poziom 1 pion 1</p>
							<p>Igor Paluch 098405</p>
							<p>Jacek Niedzielski 0213767</p>
						";
					}
					elseif ($Uno == 1 && $Dos == 2) {
    echo '
        	<p class="level">Wybrano poziom 2 pion 1</p>
        <h2 id="naglowek_glowny">Formatowanie tekstu z użyciem class i id</h2>

        <p class="akapit">
            To jest przykładowy akapit z podstawowym formatowaniem. Jest on
            ostylowany poprzez klasę <strong>akapit</strong>.
        </p>

        <p id="wyroznienie_id">
            Ten akapit jest wyróżniony za pomocą selektora <strong>#id</strong>.
        </p>

        <p class="czerwony_tekst pogrubiony_tekst">
            Ten tekst ma jednocześnie <em>dwie klasy</em>: <strong>czerwony_tekst</strong> i <strong>pogrubiony_tekst</strong>.
        </p>

        <span class="ramka">
            Ten element <strong>span</strong> ma klasę "ramka" — posiada obramowanie.
        </span>
        <br><br>

        <div class="info_box">
            To jest DIV z klasą <strong>info_box</strong>. Zawiera kolorowe tło, zaokrąglone rogi oraz marginesy.
        </div>

        <p>
            Zobacz także 
            <a id="link_specjalny" href="#">specjalny link</a>,
            ostylowany również za pomocą id.
        </p>
    ';
}
					elseif ($Uno == 1 && $Dos == 3) {
    echo "
        <p class='level-title'>Wybrano poziom 3 pion 1 </p>
        
        <div class='demo-padding'>Przykład Padding</div>
        <div class='demo-border'>Przykład Border</div>
        <div class='demo-margin'>Przykład Margin</div>
        <div class='demo-size'>Minimalna i maksymalna szerokość</div>
        <div class='demo-overflow'>Overflow Overflow Overflow Overflow Overflow Overflow</div>
    ";
}
					elseif ($Uno == 2 && $Dos == 1) {
						header("Location: https://tu.kielce.pl");
					}
					elseif ($Uno == 2 && $Dos == 2) {
						echo "
							<p class='level'>Wybrano poziom 2 pion 2</p>			
								<img src='./img/mango.png' alt='mango'  height='500px' width='500px'>
								<img src='./img/67.png' alt='67'  height='500px' width='500px'>
								<img src='./img/wojanek.png' alt='obrazek' height='500px' width='500px' >
								<img src='./img/krzesło.jpg' alt='krzeslo' height='500px' width='500px'  >
						";
					}
					elseif ($Uno == 2 && $Dos == 3) {

   
    $wynik = "";

    if (isset($_POST['rzut'])) {

        
        $g1 = rand(1, 6);
        $g2 = rand(1, 6);
        $k1 = rand(1, 6);
        $k2 = rand(1, 6);

        $gracz = $g1 + $g2;
        $komp  = $k1 + $k2;

        
        if ($gracz > $komp) {
            $wynik = "<p class='result win'>Wygrałeś! ($gracz do $komp)</p>";
        } elseif ($gracz < $komp) {
            $wynik = "<p class='result lose'>Przegrałeś! ($gracz do $komp)</p>";
        } else {
            $wynik = "<p class='result tie'>Remis! ($gracz do $komp)</p>";
        }
    }

    echo "
        <p class='level'>Wybrano poziom 3 pion 2</p>
        <h3>Gra: Rzut dwoma kostkami </h3>
        <p>Gra Pan przeciwko komputerowi. Obie strony rzucają 2 kostkami. Ta której wynik będzie wiekszy wygrywa</p>

        <div class='game-box'>

            <form method='post' class='dice-form'>
                <button type='submit' name='rzut' class='btn-roll'>Rzuć kostkami!</button>
            </form>

            $wynik

            <div class='play-area'>

                <div class='panel'>
                    <div class='who'>Ty</div>
                    <p>Kostka 1: " . (isset($g1) ? $g1 : "-") . "</p>
                    <p>Kostka 2: " . (isset($g2) ? $g2 : "-") . "</p>
                    <p class='sum'>" . (isset($gracz) ? "Suma: $gracz" : "") . "</p>
                </div>

                <div class='panel'>
                    <div class='who'>Komputer</div>
                    <p>Kostka 1: " . (isset($k1) ? $k1 : "-") . "</p>
                    <p>Kostka 2: " . (isset($k2) ? $k2 : "-") . "</p>
                    <p class='sum'>" . (isset($komp) ? "Suma: $komp" : "") . "</p>
                </div>

            </div>
        </div>
    ";
}
					elseif ($Uno == 3 && $Dos == 1) {
						echo "
							 <p class='level'>Wybrano poziom 1 pion 3</p>
						";
					}
					elseif ($Uno == 3 && $Dos == 2) {
						echo "
							<p class='level'>Wybrano poziom 2 pion 3</p>
						";
					}
					elseif ($Uno == 3 && $Dos == 3) {
						echo "
							<p class='level'>Wybrano poziom 3 pion 3</p>
						";
					}

		echo "
				</article>
			</main>
			<footer>Stopka Data: 17.11.2025</footer>
		
		";
	?>
</body>
</html>



