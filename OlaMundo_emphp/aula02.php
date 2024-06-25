<?php
echo "olá Mundo! <br>";
echo "olá mundo 2 <br>";

//concatenação em PHP
$nome = "João";
$sobrenome = "silva";
$nome_completo = $nome. " " . $sobrenome;
echo $nome_completo;
echo "<br>";

#para obter o comprimento de um string em php, usamos a função strlen()

$texto = "Olá mundo!";
echo strlen($texto);
echo "<br>";

//para substituir parte de uma string, usamos a função str_replace()
$texto = "O rato roeu a roupa";
$novo_texto = str_replace("rato", "gato", $texto);
echo $novo_texto;
echo "<br>";

echo $texto = "Olá mundo <br>";
$texto_minusculo = strtolower($texto);
$texto_maiusculo = strtoupper($texto);
echo $texto_minusculo;
echo $texto_maiusculo;

//trim -> Remove espaços em branco no início e no final de uma string.
$texto_sem_espaco = trim($texto);
echo strlen($texto_sem_espaco);
echo $texto_sem_espaco;
echo "<br>";

//strpos - Encontra a primeira posição de uma string específica.
$lista_alunos = "João, Maria, Fernando, Natalia, José";
$posicao_maria = strpos($lista_alunos, "Maria");
echo "A posição da Maria é: " . $posicao_maria;
echo "<br>";

$texto = "Socorram-me subi no onibus em marrocos";
$texto_invertido = strrev($texto);
echo $texto_invertido;

echo "<br>";

//Exercícios

#1
//Crie uma variável para nome e outra para profissão
//Escreva a mensagem "fulono é tal_profissão"

$nome = "Jane";
$sobrenome = "enfermeira";
echo $nome . " é " . $sobrenome;
echo "<br>";



#2
//Crie uma variável senha e armazene "senha123"
//Verifique se a senha tem mais de 8 caracteres
//Se sim, diga que a senha é válida. Se não, diga que é inválida

$senha = "senha123"; //Ver o corrigida da prof
if    ($senha > 8){
    echo "Senha válida";
} else {
    echo "Senha inválida";
}
echo "<hr>";



#3
//Corrija a palavra "ExEmPlO" para que ela fique totalmente em minúsculo

$texto = "ExEmPlo";
$texto_minusculo = strtolower($texto);
echo $texto_minusculo;
echo "<hr>";


#4
//Corrija o link "   http://exemplo.com   "  para que ele não tenha espaços inválidos

echo $texto = "  http://exemplo.com  ";//ver da prof
$texto_sem_espaco = trim($texto);
echo strlen($texto_sem_espaco);
echo $texto_sem_espaco;
echo "<br>";




#5
//Inverta a string "abcd123" e encontre a posição do caractere "3" após a inversão

$texto = "abcd123";
$texto_invertido = strrev($texto);
echo $texto_invertido;
echo "<br>";


$posicao_3 = strpos($texto_invertido, "3");
echo "A posição é: " . $posicao_3;
echo "<br>";