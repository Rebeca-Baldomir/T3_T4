<?php
require 'InterfaceMateria.php';
require 'ClasseAluno.php';
class Ajustar implements Materia extends Aluno{
	public function setAluno($aluno) {
        $aluno->nome = $nome;
        return $aluno;
    }
    public function setMateria($materia) {
        $this->$materia = $materia;
        return $this;
    }
    public function setDisponibilidade($disponibilidade) {
        $this->$disponibilidade = $disponibilidade;
        return $this;
    }
	public function getAluno() {
        return $aluno;
    }
	public function getMateria() {
        return $this->$materia;
    }
	public function getDisponibilidade() {
        return $this->$disponibilidade;
    }
    public function ajustar(){

    }
    public function retornarResultado(){
        $resultado = fopen("Matriculados.txt", "w+");
        fwrite($resultado, "Alunos Matriculados na Disciplina: ");
        $tam_array = sizeof($listaMatriculados);
        for($cont = 0; $cont > $tam_array; $cont++) {
            fwrite($resultado, '$cont'. $aluno->matricula);
        }
        fclose($resultado);
    }
}