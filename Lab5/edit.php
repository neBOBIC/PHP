<?php
echo "<link rel='stylesheet' href='form_style.css'>";
$id = $_GET["id"];
include("conexiune.php");

echo "<h2>Editeaza elevi</h2>";

$result = mysqli_query($conexiune,"SELECT * FROM elevi WHERE ID = '$id'");
while ($row = mysqli_fetch_array($result)) {

    ?>

    <form action="actions.php?action=edit" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['0']; ?>">
        <label>Nume: </label>
        <input type="text" name="nume" required value="<?php echo $row['1'];?>"><br>
        <label>Prenume: </label>
        <input type="text" name="prenume" required value="<?php echo $row['2'];?>"><br>
        <label>Adresa: </label>
        <input type="text" name="adresa" required value="<?php echo $row['3'];?>"><br>
        <label>Email: </label>
        <input type="email" name="email" required value="<?php echo $row['4'];?>"><br>
        <label>Data nasterii: </label>
        <input type="date" name="data_nasterii" required value="<?php echo $row['5'];?>"><br>
        <label>Sex: </label>
        <input type="text" name="sex" required value="<?php echo $row['6'];?>"><br>
        <label>Media BAC: </label>
        <input type="number" step="0.01" name="media_bac" minlength="1" maxlength="10" required value="<?php echo $row['7'];?>"><br>
        <button type="submit">Actualizeaza</button>
    </form>

    <?php
}

?>