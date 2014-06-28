<?php
class Aluno {
    public $nome;
    public $matricula;
    public $CPF;
    public $senha;

	public function setNome($nome) {
        $this->$nome = $nome;
        return $this;
    }
    public function setMatricula($matricula) {
        $this->$matricula = $matricula;
        return $this;
    }
    public function setCPF($CPF) {
        $this->$CPF = $CPF;
        return $this;
    }
    public function setSenha($senha) {
        $this->$senha = $senha;
        return $this;
    }
	public function getNome() {
        return $this->$nome;
    }
    public function getMatricula() {
        return $this->$matricula;
    }
    public function getCPF() {
        return $this->$CPF;
    }
    public function getSenha() {
        return $this->$senha;
    }
	public function escolherMaterias(){
        
	}
}