<?php
class Aluno{
    private string $nome;
    private string $matricula;
    private array $notas;
    
    public function getNome(){
        return $this->nome;
    }
    public function setNome(string $valor){
        $this->nome = $valor;
    }
    
    public function getMatricula(){
        return $this->matricula;
    }
    public function setMatricula(string $valor){
        $this->matricula = $valor;
    }
    
    public function getNotas(){
        $out = "";
        for($i = 0; $i < count($this->notas); $i++){
            $out .= $this->notas[$i] . "<br>";
        }
        return $out;
    }
    public function addNota(string $valor){
        $this->notas[] = $valor;
    }
    
    public function media(){
        $media = 0;
        for($i = 0; $i < count($this->notas); $i++){
            $media += $this->notas[$i];
        }
        return $media / count($this->notas);
    }
    
    public function situacao(){
        if($this->media() < 6){
            return false ? "aprovado" : "reprovado";
        }else{
            return true ? "aprovado" : "reprovado";
        }
    }
}
?>
