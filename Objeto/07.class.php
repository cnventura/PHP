<?php
//crie um arquivo chamada: 07.class.php
//criar uma classe Pai com construtor
class Pai
{
    function __construct()
    {
        $this->saudacao = "seja bem vindo";
        print "Este é o construtor de classe: " . $this->saudacao . "<br>";
    }

    /*
Destutor: '__destruct()' um método especial que é executado quando o objeto é destruído, útil para liberar recursos ou realizar tarefa de limpeza.
$this: Referência ao próprio objeto, usada para acessar propriedade e métodos.
*/


    function __destruct()
    {
        print "Este destroi  de classe: " . $this->saudacao . "<br>";
    }
}
$ObjPai = new Pai();
?>