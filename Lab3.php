<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post">
        <label for="latime">Introdu latimea: </label>
        <input type="text" name="latime" id="latime">
        <br>
        <label for="lungime">Introdu lungimea</label>
        <input type="text" name="lungime" id="lungime">
        <br>
        <button type="submit">Calculeaza</button>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $lat = $_POST["latime"];
        $lng = $_POST["lungime"];
        $perimetru = 2 * ($lat + $lng);
        $aria = $lat * $lng;
        
        echo "<p>Perimetrul este: $perimetru</p>";
        echo "<p>Aria este: $aria</p>";
    }
    ?>
</body>
</html>