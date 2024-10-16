<?php
require("paciente.php");
require("livro.php");
require("aluno.php");
require("funcionario.php");
require("contabancaria.php");

$paciente = new Paciente();
$paciente->setNome("Annika");
$paciente->setIdade(17);
$paciente->addConsulta("15/07/2019");
$paciente->addConsulta("15/10/2020");
$paciente->addConsulta("01/03/2021");

echo $paciente->getNome() . "<br>";
echo $paciente->getIdade() . "<br>";
echo $paciente->getHistorico();


echo "<hr>";


$livro = new Livro();
$livro->setTitulo("Nyarlathotep");
$livro->setAutor("H.P. Lovecraft");
$livro->setPaginas(32);

echo $livro->getTitulo() . "<br>";
echo $livro->getAutor() . "<br>";
echo $livro->getPaginas() . " páginas<br>";
$livro->emprestar();
echo $livro->getDisponivel() ? 'disponível' : 'emprestado' . "<br>";
$livro->devolver();
echo $livro->getDisponivel() ? 'disponível' : 'emprestado' . "<br>";


echo "<hr>";


$aluno = new Aluno();
$aluno->setNome("Dahlia");
$aluno->setMatricula("3992385");
$aluno->addNota(9);
$aluno->addNota(6);
$aluno->addNota(8);
$aluno->addNota(3);

echo $aluno->getNome() . "<br>";
echo $aluno->getMatricula() . "<br>";
echo $aluno->getNotas() . "<br>"; //[sic]
echo $aluno->media() . "<br>";
echo $aluno->situacao();


echo "<hr>";


$funcionario = new Funcionario();
$funcionario->setNome("Eleanor");
$funcionario->setSalario(500);
$funcionario->setCargo("Desenvolvedora web");

echo $funcionario->getNome() . "<br>";
echo $funcionario->getCargo() . "<br>";
echo $funcionario->getSalarioLiq(40, 10);


echo "<hr>";


$conta = new ContaBancaria();
$conta->setNumConta(39546);
$conta->setNome("Flores");
$conta->setSaldo(19.47);

echo $conta->getNumConta() . "<br>";
echo $conta->getNome() . "<br>";
echo $conta->getSaldo() . "<br>";

$conta->depositar(50);
$conta->sacar(0.05);
echo $conta->getSaldo();
?>
