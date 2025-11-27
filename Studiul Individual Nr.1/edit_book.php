<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/edit.css">
    <title>Editare Carte</title>
</head>
<body>
    <h2>Editează Carte</h2>

    <div class="back">
        <div>
            <a href="gestionare_carti.php"><button>Back</button></a>
        </div>
        <div>
            <a href="index.php"><button>Home</button></a>
        </div>
    </div>

    <?php
    include("connexion.php");

    if(isset($_GET['id_carte'])){
        $id = $_GET['id_carte'];
        $interogare = mysqli_query($conexiune, "SELECT * FROM carti WHERE id_carte = '$id'");

        if($row = mysqli_fetch_array($interogare)){
            ?>
            <form action="" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['0']; ?>">

                <label>Titlu:</label>
                <input type="text" name="titlu" required value="<?php echo $row['1']; ?>"><br>

                <label>Autor:</label>
                <input type="text" name="autor" required value="<?php echo $row['2']; ?>"><br>

                <label>Editura:</label>
                <input type="text" name="editura" required value="<?php echo $row['3']; ?>"><br>

                <label>Preț:</label>
                <input type="number" name="pret" required min="0" step="0.01" value="<?php echo $row['4']; ?>"><br>

                <button type="submit">Actualizează</button>
            </form>
            <?php
        } else {
            echo "<p style='color:red;'>Carte inexistentă!</p>";
        }
    }

    if(isset($_POST['id'], $_POST['titlu'], $_POST['autor'], $_POST['editura'], $_POST['pret'])){
        $id_query = $_POST['id'];
        $titlu = $_POST['titlu'];
        $autor = $_POST['autor'];
        $editura = $_POST['editura'];
        $pret = $_POST['pret'];

        if($titlu != "" && $autor != "" && $editura != "" && is_numeric($pret) && $pret > 0){
            $interogare = "UPDATE carti 
                           SET titlu='$titlu', autor='$autor', editura='$editura', pret='$pret' 
                           WHERE id_carte='$id_query'";

            if(mysqli_query($conexiune, $interogare)){
                echo "<p style='color:green;'>Carte editată cu succes!</p>";
                echo "<script>
                        setTimeout(function() {
                            window.location.href = 'gestionare_carti.php';
                        }, 3000);
                      </script>";
            } else {
                echo "<p style='color:red;'>Eroare: ".mysqli_error($conexiune)."</p>";
            }
        } else {
            echo "<p style='color:red;'>Completați toate câmpurile corect și introduceți un preț pozitiv!</p>";
        }
    }

    mysqli_close($conexiune);
    ?>
</body>
</html>
