<?php
require_once 'Operacao.php';
$calculadora = new Operacao();

$calculadora->setValor1(5.0);
$calculadora->setValor2(3.0);

echo "Valor 1: " . $calculadora->getValor1() . " | Valor 2: " . $calculadora->getValor2() . "<br><br>";

echo "Soma: " . $calculadora->somar() . "<br>";
echo "Subtração: " . $calculadora->subtrair() . "<br>";
echo "Multiplicação: " . $calculadora->multiplicar() . "<br>";
echo "Divisão: " . $calculadora->dividir() . "<br>";
echo "Exponenciação: " . $calculadora->exponenciar() . "<br>";
?>
