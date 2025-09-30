<?php 
include("conexiune.php");

$sql = mysqli_query($conexiune,"SELECT * FROM `elevi` WHERE Varsta < 18");

echo "<h1>Lista elevilor ce au vârsta mai mică decât 18 ani</h1>";

echo "<table border = 1>";

echo "<tr>
        <td>Nume</td>
        <td>Prenume</td>
        <td>Grupa</td>
        <td>Sex</td>
        <td>Media BAC</td>
        <td>Varsta</td>
      </tr>";

while ($row = mysqli_fetch_array($sql)) {
    echo "<tr>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>$row[4]</td>
            <td>$row[5]</td>
            <td>$row[6]</td>
        </tr>";
}

echo "</table>";

mysqli_close($conexiune);
?>