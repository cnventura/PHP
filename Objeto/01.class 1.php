<?php 
    // Crie um arquivo chamado: 01.class.php

    /*  Criando um Objeto Pai 
        Para isso usamos a 'class' + o nome do Objeto no caso 'Pai'.
    */
    class Pai{
        // criando propriedades | Publica - Protegida - Privada
        public $cor = "Vermelho";
        public $largura = "2cm";
        protected $altura = "6cm";
        protected $profundidade = "2cm";
        private $peso = "30g";

        // Criando um método
        function BoaTarde(){
            print "Classe Pai - Propriedade cor: ".$this->cor."<br>";
            print "Classe Pai - Propriedade Largura: ".$this->largura."<br>";
            print "Classe Pai - Propriedade Altura: ".$this->altura."<br>";
            print "Classe Pai - Propriedade Profundidade: ".$this->profundidade."<br>";
            print "Classe Pai - Propriedade Peso: ".$this->peso."<br>";
        }
    }

    /*  Herança 
        A classe 'Filho' estende a classe 'Pai', o que significa qie ela herda todas as propriedades e métodos da classe 'Pai'
    */
    class Filho extends Pai{
        function BemVindo(){
            // Vamos imprimir de uma unica vez todos os itens da classe 'Pai'
            /*Os '::', este operador em PHP é conhecido como o operador de resolução de escopo. Ele é usado para acessar membros 'Métodos ou Propriedades', estáticos, constantes, ou métodos de uma classe base (no contexto de herança)*/
            Pai::BoaTarde();
        }
    }
    class Filho2 extends Pai{
        function Bora(){
            print "Classe Filho2 - Propriedade cor: ".$this->cor."<br>";
            print "Classe Filho2 - Propriedade Largura: ".$this->largura."<br>";
            print "Classe Filho2 - Propriedade Altura: ".$this->altura."<br>";
            print "Classe Filho2 - Propriedade Profundidade: ".$this->profundidade."<br>";
            print "Classe Filho2 - Propriedade Peso: ".$this->peso."<br>";
        }
    }
    /* Uso do Objeto 'Pai' */
    $OBJPAI = new Pai(); // Boas praticas $OBJPAI
    $OBJFILHO = new Filho();
    $OBJFILHO2 = new Filho2();
?>
<h3>Pai</h3>
<p><?=$OBJPAI->BoaTarde();?></p>
<hr>
<h3>Filho</h3>
<p><?=$OBJFILHO->BemVindo();?></p>
<hr>
<h3>Filho2</h3>
<p><?=$OBJFILHO2->Bora();?></p>