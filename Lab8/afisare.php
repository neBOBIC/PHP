<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afisare date</title>
</head>
<body>
    <div class="left">
        <h2>Cartile Bibliotecii</h2>
        <?php
            include("conexiune.php");

            $interogare = "SELECT * FROM carti_biblioteca";
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

        <a href="interogari_carti.php"><button>Interogari Carti</button></a>
    </div>

    <div class="right">
        <div class="form">
            <h2>Adauga un utilizator nou</h2>
            <form action="inserare_utilizatori.php" method="POST">
                Nume: <input type="text" name="nume"><br><br>
                Prenume: <input type="text" name="prenume"><br><br>
                Email: <input type="text" name="email"><br><br>
                Telefon: <input type="text" name="nr_telefon"><br><br>
                Data Inregistrare: <input type="date" name="data_inregistrare"><br><br>
                <input type="submit" value="Adauga Utilizator">
            </form>
        </div>

        <div class="afisare">
            <h2>Utilizatorii Bibliotecii</h2>
            <?php
                include("conexiune.php");

                $interogare = "SELECT * FROM utilizatori";
                $rezultat = mysqli_query($conexiune, $interogare);

                echo "<table border='1'>
                        <tr>
                            <th>Nume</th>
                            <th>Prenume</th>
                            <th>Email</th>
                            <th>Numar Telefon</th>
                            <th>Data Inregistrare</th>
                        </tr>";

                while($rand = mysqli_fetch_array($rezultat)) {
                    echo "<tr>";
                    echo "<td>" . $rand['nume'] . "</td>";
                    echo "<td>" . $rand['prenume'] . "</td>";
                    echo "<td>" . $rand['email'] . "</td>";
                    echo "<td>" . $rand['nr_telefon'] . "</td>";
                    echo "<td>" . $rand['data_inregistrare'] . "</td>";
                    echo "</tr>";
                }

                echo "</table>";

                mysqli_close($conexiune);
            ?>

            <a href="interogari_utilizatori.php"><button>Interogari Utilizatori</button></a>
        </div>
    </div>
</body>
</html>