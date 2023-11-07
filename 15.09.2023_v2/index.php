<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Sklep dla uczniów</title>
</head>
<body>
    <link rel="stylesheet" href="styl.css">
    <header>
    <h1>Dzisiejsze promocje naszego sklepu</h1>
    </header>
    <main>
        <aside class = "lewy">
        <h2>Taniej o 30%</h2>
        <ol>
        <?php
        $con = mysqli_connect('localhost','root','','sklep');
        $q = "SELECT `nazwa` FROM `towary` WHERE `promocja`=1;";
        $result = mysqli_query($con,$q);
    while ($row = mysqli_fetch_array($result))
    {
        echo "<li>".$row[0]."</li>";
    }
        ?>
         </ol>
        </aside>
        <div class = 'srodkowy'>
        <h2>Sprawdź cenę</h2>
        <form action="index.php" method="post">
            <select name="produkty" >
                <option value="Gumka do mazania">Gumka do mazania</option>
                <option value="Cienkopis">Cienkopis</option>
                <option value="Pisaki 60 szt.">Pisaki 60szt</option>
                <option value="Markery 4 szt.">Markery 4 szt.</option>
            </select>
            <button type="submit">SPRAWDŹ</button>
        </form>
        <div id = 'wynik'>
            <?php
            if(!empty($_POST))
            {
            $produkty = $_POST['produkty'];
            $q2 = "SELECT `cena`,(cena * 0.7) FROM `towary` WHERE `nazwa`like'$produkty';";
            $result2 = mysqli_query($con,$q2);
            while ($row2 = mysqli_fetch_array($result2))
                {
                    $zao = round($row2[1],2);
                    echo"
                    cena regularna: $row2[0]</br>
                    cena w promocji 30%: $zao ";
                }
            }
            mysqli_close($con);
            ?>
        </div>
        </div>
        <aside class = "prawy">
        <h2>Kontakt</h2>
        <p>e-mail: <a href="mailto:">bok@sklep.pl</a> </p>
        <img src="promocja.png" alt="promocja">
        </aside>
    </main>
    <footer>
        <h4>Autor  strony:052105021</h4>
    </footer> 
</body>
</html>