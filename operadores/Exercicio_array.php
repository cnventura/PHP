<?php
// Desafio: Verificação de Números Primos:
//     Peça ao usuário que insira um número inteiro (int) e verifique se ele é um número primo. Use um booleano 
//     para indicar se o número é primo ou não.

// $numero = 5;
// $contador = 0;

// for ($i = 1, $i <= $numero; $i++){
//     if ($numero % $i ==0){
//         $contador++;

// }}

// if ($contador == 2){
//     echo "Primo";}
//     else{
//         echo "Não Primo";
//     }


     
//     1 - Crie um array contendo os dias da semana. Em seguida, exiba o terceiro dia da semana.

$diasSemana = array ("domingo", "segunda", "terça", "quarta", "quinta", "sexta", "sábado");
print_r($diasSemana);
echo "<hr>";

echo "O terceiro dia é: ".$diasSemana[2];
  
//     2 - Crie um array contendo meses do ano. Altere o valor do último elemento para Onzembro"

$mesesAno = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
print_r($mesesAno);
echo "<hr>";

$numeros[11] = "Onzembro";
print_r($numeros);
echo "<hr>";


     
//     3 - Crie um array vazio. Adicione os números de 1 a 5 no array. Depois, adicione o número 6 ao final do array"

$arrayVazio[] = [1, 2, 3, 4, 5];
print_r($arrayVazio);
$arrayVazio[] = [6];
print_r($arrayVazio);
echo "<hr>";

     
//     4 - Utilize um loop foreach para percorrer o array de meses do ano e exibir cada um.
     
//     5 - Conte quantos elementos o array de dias de semana possui.
     
//     6 - Utilize a função array_serach() para econtrar a posição do dia "Sábado" no array e exiba o resultado.




?>