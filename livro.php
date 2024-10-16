<?php
class Livro{
    private string $titulo;
    private string $autor;
    private int $paginas;
    private bool $disponivel = true;

    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo(string $valor){
        $this->titulo = $valor;
    }

    public function getAutor(){
        return $this->autor;
    }
    public function setAutor(string $valor){
        $this->autor = $valor;
    }

    public function getPaginas(){
        return $this->paginas;
    }
    public function setPaginas(int $valor){
        $this->paginas = $valor;
    }

    public function emprestar(){
        if($this->disponivel == true){
            $this->disponivel = false;
        }else{
            return;
        }
    }
    public function devolver(){
        if($this->disponivel == false){
            $this->disponivel = true;
        }else{
            return;
        }
    }
    public function getDisponivel(){
        return $this->disponivel;
    }
}
?>
