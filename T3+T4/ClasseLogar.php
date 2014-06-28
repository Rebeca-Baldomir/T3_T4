<?php
public class Logar extends Aluno {

    public function validarLogin($matricula, $senha) {
        if ($this->$matricula == $matricula && $this->senha == $senha){
            logar();
        }
        else {
            echo "Falha no login! ):"
        }
    }

    public function logar() {
        echo "Sucesso!"
        /*Mostrar página inicial*/
        header("Location: PaginaInicial.html");
    }

}