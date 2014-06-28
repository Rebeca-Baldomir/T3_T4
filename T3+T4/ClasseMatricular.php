<?php
require 'InterfaceMateria.php';
require 'ClasseAluno.php';
class Matricular extends Aluno implements Materia{

    public $materia = new Materia;
    public function setMateria($nome) {
        $materia->$nome = $nome;
        return $nome;
    }

    public function getMateria() {
        return $materia->$nome;
    }

    public function validarMatricula($aluno){
        /*Ver se o aluno existe no banco de dados*/
        matricular($aluno);

    }

    public function matricular($aluno){

        if ($materia->$disponibilidade >= 1) {
            $materia->$listaMatriculados[] = $aluno;
            echo "Matriculado!"
        }
        else{
            echo "A matéria não está disponível! ):";
        }

    }
}