<?php

class ImcModel
{
    private float $peso;
    private float $altura;
    private float $imc;

    public function __construct(float $peso, float $altura)
    {
        $this->peso = $peso;
        $this->altura = $altura;
        $this->imc = $this->calcularImc();
    }

    public function calcularImc(): float
    {
        return $this->peso / ($this->altura * $this->altura);
    }

    public function classificacaoImc(): string
    {
        $imc = $this->imc;

        if ($imc < 18.5) {
            return "Abaixo do Peso Normal";
        } elseif ($imc < 25) {
            return "Peso Normal";
        } elseif ($imc < 30) {
            return "Sobrepeso";
        } elseif ($imc < 35) {
            return "Obesidade Grau I";
        } elseif ($imc < 40) {
            return "Obesidade Grau II";
        } else {
            return "Obesidade Grau III";
        }
    }

    public function recomendacao(): string
    {
        return ($this->imc >= 25)
            ? "Sim precisa fazer regime"
            : "Não precisa fazer regime";
    }

    public function getImc(): float
    {
        return $this->imc;
    }
}
