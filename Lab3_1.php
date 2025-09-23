<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Media de concurs</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

        *{
            padding: 0;
            margin : 0;
            box-sizing: border-box;
        }

        .container{
            width: 60%;
            margin: auto;
        }

        h1{
            font-family: Montserrat;
            font-weight: 600;
            text-align: center;
            padding: 20px 0px 20px 0px;
        }

        h3{
            font-family: Montserrat;
            font-weight: 500;
            font-size: 1rem;
            color: darkcyan;
            padding: 20px 0px 20px 0px;
        }

        label{
            font-family: Montserrat;
            color: #909692;
            padding: 10px 0px 10px 0px;
        }

        input{
            background-color: #dfe8e1;
            border: 4px #909692;
            width: 200px;
            height: 40px;
            padding: 5px;
            font-family: Montserrat;
            color: #333;
        }

        .note{
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .form-group{
            display: flex;
            flex-direction: column;
        }

        .examen{
            display: flex;
            justify-content: space-between;
        }

        button{
            height: 100%;
            width: 16vw;
            background-color: crimson;
            font-family: Montserrat;
            font-weight: 800;
            font-size: 20px;
            color: white;
            border: 0px;
        }

        .result {
        display: inline;
        margin-top: 40px;
        border: 2px solid black;
        padding: 20px;
        background-color: #f8f8f8;
        color: black;
        font-style: italic;
    }

    .container{
        position: relative;
        padding-top: 30px;
    }
    </style>

</head>
<body>
<div class="container">
    <h1>Calzuleazăți media de concurs într-un mod simplu și rapid</h1>

    <h3>Notele anuale la 4 disciplini de profil</h3>

        <form method = "POST" id="form1">
            <div class="note">
                <div class="form-group">
        <label for="l-instruire">Limba de instruire:</label>
        <input type="number" step="0.01" min="1" max="10" name="lang1" id="l-instruire" required>
    </div>

    <div class="form-group">
        <label for="l-straina">Limba străină (en/fr):</label>
        <input type="number" step="0.01" min="1" max="10" name="lang2" id="l-straina" required>
    </div>

    <div class="form-group">
        <label for="matematica">Matematica:</label>
        <input type="number" step="0.01" min="1" max="10" name="mate" id="matematica" required>
    </div>

    <div class="form-group">
        <label for="profil">Informatica / Istoria:</label>
        <input type="number" step="0.01" min="1" max="10" name="prof" id="profil" required>
    </div>

        </div>

        <h3>Media notelor la examenele de absolvire</h3>
            <div class="examen">
                <div>
                    <label for="l-straina">MNEA(ex: 9.33 nu <s>9,33</s>):</label><br>
                    <input type="number" step="0.01" min="1" max="10" name="mnea" id="mnea" required>
                </div>
                <div>
                    <button type="submit">Calculează</button>
                </div>
            </div>
    </form>
    </div>

    <?php

    $result = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST["lang1"]) && isset($_POST["lang2"]) && isset($_POST["mate"]) && isset($_POST["prof"]) && isset($_POST["mnea"])){
                $lang1 = (float)$_POST['lang1'];
                $lang2 = (float)$_POST['lang2'];
                $mate = (float)$_POST['mate'];
                $prof = (float)$_POST['prof'];
                $mnea = (float)$_POST['mnea'];

                $mndp = floatval(($lang1 + $lang2 + $mate + $prof) / 4);
                $rez = floatval(0.6 * $mndp + 0.4 * $mnea);

                $result = "<span>" . $rez . "</span>";
            }
        }
    ?>

<div class="container">
    <h2 class="result">Media dumneavoastră de concurs este:
    <?php
    echo $result;
    ?>
    </h2>
    </div>
</body>
</html>