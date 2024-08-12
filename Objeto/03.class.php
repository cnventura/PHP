<?php
//crie um arquivo chamado: 03.class.php
/*
Classe abstrata 'PaiAbstrata' é uma classe que não pode ser instanciada diretamente.
Método abstrato este método 'BoaTarde' é declarado como abstrato, o que obriga qualquer 
classe que herde de 'PaiAbstrata' a implementar este método
A classe abstrata não pode ser acessada diretamente, somente o filho pode acessá-la
*/
abstract class PaiAbstrata{
    abstract public function BoaTarde();
}

/*
Classe concreta 'FilhoImplantacao' é a classe que herda de 'PaiAbstrata'.
Implementação do método abstrato a classe 'FilhoImplantacao' implementa o método 'BoaTarde()' definido como abstrato na classe 'PaiAbstrata'. A implementação do método - neste caso ser imprimir uma string.
*/

class FilhoImplantacao extends PaiAbstrata{
    public function BoaTarde(){
        print "Aqui imprime o método abstrato 'BoaTarde();'!<br>";
    }
}

$OBJFILHO = new FilhoImplantacao();

?>
<h3>Implantação da Classe abstrata no filho</h3>
<p><?=$OBJFILHO->BoaTarde();?></p>