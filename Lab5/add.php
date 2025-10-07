<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adaugare</title>
    <link rel='stylesheet' href='form_style.css'>

</head>
<body>
    <h2>Adaugare Elev</h2>
    <form action="actions.php?action=add" method="POST">
        <label>Nume: </label>
        <input type="text" name="nume" required><br>
        <label>Prenume: </label>
        <input type="text" name="prenume" required><br>
        <label>Adresa: </label>
        <input type="text" name="adresa" required><br>
        <label>Email: </label>
        <input type="email" name="email" required><br>
        <label>Data nasterii: </label>
        <input type="date" name="data_nasterii" required><br>
        <label>Sex: </label>
        <input type="text" name="sex" required><br>
        <label>Media BAC: </label>
        <input type="number" step="0.01" name="media_bac" minlength="1" maxlength="10" required><br>
        <button type="submit">Adaugă</button>
    </form>
</body>
</html>