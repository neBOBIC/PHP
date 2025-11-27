<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adaugă Cititor</title>
    <link rel="stylesheet" href="styles/add_book.css">
</head>
<body>
    <div class="back">
        <div>
            <a href="gestionare_cititori.php"><button>Back</button></a>
        </div>
        <div>
            <a href="index.php"><button>Home</button></a>
        </div>
    </div>

    <div class="form-container">
        <h2>Adaugă un cititor nou</h2>
        <form action="" method="POST">
            <label for="nume">Nume:</label>
            <input type="text" id="nume" name="nume" required>

            <label for="prenume">Prenume:</label>
            <input type="text" id="prenume" name="prenume" required>

            <label for="adresa">Adresă:</label>
            <input type="text" id="adresa" name="adresa" required>

            <label for="telefon">Telefon:</label>
            <input type="text" id="telefon" name="telefon" required pattern="[0-9]{6,15}" title="Introduceți un număr de telefon valid">

            <label for="carte">Carte Împrumutată:</label>
            <select id="carte" name="carte_id" required>
                <option value="">-- Alege o carte --</option>
                <?php
                include("connexion.php");
                $query = mysqli_query($conexiune, "SELECT id_carte, titlu FROM carti");
                while($row = mysqli_fetch_assoc($query)){
                    echo '<option value="' . $row['id_carte'] . '">' . $row['titlu'] . '</option>';
                }
                ?>
            </select>

            <label for="date1">Data Împrumut:</label>
            <input type="date" id="date1" name="date1" required>

            <label for="date2">Data Returnare:</label>
            <input type="date" id="date2" name="date2">

            <button type="submit">Adaugă cititor</button>
        </form>
    </div>

    <?php
    if(isset($_POST['nume'], $_POST['prenume'], $_POST['adresa'], $_POST['telefon'], $_POST['carte_id'], $_POST['date1'], $_POST['date2'])) {

    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $adresa = $_POST['adresa'];
    $telefon = $_POST['telefon'];
    $carte_id = $_POST['carte_id'];
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];

    if (!empty($date2) && !empty($date1)) {
            if ($date2 < $date1) {
                echo "<p style='color:red;'>Data returnării nu poate fi înainte de data împrumutului!</p>";
                exit();
            }
        }

    $interogare = "INSERT INTO cititori (nume, prenume, adresa, telefon, id_carte, data_imprumut, data_returnare)
                   VALUES ('$nume', '$prenume', '$adresa', '$telefon', '$carte_id', '$date1', '$date2')";

    if(mysqli_query($conexiune, $interogare)){
        echo "<p style='color:green;'>Cititorul a fost adăugat cu succes!</p>";
        echo "<script>
                setTimeout(function() {
                    window.location.href = 'gestionare_cititori.php';
                }, 3000);
              </script>";
    } else {
        echo "<p style='color:red;'>Eroare: " . mysqli_error($conexiune) . "</p>";
    }
}
    mysqli_close($conexiune);
    ?>
</body>
</html>