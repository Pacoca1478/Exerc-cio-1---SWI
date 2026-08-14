<?php
// Arquivo: index.php

// Passo 4: Importar a classe e instanciar o objeto
require_once 'Operacao.php';
$calculadora = new Operacao();

// Passo 5: Definir os valores numéricos usando os Setters
$calculadora->setValor1(5.0); // Exemplo de valor 1
$calculadora->setValor2(3.0); // Exemplo de valor 2

// Passo 6: Chamar os 5 métodos e exibir os resultados com quebra de linha <br>
echo "Valor 1: " . $calculadora->getValor1() . " | Valor 2: " . $calculadora->getValor2() . "<br><br>";

echo "Soma: " . $calculadora->somar() . "<br>";
echo "Subtração: " . $calculadora->subtrair() . "<br>";
echo "Multiplicação: " . $calculadora->multiplicar() . "<br>";
echo "Divisão: " . $calculadora->dividir() . "<br>";
echo "Exponenciação: " . $calculadora->exponenciar() . "<br>";
?>
