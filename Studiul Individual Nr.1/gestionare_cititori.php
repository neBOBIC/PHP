<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/book.css">
    <title>Gestionare Cititori</title>
</head>
<body>

<div class="back">
    <a href="index.php"><button>Home</button></a>
</div>

<div class="table">
    <a href="add_reader.php"><img src="img/add.png" alt="">Adauga Cititor</a>
    <?php
        include("connexion.php");

        $interogare = mysqli_query($conexiune, "SELECT * FROM `cititori`");
        
        echo "<table border = 1>
            <tr>
                <th>Nume</th>
                <th>Prenume</th>
                <th>Adresa</th>
                <th>Telefon</th>
                <th>Carte Imprumutata</th>
                <th>Data Imprumut</th>
                <th>Data Returnare</th>
                <th>Actiuni</th>
            </tr>";

            while($row = mysqli_fetch_array($interogare)){
                echo "<tr>
                        <td>$row[1]</td>
                        <td>$row[2]</td>
                        <td>$row[3]</td>
                        <td>$row[4]</td>
                        <td>$row[5]</td>
                        <td>$row[6]</td>
                        <td>$row[7]</td>
                        <td><a href='gestionare_cititori.php?id_cititor=" . $row[0] . "'
                            onclick=\"return confirm('Sunteți sigur că vreți să ștergeți acest cititor?')\">
                            <img src='img/delete.png'></a> 
                            <a href='edit_reader.php?id_cititor=" . $row[0] ."'><img src='img/edit.png'></td></a>
                    </tr>";
            }

            echo "</table>";
    ?>
    </div>

    <?php
    include("connexion.php");

    if(isset($_GET['id_cititor'])){
    $id = $_GET['id_cititor'];
    $interogare = "DELETE FROM cititori WHERE id_cititor = '$id'";
    
    if(!mysqli_query($conexiune, $interogare)){
        die(mysqli_error($conexiune));
    } else {
        echo "Cititor sters cu succes";
        echo "<script>
                setTimeout(function() {
                    window.location.href = 'gestionare_cititori.php';
                }, 3000);
              </script>";
    }
}

    ?>
</body>
</html>