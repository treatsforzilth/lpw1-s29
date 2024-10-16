<?php
class ContaBancaria{
    private int $numConta;
    private string $nome;
    private float $saldo;
    
    public function getNumConta(){
        return $this->numConta;
    }
    public function setNumConta(int $valor){
        $this->numConta = $valor;
    }
    
    public function getNome(){
        return $this->nome;
    }
    public function setNome(string $valor){
        $this->nome = $valor;
    }
    
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo(float $valor){
        $this->saldo = $valor;
    }

    public function depositar(float $valor){
        $this->saldo += $valor;
    }
    public function sacar(float $valor){
        $this->saldo -= $valor;
    }
}
?>
