<?php

$id = $_GET["id"];
include("conexiune.php");

$result = mysqli_query($conexiune,"SELECT * FROM elevi WHERE ID = '$id'");
while ($row = mysqli_fetch_array($result)) {

    ?>

    <form action="actions.php?action=edit" method="POST">
        <label>Nume: </label>
        <input type="text" name="nume" value="<?php echo $row['1'];?>"><br>
        <label>Prenume: </label>
        <input type="text" name="prenume" value="<?php echo $row['2'];?>"><br>
        <label>Adresa: </label>
        <input type="text" name="adresa" value="<?php echo $row['3'];?>"><br>
        <label>Email: </label>
        <input type="email" name="email" value="<?php echo $row['4'];?>"><br>
        <label>Data nasterii: </label>
        <input type="date" name="data_nasterii" value="<?php echo $row['5'];?>"><br>
        <label>Sex: </label>
        <input type="text" name="sex" value="<?php echo $row['6'];?>"><br>
        <label>Media BAC: </label>
        <input type="number" step="0.01" name="media_bac" value="<?php echo $row['7'];?>"><br>
        <button type="submit">Actualizeaza</button>
    </form>

    <?php
}

?>