<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Prognoza pogody Wrocław</title>
</head>
<body>
    <link rel="stylesheet" href="styl2.css">
    <header>
    <aside class = "lewy1">
    <img src="logo.png" alt="meteo">
    </aside>
    <nav>
    <h1>Prognoza dla Wrocławia</h1>
    </nav>
    <aside class = "prawy1">
    <p>maj, 2019 r.</p>
    </aside>
    </header>
   
    
    
    <main>
    <table>
    <tr><th>DATA</th><th>TEMPERATURA NOCY</th><th>TEMPERATURA W DZIEN</th><th>OPADY</th><th>CISNIENIE</th></tr>
        <?php
        $con = mysqli_connect("localhost","root","","prognoza");
        $query = "SELECT * FROM `pogoda` WHERE `miasta_id` = 1 ORDER BY `data_prognozy`";
        $result = mysqli_query($con,$query);
        while ($row = mysqli_fetch_array ($result))
        {
            echo "<tr>";
            echo "<td>".$row['data_prognozy']."</td>";
            echo "<td>".$row['temperatura_noc']."</td>";
            echo "<td>".$row['temperatura_dzien']."</td>";
            echo "<td>".$row['opady']."</td>";
            echo "<td>".$row['cisnienie']."</td>";
            echo "</tr>";
        }
    
    mysqli_close($con)
    ?>
    </table>
    </main>
    <aside class = "lewy2">
    <img src="obraz.jpg" alt="Polska, Wrocław">
    </aside>
    <aside class = "prawy2">
    <a href="kwerendy.txt">Pobierz kwerendy</a>
    </aside>
    <footer>
    <p>Stronę wykonał:Michał Sławski</p>
    </footer>
</body>
</html>