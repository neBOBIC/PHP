<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interogari utilizatori</title>
</head>
<body>
    <div class="inregistrare">
        <h2>Utilizatori inregistrati in ultimele 30 de zile</h2>
        <?php 
            include("conexiune.php");

            $interogare = "SELECT * FROM utilizatori WHERE data_inregistrare >= DATE_SUB(CURDATE(), INTERVAL 30 DAY)";
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
    </div>

    <div class="email">
        <h2>Email cu domeniul .edu</h2>
        <?php 
            include("conexiune.php");

            $interogare = "SELECT * FROM utilizatori WHERE email LIKE '%.edu'";
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
    </div>

    <div class="stergere">
        <h2>Sterge utilizator fara numar telefon</h2>
        <?php 
            include("conexiune.php");

            $interogare = "DELETE FROM utilizatori WHERE nr_telefon IS NULL OR nr_telefon = ''";

            if (mysqli_query($conexiune, $interogare)) {
                echo "Utilizatorii fara numar de telefon au fost stearsi cu succes.";
            } else {
                echo "Eroare la stergerea utilizatorilor: " . mysqli_error($conexiune);
            }

            mysqli_close($conexiune);   
        ?>
    </div>
</body>
</html>