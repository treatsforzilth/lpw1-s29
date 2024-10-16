<?php
class Funcionario{
    private string $nome;
    private float $salario;
    private string $cargo;
    
    public function getNome(){
        return $this->nome;
    }
    public function setNome(string $valor){
        $this->nome = $valor;
    }
    
    public function getSalario(){
        return $this->salario;
    }
    public function setSalario(float $valor){
        $this->salario = $valor;
    }
    public function getSalarioLiq(float $porImposto, float $porBonus){
        return $this->salario - ($this->salario * ($porImposto / 100)) + ($this->salario * ($porBonus / 100));
    }
    
    public function getCargo(){
        return $this->cargo;
    }
    public function setCargo(string $valor){
        $this->cargo = $valor;
    }
}
?>
