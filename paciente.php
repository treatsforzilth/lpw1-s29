<?php
class Paciente{
    private string $nome;
    private int $idade;
    private array $historico;
    
    public function getNome(){
        return $this->nome;
    }
    public function setNome(string $valor){
        $this->nome = $valor;
    }
    
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade(string $valor){
        $this->idade = $valor;
    }
    
    public function getHistorico(){
        $lista = "";
        for($i = 0; $i < count($this->historico); $i++){
            $lista .= $this->historico[$i] . "<br>";
        }
        return $lista;
    }
    public function addConsulta(string $valor){
        $this->historico[] = $valor;
    }
    
}
?>
