<?php
// Arquivo: Operacao.php

class Operacao {
    // 1. Atributos (Propriedades Privadas)
    private $valor1;
    private $valor2;

    // Métodos Setters e Getters (Passo 1)
    public function setValor1($valor1) {
        $this->valor1 = $valor1;
    }

    public function getValor1() {
        return $this->valor1;
    }

    public function setValor2($valor2) {
        $this->valor2 = $valor2;
    }

    public function getValor2() {
        return $this->valor2;
    }

    // 2. Métodos de Operações Matemáticas

    // Método para somar (Já fornecido)
    public function somar() {
        $resultado = $this->valor1 + $this->valor2;
        return $resultado;
    }

    // Método para subtrair (Passo 2)
    public function subtrair() {
        $resultado = $this->valor1 - $this->valor2;
        return $resultado;
    }

    // Método para multiplicar (Passo 2)
    public function multiplicar() {
        $resultado = $this->valor1 * $this->valor2;
        return $resultado;
    }

    // Método para dividir (Passo 2)
    public function dividir() {
        if ($this->valor2 == 0) {
            return "Erro: Divisão por zero!";
        }
        $resultado = $this->valor1 / $this->valor2;
        return $resultado;
    }

    // Método para exponenciar (Passo 3)
    public function exponenciar() {
        $resultado = $this->valor1 ** $this->valor2;
        return $resultado;
    }
}
?>
