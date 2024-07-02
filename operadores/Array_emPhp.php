<?php
//INTRODUÇÃO A ARRAYS EM PHP

$frutas = array ("maça", "banana", "morango", "laranja");
print_r($frutas);
echo "<hr>";

$numeros = [2,5,6,9];
print_r($numeros);
echo "<hr>";

$alunos = array("João" =>18, "Maria" => 20, "Pedro" =>19);
print_r($alunos);
echo"<hr>";

//acessando os elementos
echo "A segunda fruta é: ".$frutas[1];
echo "O terceiro número é: ".$numeros[2]."<br>";
echo "A idade de João é: ".$alunos["João"]."<br>";

//Alteração de elementos

$frutas[0] = "pera";
print_r($frutas);
echo "<hr>";

$numeros[4] = 100;
print_r($numeros);
echo "<hr>";

$alunos["Maria"] = 21;
$alunos["Ana"] = 21;
print_r($alunos);
echo "<hr>";

//adicionando um array
$frutas[] = "abacaxi";
print_r($frutas);
$numeros[] = 93;
$alunos["José"] = 25;
print_r($numeros);
echo "<hr>";
print_r($alunos);
echo "<hr>";   

//percorrendo pelos elementos
echo "Listas de frutas:";
foreach($frutas as $fruta){echo $fruta. " ";
}
echo "<hr>";

foreach($numeros as $numero){//Escreva a lista de números
echo $numero. " ";
}
echo "<hr>";

foreach($alunos as $aluno){
    echo $aluno. " ";
}
echo "<br>";
echo "<hr>";

foreach($alunos as $nome => $idade){
    echo $nome . " tem " .$idade. " anos.<br>";
}
echo "<br>";
echo "<hr>";

//Funções úteis para arrays
echo "Numeros de elementos no array de fruta são: " . count($frutas). "<br>";
echo "Índice de fruta 'Laranja':" .array_search("Laranja", $frutas). "<br>";

echo "Última fruta do array: " . end($frutas) . "<br>";

print_r($frutas);
echo"<br>";
echo "<hr>";
echo "Array de frutas depois de reverter";
echo"<br>";
$frutas_revertidas = array_reverse($frutas);
print_r($frutas_revertidas);




?>