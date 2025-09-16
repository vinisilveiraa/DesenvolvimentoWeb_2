<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF Somente - PHP</title>
</head>
<body>
    <h1>IF - Somente PHP</h1>

    <form action=""> <?php echo htmlspecialchars($SERVER["php_self"]);?>
        <label for="idade"></label>
        <input type="text" id="idade" name="idade">
        <input type="submit" value="verificar" name=verificar>
    </form>
    <p>Voce e considerado</p>

    <?php
        // if(isset($_POST["verificar"] == "POST")
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $_idade = $_POST["idade"];
            $_resultado = "Menor de Idade!";
            
            if ($_idade >= 18) {
                $_resultado = "Menor de Idade!";
                
            }
        }
    ?>

    <p id="resposta"><?= $_resultado?></p>

</body>
</html>