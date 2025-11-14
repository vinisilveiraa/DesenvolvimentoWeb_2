<?php
session_start();

$altura = $_SESSION['altura'];
$peso = $_SESSION['peso'];
$imc = $_SESSION['imc'];
$classificacao = $_SESSION['classificacao'];
$recomendacoes = $_SESSION['recomendacoes'];

$corClassificacao = "";

switch ($classificacao) {
    case "Abaixo do Peso Normal":
        $corClassificacao = "#E91C1D";
        break;
    case "Peso Normal":
        $corClassificacao = "#B7CD26";
        break;
    case "Sobrepeso":
        $corClassificacao = "#F3B703";
        break;
    case "Obesidade Grau I":
        $corClassificacao = "#F39206";
        break;
    case "Obesidade Grau II":
        $corClassificacao = "#EC581D";
        break;
    case "Obesidade Grau III":
        $corClassificacao = "#C6181C";
        break;
}

$corRecomendacoes = "";

switch ($recomendacoes) {
    case "Sim precisa fazer regime":
        $corRecomendacoes = "bg-danger";
        break;
    case "Não precisa fazer regime":
        $corRecomendacoes = "bg-success";
        break;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Resultados Finais</title>

    <style>
        .form-label {
            font-size: 1.2rem;
        }
    </style>
</head>

<body>
    <h1 class="text-center">
        Resultados Finais:
    </h1>
    <div class="d-flex justify-content-center">
        <div class="container mb-3 mt-3">
            <label for="valor_altura" class="form-label"><strong>Altura:</strong> <?php echo $altura ?>m </label>
            <br>
            <label for="valor_peso" class="form-label"><strong>Peso:</strong> <?php echo $peso ?>kg</label>
            <br>
            <label for="valor_imc" class="form-label"><strong>IMC:</strong> <?php echo $imc ?>kg/m ²</label>
            <caption>
                <legend class="text-left">Tabela de Classificação do IMC</legend>
            </caption>
            <table class="table table-primary table-striped">
                <thead>
                    <tr>
                        <th>Classificação</th>
                        <th>IMC</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Abaixo do Peso Normal</td>
                        <td>Abaixo de 19</td>
                    </tr>
                    <tr>
                        <td>Peso Normal</td>
                        <td>19,1 - 24,9</td>
                    </tr>
                    <tr>
                        <td>Sobrepeso</td>
                        <td>25 - 25,9</td>
                    </tr>
                    <tr>
                        <td>Obesidade Grau I</td>
                        <td>30 - 34,9</td>
                    </tr>
                    <tr>
                        <td>Obesidade Grau II</td>
                        <td>35 - 39,9</td>
                    </tr>
                    <tr>
                        <td>Obesidade Grau III ou<br>Obesidade Mórbida </td>
                        <td>Maior ou Igual a 40</td>
                    </tr>
                </tbody>
            </table>
            <p><strong>Resultado do IMC:</strong></p>
            <div class="container mb-3 mt-3" style="background-color: <?= $corClassificacao ?>">
                <p id="classificacao"><strong><?= $classificacao ?></strong></p>
            </div>
            <!-- <p><strong>Exemplos:</strong>
                <br>=> O IMC é igual a 18, portanto, você está na faixa de "Abaixo do Peso Normal". Background da div igual a #E91C1D.
                <br>=> O IMC é igual a 22, portanto, você está na faixa de "Peso Normal". Background da div igual a #B7CD26.
                <br>=> O IMC é igual a 25, portanto, você está na faixa de "Sobrepeso". Background da div igual a #F3B703.
                <br>=> O IMC é igual a 32, portanto, você está na faixa de Obesidade Grau I". Background da div igual a #F39206.
                <br>=> O IMC é igual a 36, portanto, você está na faixa de Obesidade Grau II". Background da div igual a #EC581D.
                <br>=> O IMC é igual a 47, portanto, você está na faixa de Obesidade Grau III". Background da div igual a #C6181C.
            </p> -->
            <p><strong>Recomendação:</strong></p>
            <div class="container mb-3 mt-3 <?= $corRecomendacoes ?> text-light">
                <p id="recomendacao"><?= $recomendacoes ?></p>
            </div>
            <!-- <p><strong>Exemplos:</strong>
                <br>=> "Sim precisa fazer regime", caso o usuário tenha o IMC maior ou igual a 25 e com Background da div igual a vermelho, ou;
                <br>=> "Não precisa fazer regime", caso o usuário tenha o IMC menor que 25 e com Background da div igual a verde.
            </p> -->
        </div>
    </div>
</body>

</html>