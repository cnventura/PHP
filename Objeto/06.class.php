<?php
// crie um arquivo chamado: 06.class.php
// crie uma classe chamada Pai
class Pai
{
    // Construção a função '__construct()' é um construtor da classe em Php, o construtor é criado automaticamente chamado quando um ojbeto da classe é criado. Neste caso, o construtor da classe 'Pai' imprime a mensagem "Este é o construtor de classe".
    function __construct()
    {
        print "Este é o construtor de classe. <br>";
    }
}

//crie uma classe chamada Filho que herda de Pai
class Filho extends Pai
{
    /*Construtor: a função '__construct()' na classe 'Filho' é o construtor da subclasse.
Chamada ao construtor da superclasse: Dentro do construtor da classe 'Filho', a linha 'parent::__construct();' chama explicitamente o construtor da classe 'Pai', isso garante que qualquer inicialização necessária definida na classe 'Pai' seja executada antes da inicialização adicinal na classe 'Filho'
 */
    function __construct()
    {
        parent::__construct();
        print "Este é o construtor da subclasse. <br>";
    }
}

$objPai = new Pai();
$objFilho = new Filho();
?>
