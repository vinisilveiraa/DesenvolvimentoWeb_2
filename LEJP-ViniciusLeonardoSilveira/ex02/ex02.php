<!-- 
    Leia um nome completo, email, telefone e idade.
    Exiba como no exemplo: 
    "Nome Completo tem Idade anos. Seu email: nome.sobrenome@email.com e telefone: (014) 99102-3456
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex1-php</title>
</head>
<body>

    <a href="/LEJP-ViniciusLeonardoSilveira/index.html">voltar pro index</a> <br><br>

    <form action="" method="post" name="">
        <label for="valor1">Insira 1 numero:</label>
        <input type="text" name="valor1">
        <label for="valor2">Insira 2 numero:</label>
        <input type="text" name="valor2">    <br><br>
        
        <button name="operacao" value="somar">somar</button>
        <button name="operacao" value="subtrair">sutrair</button>
        <button name="operacao" value="multiplicar">multiplicar</button>
        <button name="operacao" value="dividir">dividir</button>
        
        <input type="reset" name="reset">
    </form>
</body>
</html>

    <?php



        if (isset($_POST['operacao'])) {
            $v1 = ($_POST['valor1']);
            $v2 = ($_POST['valor2']);
            $op = $_POST['operacao'];
            $resultado = null;

            if ($v1 != null && $v2 != null) {
                switch ($op) {
                    case "somar":
                        $resultado = $v1 + $v2;
                    break;
                    case "subtrair":
                        $resultado = $v1 - $v2;
                    break;
                    case "multiplicar":
                        $resultado = $v1 * $v2;
                    break;
                    case "dividir":
                        if ($v2 != 0) {
                            $resultado = $v1 / $v2;
                        } else {
                            $resultado = "Erro: divisão por zero!";
                        }
                    break;
                }
                echo"<br> O resultado do <strong>$op</strong> e: <strong>$resultado</strong>";
            } else {
                echo"Erro: Preencha ambos os campos!";
            }
        }

    ?>