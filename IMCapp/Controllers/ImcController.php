<?php
session_start();
require_once '../Models/ImcModel.php';

$peso = $_POST['peso'] ?? 0;
$altura = $_POST['altura'] ?? 0;

if ($peso <= 0 || $altura <= 0) {
    $_SESSION['error'] = "Valores inválidos!";
    header("Location: ../Views/imc.php");
    exit();
}

$model = new ImcModel($peso, $altura);

$_SESSION['peso'] = $peso;
$_SESSION['altura'] = $altura;
$_SESSION['imc'] = $model->getImc();
$_SESSION['classificacao'] = $model->classificacaoImc();
$_SESSION['recomendacoes'] = $model->recomendacao();

header("Location: ../Views/resultado.php");
exit();
