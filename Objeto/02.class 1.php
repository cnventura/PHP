<?php 
    // Crie um arquivo chamado: 02.class.php

    // Criando a classe 'Pai"
    class Pai{
        // Criando um método Privado
        /*
            Este método é privado 'private', o que siginifica que só pode ser acessado dentro da prória classe 'Pai'. 
            Nenhuma classe que herde 'Pai' (como classe 'Filho') pode acessá-lo diretamente.
        */
        private function MetodoPrivado(){
            print   "Pai: Método Privado <br>
                    Chamada <br>
                    Pai::MetodoPrivado();<br>";
        }

        // Criando um método Protegido
        /*
            Este método é protegido 'protected', o que siginifica que pode ser acessado dentro da própria classe 'Pai' e em qualquer classe que herde 'Pai'(como classe 'Filho').
        */
        protected function MetodoProtegido(){
            print   "Pai: Método Protegido <br>
                    Chamada <br>
                    Pai::MetodoProtegido();<br>";
        }

        // Criando um método Publico
        /*
            Este método é publico 'public', o que siginifica que pode ser acessado de qualquer lugar, seja dentro da própria classe 'Pai', nas classes derivadas (como classe 'Filho') ou em código externo.
        */
        public function MetodoPublico(){
            print   "Pai: Método Publico <br>
                    Chamada <br>
                    Pai::MetodoPublico();<br>";
        }

        protected function ExibeMetodoProtegido(){
            $this->MetodoPrivado();
        }
    }

    class Filho extends Pai{
        public function EscreveTela(){
            $this->MetodoPublico();
            $this->MetodoProtegido();
            //$this->MetodoPrivado();
            $this->ExibeMetodoProtegido();
        }
    }

    $ObjFilho = new Filho();
?>

<h3>Filho Herda todos os três métodos desta forma ok!</h3>
<p><?=$ObjFilho->EscreveTela();?></p>