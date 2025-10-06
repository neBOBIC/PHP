<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adaugare</title>
</head>
<body>
    <form action="actions.php?action=add" method="POST">
        <label>Nume: </label>
        <input type="text" name="nume"><br>
        <label>Prenume: </label>
        <input type="text" name="prenume"><br>
        <label>Adresa: </label>
        <input type="text" name="adresa"><br>
        <label>Email: </label>
        <input type="email" name="email"><br>
        <label>Data nasterii: </label>
        <input type="date" name="data_nasterii"><br>
        <label>Sex: </label>
        <input type="text" name="sex"><br>
        <label>Media BAC: </label>
        <input type="number" step="0.01" name="media_bac"><br>
        <button type="submit">Adaugă</button>
    </form>
</body>
</html>