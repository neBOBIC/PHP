<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adaugă Carte</title>
    <link rel="stylesheet" href="styles/add_book.css">
</head>
<body>
    <div class="back">
        <div>
            <a href="gestionare_carti.php"><button>Back</button></a>
        </div>
        <div>
            <a href="index.php"><button>Home</button></a>
        </div>
    </div>
    <div class="form-container">
        <h2>Adaugă o carte nouă</h2>
        <form action="" method="POST">
            <label for="titlu">Titlu:</label>
            <input type="text" id="titlu" name="titlu" required>

            <label for="autor">Autor:</label>
            <input type="text" id="autor" name="autor" required>

            <label for="editura">Editura:</label>
            <input type="text" id="editura" name="editura" required>

            <label for="pret">Preț:</label>
            <input type="number" id="pret" name="pret" min="0" step="0.01" required>

            <button type="submit">Adaugă carte</button>
        </form>
    </div>

    <?php
        include("connexion.php");

        if(isset($_POST['titlu'], $_POST['autor'], $_POST['editura'], $_POST['pret'])){
            $titlu = $_POST['titlu'];
            $autor = $_POST['autor'];
            $editura = $_POST['editura'];
            $pret = $_POST['pret'];

            if($titlu != "" && $autor != "" && $editura != "" && is_numeric($pret) && $pret > 0){

                $interogare = "INSERT INTO carti (titlu, autor, editura, pret) VALUES ('$titlu', '$autor', '$editura', '$pret')";

                if(mysqli_query($conexiune, $interogare)){
                    echo "<p style='color:green;'>Carte adăugată cu succes!</p>";
                    echo "<script>
                            setTimeout(function() {
                                window.location.href = 'gestionare_carti.php';
                            }, 3000);
                          </script>";
                } else {
                    echo "<p style='color:red;'>Eroare la inserare: ".mysqli_error($conexiune)."</p>";
                }

            } else {
                echo "<p style='color:red;'>Completați toate câmpurile corect și introduceți un preț pozitiv!</p>";
            }
        }

        mysqli_close($conexiune);
    ?>
</body>
</html>
