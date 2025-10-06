<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Operatii CRUD</title>
</head>
<body>
    <h1>Tabelul elevi</h1>
    <div class="table">
        <?php 
            include("conexiune.php");

            $sql = mysqli_query($conexiune,"SELECT * FROM `elevi`");

            echo "<a href='add.php'>Adauga elev<img src='img/add.png'></a>";

            echo "<table border=1>";

            echo "<tr>
                    <th>Nume</th>
                    <th>Prenume</th>
                    <th>Adresa</th>
                    <th>Email</th>
                    <th>Data Nasterii</th>
                    <th>Sex</th>
                    <th>Media BAC</th>
                    <th colspan=2>Actiuni</th>
                  </tr>";

            while ($row = mysqli_fetch_array($sql)) {
                echo "<tr>
                        <td>$row[1]</td>
                        <td>$row[2]</td>
                        <td>$row[3]</td>
                        <td>$row[4]</td>
                        <td>$row[5]</td>
                        <td>$row[6]</td>
                        <td>$row[7]</td>
                        <td><a href='edit.php?id=" . $row[0] . "'><img src='img/edit.png'></a></td>
                        <td>
                            <a href='actions.php?action=delete&id=" . $row[0] . "'
                            onclick=\"return confirm('Sunteți sigur că vreți să ștergeți acest elev?')\">
                            <img src='img/delete.png'></a>
                        </td>
                    </tr>";
            }

            echo "</table>";
            mysqli_close($conexiune);
        ?>
        </div>
</body>
</html>