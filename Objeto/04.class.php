<?php
// crie um arquivo chamado: 04.class.php
/* Interface vamos criar a 'MinhaInterface' é uma interface em php define um contrato que as classes devem implementar e seguir.
Método 'OlaTurma' não fornece a implementação qualquer classe que implemente esta interface deve fornecer uma implementação para este método.
 */
interface MinhaInterface{
    public function OlaTurma();
}

/*Classe implementadora 'Uso' é a classe que implementa a interface 'MinhaInterface'.
A classe 'Uso' deve ser  obrigatoriamente implementada o método 'OlaTurma' que irá ter a saída como string */

class Uso implements MinhaInterface{
    public function OlaTurma(){
        print "E ai deu certo :D <br>";

    }
}

$ObjUso = new Uso();
?>
<p><?=$ObjUso->OlaTurma();?></p>