<?php
// crie um arquivo chamado: 05.class.php
//crie uma interface chamada 'Pai'
interface Pai{
    public function Fim();
}
// criando a classe de uso 'Filho'
class Filho implements Pai{
    /*O método final: é declarado 'Fim' como 'final' um método em php que significa que ele não pode ser sobrescrito por nenhuma classe que herde da classe 'Filho' ou seja, a implementação 'Fim()' nesta classe é definitiva e imutável.
     */
    final public function Fim(){
        print "Imprimiu na tela?";
    }
}

$ObjFilho = new Filho();

echo $ObjFilho->Fim();


?>