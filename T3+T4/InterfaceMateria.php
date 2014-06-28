<?php 
interface Materia{
	public $nome;
	public $aluno;
	public $listaMatriculados = array();
	public $disponibilidade;
	public function matricular($aluno);
	public function validarMatricula();
}