<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/edit.css">
    <title>Editare Cititor</title>
</head>
<body>
    <h2>Editează Cititor</h2>

    <div class="back">
        <div>
            <a href="gestionare_cititori.php"><button>Back</button></a>
        </div>
        <div>
            <a href="index.php"><button>Home</button></a>
        </div>
    </div>

    <?php
        include("connexion.php");

        if(isset($_GET['id_cititor'])){
            $id = $_GET['id_cititor'];

            $interogare = mysqli_query($conexiune, "SELECT * FROM cititori WHERE id_cititor = '$id'");
            if($row = mysqli_fetch_array($interogare)){

                $carte_selectata = $row['id_carte'];
                ?>
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row['0']; ?>">

                    <label>Nume:</label>
                    <input type="text" name="nume" required value="<?php echo $row['1']; ?>"><br>

                    <label>Prenume:</label>
                    <input type="text" name="prenume" required value="<?php echo $row['2']; ?>"><br>

                    <label>Adresă:</label>
                    <input type="text" name="adresa" required value="<?php echo $row['3']; ?>"><br>

                    <label>Telefon:</label>
                    <input type="text" name="telefon" required value="<?php echo $row['4']; ?>"><br>

                    <label>Carte Împrumutată:</label>
                    <select name="carte" required>
                        <option value="">-- Alege o carte --</option>
                        <?php
                        $carti = mysqli_query($conexiune, "SELECT id_carte, titlu FROM carti");
                        while($c = mysqli_fetch_array($carti)){
                            $selected = ($c['id_carte'] == $carte_selectata) ? "selected" : "";
                            echo "<option value='" . $c['id_carte'] . "' $selected>" . $c['titlu'] . "</option>";
                        }
                        ?>
                    </select><br>

                    <label>Data Împrumut:</label>
                    <input type="date" name="date1" required value="<?php echo $row['6']; ?>"><br>

                    <label>Data Returnare:</label>
                    <input type="date" name="date2" value="<?php echo $row['7']; ?>"><br>

                    <button type="submit">Actualizează</button>
                </form>
                <?php
            } else {
                echo "<p style='color:red;'>Cititor inexistent!</p>";
            }
        }

        if(isset($_POST['id'], $_POST['nume'], $_POST['prenume'], $_POST['adresa'], $_POST['telefon'], $_POST['carte'], $_POST['date1'])){
        $id_query = $_POST['id'];
        $nume = $_POST['nume'];
        $prenume = $_POST['prenume'];
        $adresa = $_POST['adresa'];
        $telefon = $_POST['telefon'];
        $carte = $_POST['carte'];
        $date1 = $_POST['date1'];
        $date2 = $_POST['date2'];

        if (!empty($date2) && !empty($date1)) {
            if ($date2 < $date1) {
                echo "<p style='color:red;'>Data returnării nu poate fi înainte de data împrumutului!</p>";
                exit();
            }
        }



    if($nume != "" && $prenume != "" && $adresa != "" && $telefon != "" && $carte != "" && $date1 != ""){
        $interogare = "UPDATE cititori 
                       SET nume='$nume', prenume='$prenume', adresa='$adresa', telefon='$telefon', id_carte='$carte', 
                           data_imprumut='$date1', data_returnare='$date2' 
                       WHERE id_cititor='$id_query'";

        if(mysqli_query($conexiune, $interogare)){
            echo "<p style='color:green;'>Cititor editat cu succes!</p>";
            echo "<script>
                    setTimeout(function() {
                        window.location.href = 'gestionare_cititori.php';
                    }, 3000);
                  </script>";
        } else {
            echo "<p style='color:red;'>Eroare: ".mysqli_error($conexiune)."</p>";
        }
    } else {
        echo "<p style='color:red;'>Completați toate câmpurile și selectați o carte!</p>";
    }
}
        mysqli_close($conexiune);
    ?>
</body>
</html>
