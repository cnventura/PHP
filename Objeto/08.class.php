<?php
//crie um arquivo chamado: 08.class.php
//criando classe 'Pai
class Pai {
/*
Propriedade estática: 'static' a classe 'Pai define a propriedade estática chamada '$vEstatica'.
O valor atribuído a ela será de 10.6. em Php uma propriedade estática pertence à classe e não a instâncias individuais da classe. Isso significa que vc pode acessar a propriedade sem criar um objeto de classe.
*/

static $vEstatica = 10.6;

}
print Pai::$vEstatica;

?>
<br>
<?php
class Pai2{
    /*
    Método estático a classe 'Pai2' define um método estático que pode ser acessado sem a necessidade do objeto assim como a propriedade.
    */
    static public function mStatico(){
        print "Olá Mundo";
    
    }
}

Pai2::mStatico();
?>