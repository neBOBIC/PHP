<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="fiction">
        <h2>Carti Fictiune</h2>
        <?php 
            include("conexiune.php");

            $interogare = "SELECT * FROM carti_biblioteca WHERE gen_literar = 'Fictiune'";
            $rezultat = mysqli_query($conexiune, $interogare);

            echo "<table border='1'>
                    <tr>
                        <th>Titlu</th>
                        <th>Autor</th>
                        <th>Gen Literar</th>
                        <th>An Publicare</th>
                        <th>Numar pagini</th>
                        <th>Desriere</th>
                        <th>Disponibilitate</th>
                    </tr>";

            while($rand = mysqli_fetch_array($rezultat)) {
                echo "<tr>";
                echo "<td>" . $rand['titlu_carte'] . "</td>";
                echo "<td>" . $rand['autor'] . "</td>";
                echo "<td>" . $rand['gen_literar'] . "</td>";
                echo "<td>" . $rand['an_publicare'] . "</td>";
                echo "<td>" . $rand['nr_pagini'] . "</td>";
                echo "<td>" . $rand['descriere'] . "</td>";
                echo "<td>" . $rand['stare_disponibilitate'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";

            mysqli_close($conexiune);
        ?>
    </div>

    <div class="year">
        <h2>Carti publicate dupa 2010</h2>
        <?php 
            include("conexiune.php");

            $interogare = "SELECT * FROM carti_biblioteca WHERE an_publicare > 2010";
            $rezultat = mysqli_query($conexiune, $interogare);

            echo "<table border='1'>
                    <tr>
                        <th>Titlu</th>
                        <th>Autor</th>
                        <th>Gen Literar</th>
                        <th>An Publicare</th>
                        <th>Numar pagini</th>
                        <th>Desriere</th>
                        <th>Disponibilitate</th>
                    </tr>";

            while($rand = mysqli_fetch_array($rezultat)) {
                echo "<tr>";
                echo "<td>" . $rand['titlu_carte'] . "</td>";
                echo "<td>" . $rand['autor'] . "</td>";
                echo "<td>" . $rand['gen_literar'] . "</td>";
                echo "<td>" . $rand['an_publicare'] . "</td>";
                echo "<td>" . $rand['nr_pagini'] . "</td>";
                echo "<td>" . $rand['descriere'] . "</td>";
                echo "<td>" . $rand['stare_disponibilitate'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";

            mysqli_close($conexiune);
        ?>
    </div>

    <div class="imprumut">
        <h2>Carti cu mai mult de 300 pagini disponibile pentru imprumut</h2>
        <?php 
            include("conexiune.php");

            $interogare = "SELECT * FROM carti_biblioteca WHERE nr_pagini > 300 AND stare_disponibilitate = 1";
            $rezultat = mysqli_query($conexiune, $interogare);

            echo "<table border='1'>
                    <tr>
                        <th>Titlu</th>
                        <th>Autor</th>
                        <th>Gen Literar</th>
                        <th>An Publicare</th>
                        <th>Numar pagini</th>
                        <th>Desriere</th>
                        <th>Disponibilitate</th>
                    </tr>";

            while($rand = mysqli_fetch_array($rezultat)) {
                echo "<tr>";
                echo "<td>" . $rand['titlu_carte'] . "</td>";
                echo "<td>" . $rand['autor'] . "</td>";
                echo "<td>" . $rand['gen_literar'] . "</td>";
                echo "<td>" . $rand['an_publicare'] . "</td>";
                echo "<td>" . $rand['nr_pagini'] . "</td>";
                echo "<td>" . $rand['descriere'] . "</td>";
                echo "<td>" . $rand['stare_disponibilitate'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";

            mysqli_close($conexiune);
        ?>
    </div>

    <div class="stergere">
        <h2>Stergerea cartilor fara autor</h2>
        <?php 
            include("conexiune.php");

            $interogare = "DELETE FROM carti_biblioteca WHERE autor IS NULL OR autor = ''";
            $rezultat = mysqli_query($conexiune, $interogare);

            if($rezultat) {
                echo "<p>Cartile fara autor au fost sterse cu succes.</p>";
            } else {
                echo "<p>Eroare la stergerea cartilor fara autor: " . mysqli_error($conexiune) . "</p>";
            }

            mysqli_close($conexiune);
        ?>
    </div>
</body>
</html>