<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex9php</title>
</head>

<body>
    <a href="/LEJP-ViniciusLeonardoSilveira/index.html">voltar pro index</a> <br><br>

    <form action="" method="post">
        <h1>Decimais Arredondados:</h1>
        <label for="decimal">insira um numero decimal</label>
        <input type="text" name="decimal">
        <br>
        <button name="enviar">Enviar</button>
        <br><br>
    </form>
</body>

</html>

<?php

    if (isset($_POST['decimal'])) {
        $d = str_replace(",", ".", $_POST['decimal']);
        $d = (float)$d;
        
        if (($d - floor($d)) > 0.5) {
            $resultado = ceil($d);
        }
        if (($d - floor($d)) < 0.5) {
            $resultado = floor($d);
        }
        if (($d - floor($d)) == 0.5) {
            $resultado = $d;
        }
        echo "O numero arredondado e de: $resultado";

        $alt = round($d);
        echo "<br> Round: $alt";
    }