<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/book.css">
    <title>Gestionare Cărți</title>
</head>
<body>

<div class="back">
    <a href="index.php"><button>Home</button></a>
</div>

<div class="table">
    <a href="add_book.php"><img src="img/add.png" alt="">Adauga Carte</a>
    <?php
        include("connexion.php");

        $interogare = mysqli_query($conexiune, "SELECT * FROM `carti`");
        
        echo "<table border = 1>
            <tr>
                <th>Titlu</th>
                <th>Autor</th>
                <th>Editura</th>
                <th>Pret</th>
                <th>Actiuni</th>
            </tr>";

            while($row = mysqli_fetch_array($interogare)){
                echo "<tr>
                        <td>$row[1]</td>
                        <td>$row[2]</td>
                        <td>$row[3]</td>
                        <td>$row[4]</td>
                        <td><a href='gestionare_carti.php?id_carte=" . $row[0] . "'
                            onclick=\"return confirm('Sunteți sigur că vreți să ștergeți acest elev?')\">
                            <img src='img/delete.png'></a> 
                            <a href='edit_book.php?id_carte=" . $row[0] ."'><img src='img/edit.png'></td></a>
                    </tr>";
            }

            echo "</table>";
    ?>
    </div>

    <?php
    include("connexion.php");

    if(isset($_GET['id_carte'])){
    $id = $_GET['id_carte'];
    $interogare = "DELETE FROM carti WHERE id_carte = '$id'";
    
    if(!mysqli_query($conexiune, $interogare)){
        die(mysqli_error($conexiune));
    } else {
        echo "Carte ștearsă cu succes";
        echo "<script>
                setTimeout(function() {
                    window.location.href = 'gestionare_carti.php';
                }, 3000);
              </script>";
    }
}

    ?>
</body>
</html>